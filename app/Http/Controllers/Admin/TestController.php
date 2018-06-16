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

    public function getJobResults($page = 1, $per = 10)
    {
        $results = Result::join('applications', 'results.application_id', '=',
            'applications.application_id')
            ->join('jobs', 'applications.job_id', '=', 'jobs.job_id')
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

}
