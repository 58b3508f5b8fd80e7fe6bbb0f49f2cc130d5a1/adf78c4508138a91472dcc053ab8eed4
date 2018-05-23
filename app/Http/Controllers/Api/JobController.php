<?php

namespace App\Http\Controllers\Api;

use App\Application;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\JobResource;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Return a paginated list of jobs.
     *
     * @return JobResource
     */

    public function index(){
        $data['applications'] = $this->getJobs();
        return view('index', $data);
    }


    /**
     * Fetch and return the job.
     *
     * @param Job $job
     *
     * @return JobResource
     */
    public function show(Job $job)
    {
        return new JobResource($job);
    }

    /**
     * Validate and save a new job to the database.
     *
     * @param Request $request
     *
     * @return JobResource
     */
    public function store(Request $request)
    {
        $job = $this->validate($request, [
            'name'  => 'required|min:3|max:50',
            'email' => 'required|email',
            'body'  => 'required|min:3'
        ]);

        $job = Job::create($job);

        return new JobResource($job);
    }

}