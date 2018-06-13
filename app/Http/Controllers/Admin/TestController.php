<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Interview;
use App\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    //
    public function index()
    {

    }

    public function getInvite($id)
    {
        $subData['applicant'] = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')
            ->join('users', 'users.user_id', 'applications.resume_id')
            ->where('applications.application_id', $id)->first();
        $html = View::make('partials.admin.invite', $subData);
        $data['html'] = $html->render();
        return response()->json($data);
    }

    public function getJobResults($page = 1, $per = 10)
    {
        $results = Result::join('job_tests', 'results.test_id', '=',
            'job_tests.test_id')
            ->join('jobs', 'job_tests.job_id', '=', 'jobs.job_id')
            ->select(DB::raw('COUNT(`results`.`result_id`) as count, MAX(`score`) as maximum, MIN(`score`) as minimum'),
                'results.*', 'jobs.*')->get();
        $collection = collect($results);
        $data['results'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($results) / $per);
        $data['page'] = $page;
        $data['per'] = $per;

        return $data;
    }

    public function getTestResults($id, $page = 1, $per = 10)
    {
        $results = Result::join('user_metas', 'results.resume_id',
            'user_metas.user_id')
            ->join('applications', 'applications.application_id', '=',
                'results.application_id')->where('results.test_id', $id)
            ->select('results.*', 'user_metas.*',
                'applications.status as application_status')
            ->orderBy('results.score', 'desc')->get();
        $collection = collect($results);
        $data['results'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($results) / $per);
        $data['page'] = $page;
        $data['per'] = $per;

        return $data;
    }

    public function sendInvite(Request $request)
    {
        $id = $request->id;
        $applicant = Application::where([
            ['application_id', $id],
            ['status', 'shortlisted']
        ])->first();
        if ($applicant) {
            $application = Application::find($applicant->id);
            $application->status = "invited";

            $interview = new Interview();
            $interview->interview_id = $application->application_id;
            $interview->resume_id = $application->resume_id;
            $interview->due_date = $request->date;
            $interview->type = $request->type;
            $interview->address = $request->address;

            if ($interview->save() && $application->save()) {
                $data['message']
                    = "An invite has been sent to $request->full_name";
                $data['state'] = "success";
            } else {
                $data['message']
                    = "Oops! Sorry, we currently can't process your request.";
                $data['state'] = "success";
            }
            $subData = $this->getTestResults($id);
            $subData['title'] = 'Results';
            $html = View::make('partials.admin.results', $subData);
            $data['html'] = $html->render();
            $data['error'] = false;
        } else {
            $data['message'] = "Oops! Sorry, we cant find the applicant..";
            $data['state'] = "error";
            $data['error'] = true;
        }

        return response()->json($data);
    }

    public function viewJobResults()
    {
        $data = $this->getJobResults();
        $data['title'] = 'Results';
        return view('admin.job_tests', $data);
    }

    public function viewTestResults($id)
    {
        $data = $this->getTestResults($id);
        $data['title'] = 'Results';
        return view('admin.results', $data);
    }


    function addTest()
    {

    }
}
