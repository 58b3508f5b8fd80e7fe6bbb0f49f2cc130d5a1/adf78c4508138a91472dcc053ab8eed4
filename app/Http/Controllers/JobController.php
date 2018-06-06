<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class JobController extends Controller
{
    //
    public function index()
    {
        $data['jobs'] = $this->getJobs();
        $data['title'] = 'Jobs';
        $data['type'] = 'new';
        return view('jobs', $data);
    }

    public function applied()
    {
        $data['jobs'] = $this->getAppliedJobs();
        $data['title'] = 'Applied jobs';
        $data['type'] = 'applied';
        return view('jobs', $data);
    }

    public function apply(Request $request)
    {
        $id = $request->id - 9431;
        $job = Job::find($id);
        $application = new Application();
        $application->application_id = md5($job->job_id . Auth::user()->user_id
            . date('YmdHis'));
        $application->resume_id = Auth::user()->user_id;
        $application->job_id = $job->job_id;
        $application->status = "applied";

        if ($application->save()) {
            $data['message']
                = "We have received your job application. You will be contacted if you're among those selected.";
            $data['state'] = 'success';
            $subData['jobs'] = $this->getJobs();
            $subData['type'] = 'new';
            $subData['title'] = 'Jobs';
            $html = View::make('partials.jobs', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
        }
        return response()->json($data);
    }

    public function cancel(Request $request)
    {
        $id = $request->id - 113;
        $job = Application::where('resume_id', Auth::user()->user_id)
            ->find($id);

        if ($job->delete()) {
            $data['message']
                = "Your application was canceled successfully..";
            $data['state'] = 'success';
            $subData['jobs'] = $this->getAppliedJobs();
            $subData['type'] = 'applied';
            $subData['title'] = 'Jobs';
            $html = View::make('partials.jobs', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
        }
        return response()->json($data);
    }

    public function getJobs($page = 1)
    {
        $applications = Application::where('resume_id', Auth::user()->user_id)
            ->pluck('job_id');
        $jobs = Job::whereNotIn('job_id', $applications)
            ->whereDate('jobs.close_at', '>=', date('Y-m-d'))->limit(100)
            ->latest()->get();
        return $jobs;
    }

    public function getAppliedJobs($page = 1)
    {
        $jobs = Application::leftJoin('jobs', 'applications.job_id',
            '=', 'jobs.job_id')->where('resume_id', Auth::user()->user_id)
            ->select('applications.id', 'jobs.title', 'jobs.country',
                'jobs.state', 'jobs.lga', 'jobs.description',
                'salary_from', 'jobs.experience', 'jobs.close_at',
                'applications.created_at', 'applications.status')->limit(100)
            ->latest()
            ->get();

        return $jobs;
    }

}
