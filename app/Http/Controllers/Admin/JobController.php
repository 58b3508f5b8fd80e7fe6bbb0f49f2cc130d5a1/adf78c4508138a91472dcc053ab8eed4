<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Interview;
use App\Job;
use App\Job_test;
use App\Online_test;
use App\Result;
use App\Test;
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

    public function addJobs(Request $request)
    {
        $details = $request->all();
        $message = '';
        $status = '';
        unset($details['_token']);
        unset($details['test']);
        unset($details[0]);

        $checkTest = Test::where('test_id', $request->test_id)->first();
        if ($checkTest) {
            $job_id = md5($details['title'] . $details['description']
                . date('YmdHis') . str_random());
            $details = array_merge($details, [
                'job_id' => $job_id,
            ]);
            $addJob = Job::create($details);
            $job_test = new Job_test();
            $job_test->job_test_id = md5($job_id . $checkTest->test_id);
            $job_test->job_id = $job_id;
            $job_test->test_id = $checkTest->test_id;

            if ($addJob && $job_test->save()) {
                $message
                    = "You've added <em>$request->title<em> successfully..";
                $status = 'success';
            }
            else{
                $message
                    = "Oops! An error occurred. We were unable to add <em>$request->title<em>..";
                $status = 'danger';
            }
        }


        return redirect()->back()->with('status', [
            'message' => $message,
            'state'   => $status
        ]);
    }

    public function jobs($page = 1, $per = 10)
    {
        $data = $this->getAppliedJobs($page, $per);
        $data['title'] = 'Jobs';

        return view('admin.jobs', $data);
    }

    public function searchJobs($page = 1, $per = 10, Request $request)
    {
        $data = null;
        $query = $request->input('search');

        $terms = preg_split('/[\s,;:]+/', $query);
        $terms = array_filter($terms);

        $data = $this->getSearchedJobs($page, $per, $terms);
        $data['title'] = 'Jobs';
        $data['search'] = $query;


        return view('admin.jobs', $data);
    }

    public function getSearchedJobs($page = 1, $per = 10, $terms)
    {
        $jobs = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')->where(
            function ($query) use ($terms) {
                for ($i = 0; $i < count($terms); $i++) {
                    $query->where(DB::raw("LOWER(jobs.title)"),
                        'like', DB::raw("LOWER('%$terms[$i]%')"))
                        ->orWhere(DB::raw("LOWER(jobs.country)"),
                            'like', DB::raw("LOWER('%$terms[$i]%')"))
                        ->orWhere(DB::raw("LOWER(jobs.state)"),
                            'like', DB::raw("LOWER('%$terms[$i]%')"))
                        ->orWhere(DB::raw("LOWER(jobs.lga)"),
                            'like', DB::raw("LOWER('%$terms[$i]%')"));
                }
            })->select('jobs.*', 'applications.job_id',
            DB::raw('count(`applications`.`job_id`) as count'))
            ->orderBy('jobs.close_at', 'desc')->orderBy('jobs.post_at', 'desc')
            ->groupBy('applications.job_id')->get();
        $collection = collect($jobs);
        $data['jobs'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($jobs) / $per);
        $data['page'] = $page;
        $data['per'] = $per;

        return $data;
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
        $data['per'] = $per;
        return $data;
    }

    public function getAppliedJobs($page = 1, $per = 10)
    {
        $jobs = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')->select('jobs.*', 'applications.job_id',
            DB::raw('count(`applications`.`job_id`) as count'))
            ->orderBy('jobs.close_at', 'desc')->orderBy('jobs.post_at', 'desc')
            ->groupBy('applications.job_id')->get();

        $collection = collect($jobs);
        $data['jobs'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($jobs) / $per);
        $data['page'] = $page;
        $data['per'] = $per;
        return $data;
    }

    public function shortlistApplicant(Request $request)
    {
        $id = $request->id - 5451;
        $resume_id = $request->resume_id;
        $applicant = Application::find($id);
        if ($applicant && $applicant->resume_id == $resume_id) {
            $applicant->status = 'shortlisted';
            //$test_id=Job_test::where('job_id',$applicant->job_id)->value('test_id');
            $result = new Result();
            $result->result_id = md5($resume_id . $id . date('YmdHis'));
            $result->resume_id = $applicant->resume_id;
            $result->application_id = $applicant->application_id;
            $result->test_id = Job_test::where('job_id', $applicant->job_id)
                ->value('test_id');
            $result->status = 'open';

            if ($result->save() && $applicant->save()) {
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

    public function viewJobsAdd()
    {
        $data['title'] = 'Add Jobs';
        $data['tests'] = Online_test::select('title', 'test_id')->get();
        return view('dashboard.admin.addJob', $data);
    }
}
