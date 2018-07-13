<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Home';
        $data['jobs'] = $this->getJobs();
        return view('welcome', $data);
    }

    public function jobs()
    {
        $data = $this->getAllJobs();
        $data['title'] = 'Jobs';

        return view('searchJobs', $data);
    }

    public function getJobs()
    {
        $jobs = Job::orderBy('close_at', 'desc')->limit(6)->get();
        return $jobs;
    }

    public function searchJobs($page = 1, $per = 10, Request $request)
    {
        $data = null;
        $location = $request->location;
        $qualification = $request->qualification;
        $query = $request->search;

        $terms = preg_split('/[\s,;:]+/', $query);
        $location = preg_split('/[\s,;:]+/', $location);
        $terms = array_filter($terms);
        $data = $this->getSearchedJobs($page, $per, $terms,
            array_filter($location), $qualification);
        $data['title'] = 'Jobs';
        $data['search'] = $query;
        $data['location'] = $request->location;
        $data['qualification'] = $qualification;
        return view('searchJobs', $data);
    }

    public function getAllJobs($page = 1, $per = 10)
    {
        $jobs = Job::orderBy('close_at', 'desc')->get();
        $collection = collect($jobs);
        $data['jobs'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($jobs) / $per);
        $data['page'] = $page;
        $data['per'] = $per;
        return $data;
    }

    public function getSearchedJobs(
        $page = 1,
        $per = 10,
        $terms,
        $location,
        $qualification
    ) {
        $jobs = Job::leftJoin('applications', 'jobs.job_id', '=',
            'applications.job_id')
            ->where(
                function ($query) use ($location) {
                    if (isset($location)) {
                        for ($i = 0; $i < count($location); $i++) {
                            $query->where(DB::raw("LOWER(jobs.state)"),
                                'like', DB::raw("LOWER('%$location[$i]%')"))
                                ->orWhere(DB::raw("LOWER(jobs.lga)"),
                                    'like',
                                    DB::raw("LOWER('%$location[$i]%')"));
                        }
                    }
                })
            ->where(
                function ($query) use ($qualification) {
                    if (isset($qualification)) {
                        $query->where(DB::raw("LOWER(jobs.qualification)"),
                            'like', DB::raw("LOWER('%$qualification%')"));
                    }
                })
            ->where(
                function ($query) use ($terms, $location, $qualification) {


                    for ($i = 0; $i < count($terms); $i++) {
                        $query->where(DB::raw("LOWER(jobs.title)"),
                            'like', DB::raw("LOWER('%$terms[$i]%')"))
                            ->orWhere(DB::raw("LOWER(jobs.country)"),
                                'like', DB::raw("LOWER('%$terms[$i]%')"));
                    }
                })->select('jobs.*',
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
}