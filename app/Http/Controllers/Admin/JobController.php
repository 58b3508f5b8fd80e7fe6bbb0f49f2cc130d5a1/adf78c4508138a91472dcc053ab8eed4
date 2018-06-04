<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $data['id']=$id;
        $data['title'] = 'Applicants';

        return view('admin.applicants', $data);
    }

    public function getApplicants($id, $page = 1, $per = 10)
    {
        $applicants = Application::join('jobs', function ($join) use ($id) {
            $join->on('jobs.job_id', '=', 'applications.job_id')
                ->where('applications.job_id', $id);
        })->join('user_metas', 'user_metas.user_id', '=',
            'applications.resume_id')->get();
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
            ->groupBy('applications.job_id')->get();

        $collection = collect($jobs);
        $data['jobs'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($jobs) / $per);
        $data['page'] = $page;
        return $data;
    }
}
