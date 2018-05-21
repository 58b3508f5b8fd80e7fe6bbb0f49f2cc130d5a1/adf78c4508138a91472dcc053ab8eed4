<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\JobController;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Auth::user()->status;
        switch ($status) {
            case 'visitor':
                $profile=new ProfileController();
                $data=$profile->getProfile();
                $html = View::make('partials.profile',$data);
                $data['html'] = $html->render();
                break;
            case 'registered':
                $resume = new ResumeController();
                $data['applications'] = $resume->getResume();
                $html = View::make('partials.jobs', $data);
                $data['html'] = $html->render();
                break;
            case 'applicant':
                $job = new JobController();
                $data['applications'] = $job->getJobs();
                $html = View::make('partials.jobs', $data);
                $data['html'] = $html->render();
                break;
            case 'processing':
                $html = View::make('partials.profile');
                $data['html'] = $html->render();
                break;
            case 'staff':
                $html = View::make('partials.profile');
                $data['html'] = $html->render();
                break;
            default:
                $html = View::make('partials.profile');
                $data['html'] = $html->render();
                break;
        }


        return view('index', $data);
    }

    public function getEnumValues($table, $column)
    {
        $type
            = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }
}
