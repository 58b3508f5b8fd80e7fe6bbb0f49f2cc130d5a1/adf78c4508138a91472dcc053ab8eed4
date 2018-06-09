<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job_test;
use App\Question;
use App\Result;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
    public function index($id)
    {
        $data['title'] = "Online Test";
        $user = Application::join('results', 'applications.application_id',
            'results.application_id')->where([
            ['results.application_id', $id],
            ['applications.resume_id', Auth::user()->user_id],
            ['applications.status', 'shortlisted']
        ])->first();
        if ($user) {

            $test = $this->getTest($user->job_id);

            if ($test) {
                $data['user'] = $user;
                $data['test'] = $test;
            } else {
                $data['error'] = "Oops! Sorry, this test is not available..";
            }
        } else {
            $data['error'] = "Oops! You were not scheduled for this test..";
        }


        return view('dashboard.test', $data);
    }

    public function getTest($id)
    {
        $isTest = Job_test::join('tests', 'job_tests.test_id', '=',
            'tests.test_id')
            ->where('job_tests.job_id', $id)->first();
        return $isTest;
    }

    public function startTest(Request $request)
    {
        $id = $request->id;
        $test = Test::where('test_id', $id)->first();
        $data = [];
        if ($test) {
            $result = Result::where([
                ['test_id', $test->test_id],
                ['resume_id', Auth::user()->user_id]
            ])->first();
            if ($result && $result->status == 'open') {
                $data['questions'] = Question::where('test_id', $test->test_id)
                    ->inRandomOrder()->limit($test->length)->get();
            } else {
                if (!$result) {

                } elseif ($result->status !== 'open') {

                }
            }
            $data['test'] = $test;
            $data['title'] = $test->title;
        } else {
            $data['title'] = 'Invalid Test';
        }

        return view('dashboard.questions', $data);
    }

    public function scoreTest(Request $request){

    }
}
