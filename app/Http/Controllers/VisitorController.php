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
        $data['title']='Home';
        $data['jobs'] = $this->getJobs();
        return view('welcome', $data);
    }

    public function getJobs()
    {
        $jobs = Job::orderBy('close_at', 'desc')->limit(6)->get();
        return $jobs;
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

        return view('jobs', $data);
    }

    public function getSearchedJobs($page = 1, $per = 10, $terms)
    {
        $jobs = Job::leftJoin('applications', 'jobs.job_id', '=',
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
