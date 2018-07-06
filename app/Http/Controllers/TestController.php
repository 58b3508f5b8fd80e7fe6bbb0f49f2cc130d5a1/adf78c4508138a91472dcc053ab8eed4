<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job_test;
use App\Test_question;
use App\Result;
use App\Online_test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $test = Job_test::join('online_tests', 'job_tests.test_id', '=',
            'online_tests.test_id')
            ->where('job_tests.job_id', $id)->first();
        return $test;
    }

    public function startTest(Request $request)
    {
        $id = $request->id;
        $test = Online_test::where('test_id', $id)->first();
        $data = [];
        if ($test) {
            $result = Result::where([
                ['test_id', $test->test_id],
                ['resume_id', Auth::user()->user_id]
            ])->first();
            if ($result && $result->status == 'open') {
                $data['questions'] = Test_question::where('test_id', $test->test_id)
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
            $data['title'] = 'Invalid Online_test';
        }

        return view('dashboard.questions', $data);
    }

    public function submitTest(Request $request)
    {
        $questions = $request->all();
        $score = 0;
        $data = [];
        $isValid = Online_test::join('results', 'online_tests.test_id', '=',
            'results.test_id')->where('online_tests.test_id', $request->tid)
            ->where('results.result_id', $request->rid)
            ->select('online_tests.*', 'results.*', 'results.id as id')
            ->first();

        if ($isValid) {
            $score = Test_question::where(function ($query) use ($questions) {
                foreach ($questions as $question => $answer) {
                    $query->orWhere([
                        ['question_id', $question],
                        ['answer', $answer]
                    ]);
                }
            })->count();

            $result = Result::find($isValid->id);
            $applicant = Application::where('application_id',
                $result->application_id)
                ->first();
            if ($applicant) {
                $application = Application::find($applicant->id);
                $application->status = "processing";
                $result->score = ($score / $isValid->length) * 100;
                $result->status = "closed";

                $application->save();
                $result->save();

                Mail::to(Auth::user()->email)
                    ->send(new \App\Mail\FinishedTest($result->id));

                $data['title'] = 'Submited';
                $data['score'] = $score;
                $data['percent'] = ($score / $isValid->length) * 100;

            } else {
                $data['error']
                    = "Oops! We can't find the client writing this test..";
            }
        } else {
            $data['error'] = "Oops! This is not a valid test";
        }
        if ($request->ajax()) {
            return $request->json($data);
        }

        $data['title'] = 'Submited';
        return view('dashboard.submitted', $data);

    }
}
