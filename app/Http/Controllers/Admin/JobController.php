<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class JobController extends Controller
{
    //
    public function index()
    {
        $data = $this->getAppliedJobs();
        $data['title'] = 'Dashboard';

        return view('admin.jobs', $data);
    }

    public function jobs($page = 1, $per = 10)
    {
        $data = $this->getAppliedJobs($page, $per);
        $data['title'] = 'Jobs';

        return view('admin.jobs', $data);
    }

    public function jobApplicants($id)
    {
        $data = $this->getApplicants($id);
        $data['id'] = $id;
        $data['title'] = 'Applicants';

        return view('admin.applicants', $data);
    }

    public function getApplicants($id, $page = 1, $per = 10)
    {
        $applicants = Application::join('user_metas', 'user_metas.user_id', '=',
            'applications.resume_id')
            ->where('applications.job_id', $id)
            ->select('applications.*', 'user_metas.*', 'applications.id as id')
            ->orderBy('applications.created_at')
            ->get();
        $collection = collect($applicants);
        $data['applicants'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($applicants) / $per);
        $data['page'] = $page;
        return $data;
    }

    public function getAppliedJobs($page = 1, $per = 10)
    {
        $jobs = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')->select('jobs.*', 'applications.job_id',
            DB::raw('count(`applications`.`job_id`) as count'))
            ->orderBy('jobs.close_at')->orderBy('jobs.post_at')
            ->groupBy('applications.job_id')->get();

        $collection = collect($jobs);
        $data['jobs'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($jobs) / $per);
        $data['page'] = $page;
        return $data;
    }

    public function shortlistApplicant(Request $request)
    {
        $id = $request->id - 5451;
        $resume_id = $request->resume_id;
        $applicant = Application::find($id);
        if ($applicant && $applicant->resume_id == $resume_id) {
            $applicant->status = 'shortlisted';
            if ($applicant->save()) {
                $data['message']
                    = "The applicant has been shortlisted";
                $data['state'] = "danger";
            } else {
                $data['message']
                    = "An error occurred while updating the record";
                $data['state'] = "danger";
            }
        } else {
            $data['message']
                = "There is a conflict in the data we received";
            $data['state'] = "danger";
        }
        $subData = $this->getApplicants($applicant->job_id);
        $subData['id'] = $applicant->job_id;
        $subData['title'] = 'Applicants';
        $html = View::make('partials.admin.applicants', $subData);
        $data['html'] = $html->render();
        return response()->json($data);

    }
}
