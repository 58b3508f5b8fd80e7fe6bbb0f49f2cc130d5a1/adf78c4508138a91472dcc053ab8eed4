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
            $data['result'] = $result;
            $data['title'] = $test->title;
        } else {
            $data['title'] = 'Invalid Test';
        }

        return view('dashboard.questions', $data);
    }

    public function submitTest(Request $request)
    {
        $questions = $request->all();
        $score = 0;
        $data = [];
        $isValid = Test::join('results', 'tests.test_id', '=',
            'results.test_id')->where('tests.test_id', $request->tid)
            ->where('results.result_id', $request->rid)
            ->first();

        if ($isValid) {

            $score = Question::where(function ($query) use ($questions) {
                foreach ($questions as $question => $answer) {
                    $query->orWhere([
                        ['question_id', $question],
                        ['answer', $answer]
                    ]);
                }
            })->sum('score');
            $totalScore = Question::where(function ($query) use ($questions) {
                foreach ($questions as $question => $answer) {
                    $query->orWhere('question_id', $question);
                }
            })->sum('score');

            $result = Result::find($isValid->id);
            $applicant = Application::where('id', $result->application_id)
                ->first();
            if ($applicant) {
                $application=Application::find($applicant->id);
                $application->status="processing";
                $result->score = ($score / $totalScore) * 100;

                $application->save();
                $result->save();
            }
        } else {
            $data['error'] = "Oops! This is not a valid test";
        }
        if ($request->ajax()) {

        }

        $data['title'] = 'Submited';
        $data['score'] = $score;
        $data['percent'] = ($score / $isValid->length) * 100;
        return view('dashboard.submitted', $data);

    }
}
