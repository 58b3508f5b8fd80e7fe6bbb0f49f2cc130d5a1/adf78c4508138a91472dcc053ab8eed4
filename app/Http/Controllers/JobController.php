<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function index(){
        $data['jobs'] = $this->getJobs();
        $data['title'] ='jobs';
        return view('jobs', $data);
    }

    public function getJobs($page=1)
    {
        $jobs = Application::leftJoin('jobs', 'applications.job_id',
            '=', 'jobs.job_id')->where('resume_id', Auth::user()->user_id)
            ->select('applications.id', 'jobs.title', 'jobs.country', 'jobs.state', 'jobs.lga', 'jobs.description',
                'salary_from', 'jobs.experience', 'jobs.close_at','applications.created_at','applications.status')->latest()
            ->get();

        return $jobs;
    }
    public function getAppliedJobs($page=1)
    {
        $jobs = Application::leftJoin('jobs', 'applications.job_id',
            '=', 'jobs.job_id')->where('resume_id', Auth::user()->user_id)
            ->select('applications.id', 'jobs.title', 'jobs.country', 'jobs.state', 'jobs.lga', 'jobs.description',
                'salary_from', 'jobs.experience', 'jobs.close_at','applications.created_at','applications.status')->latest()
            ->get();

        return $jobs;
    }

}
