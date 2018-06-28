<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Interview;
use App\Job_test;
use App\Online_test;
use App\Question;
use App\Result;
use App\Test_question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'List of tests';
        $data['tests'] = Online_test::get();

        return view('dashboard.admin.tests', $data);
    }

    public function addQuestion($id, Request $request)
    {
        $isTest = Online_test::where('test_id', $id)->first();
        if ($isTest) {
            $question = new Test_question();
            $question->question_id = md5($isTest->test_id . str_random()
                . date('YmdHis'));
            $question->test_id = $isTest->test_id;
            $question->question = $request->question;
            $question->option_a = $request->option_a;
            $question->option_b = $request->option_b;
            $question->option_c = $request->option_c;
            $question->option_d = $request->option_d;
            $question->answer = $request->answer;
            $question->score = $request->score;

            if ($question->save()) {

                $message
                    = "You've added $request->title successfully..";
                $status = 'success';
            } else {
                $message
                    = "Oops! An error occurred. We were unable to add $request->title..";
                $status = 'error';
            }
        } else {
            $message
                = "Oops! An error occurred, we couldn't verify some of your data. We were unable to add $request->title..";
            $status = 'error';
        }

        return redirect("/backend/tests/view/$isTest->test_id")->with([
            'status' => $message,
            'state'  => $status
        ]);
    }

    public function addTest(Request $request)
    {
        $test = new Online_test();
        $test->test_id = md5($request->title . str_random() . date('YmdHis'));
        $test->title = $request->title;
        $test->description = $request->description;
        $test->duration = $request->duration;
        $test->length = $request->length;
        $test->created_by = Auth::user()->user_id;
        if ($test->save()) {

            $message
                = "You've added $request->title successfully..";
            $status = 'success';
        } else {
            $message
                = "Oops! An error occurred. We were unable to add $request->title..";
            $status = 'error';
        }


        return redirect("/backend/tests/")->with([
            'status' => $message,
            'state'  => $status
        ]);

    }

    function deleteTest(Request $request, $tid = null)
    {
        $id = $request->id - 1921;
        $test = Online_test::find($id);

        if ($test) {
            if ($test->test_id == $tid) {
                $isLinked = Job_test::join('jobs', 'job_tests.job_id', '=',
                    'jobs.job_id')->where('job_tests.test_id', $test->test_id)
                    ->first();

                if (!$isLinked) {
                    if ($test->delete()) {

                        $message
                            = "You've deleted $test->title successfully..";
                        $status = 'success';
                    } else {
                        $message
                            = "Oops! An error occurred. \nWe were unable to delete $test->title..";
                        $status = 'error';
                    }
                } else {
                    $message
                        = "Oops! An error occurred. \nThe test '$test->title' is linked to job '$isLinked->title'.\nYou should unlink the test before taking this action..";
                    $status = 'error';
                }
            } else {
                $message
                    = "Oops! An error occurred, we couldn't verify some of your data. We were unable to add $request->title..";
                $status = 'error';
            }
        } else {
            $message
                = "Oops! An error occurred, the test was not found..";
            $status = 'error';
        }

        $subData['tests'] = Online_test::get();
        $html = View::make('partials.admin.tests', $subData);
        $data = [
            'status' => $message,
            'state'  => $status,
            'html'   => $html->render()
        ];

        return response()->json($data);
    }

    function deleteQuestion(Request $request, $qid)
    {
        $id = $request->id - 3217;
        $question = Test_question::find($id);
        if ($question) {
            if ($question->question_id == $qid) {
                if ($question->delete()) {
                    $message
                        = "You've deleted the question successfully..";
                    $status = 'success';
                } else {
                    $message
                        = "Oops! An error occurred. We were unable to delete the question..";
                    $status = 'error';
                }
            } else {
                $message
                    = "Oops! An error occurred, we couldn't verify some of your data. We were unable to delete the question..";
                $status = 'error';
            }
        } else {
            $message
                = "Oops! An error occurred, we couldn't verify some of your data. We were unable to delete the question..";
            $status = 'error';
        }

        $subData['questions'] = Test_question::where('test_id',
            $question->test_id)->get();
        $html = View::make('partials.admin.test', $subData);
        $data = [
            'status' => $message,
            'state'  => $status,
            'html'   => $html->render()
        ];

        return response()->json($data);
    }

    function editTest(Request $request, $tid = null)
    {
        $id = $request->id - 335;
        $test = Online_test::find($id);
        $details = $request->all();
        if ($test) {
            if ($test->test_id == $tid) {
                array_push($details, ['updated_at' => date('Y-m-d H:i:s')]);

                unset($details['_token']);
                unset($details['id']);
                unset($details[0]);

                $isUpdated = Online_test::where('test_id', $test->test_id)
                    ->update($details);
                if ($isUpdated) {

                    $message
                        = "You've edited $test->title successfully..";
                    $status = 'success';
                } else {
                    $message
                        = "Oops! An error occurred. We were unable to add $request->title..";
                    $status = 'error';
                }
            } else {
                $message
                    = "Oops! An error occurred, we couldn't verify some of your data. We were unable to add $request->title..";
                $status = 'error';
            }
        } else {
            $message
                = "Oops! An error occurred, the test was not found..";
            $status = 'error';
        }

        $subData['tests'] = Online_test::get();
        $html = View::make('partials.admin.tests', $subData);
        $data = [
            'status' => $message,
            'state'  => $status,
            'html'   => $html->render()
        ];

        return response()->json($data);
    }

    function editQuestion(Request $request, $qid=null)
    {
        $id = $request->id - 3217;
        $question = Test_question::find($id);
        $details = $request->all();
        if ($question) {
            if ($question->question_id == $qid) {
                array_push($details, ['updated_at' => date('Y-m-d H:i:s')]);

                unset($details['_token']);
                unset($details['id']);
                unset($details[0]);

                $isUpdated = Test_question::where('question_id',
                    $question->question_id)
                    ->update($details);
                if ($isUpdated) {
                    $message
                        = "You've edited the question successfully..";
                    $status = 'success';
                } else {
                    $message
                        = "Oops! An error occurred. We were unable to add the question..";
                    $status = 'error';
                }
            } else {
                $message
                    = "Oops! An error occurred, we couldn't verify some of your data. We were unable to add $request->title..";
                $status = 'error';
            }
        } else {
            $message
                = "Oops! An error occurred, we couldn't verify some of your data. We were unable to add $request->title..";
            $status = 'error';
        }

        $subData['questions'] = Test_question::where('test_id',
            $question->test_id)->get();
        $html = View::make('partials.admin.test', $subData);
        $data = [
            'status' => $message,
            'state'  => $status,
            'html'   => $html->render()
        ];

        return response()->json($data);
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

    public function viewAddQuestion($id)
    {
        $data['title'] = 'Add Test';
        $isTest = Online_test::where('test_id', $id)->first();
        if ($isTest) {
            $data['test'] = $isTest;
            return view('dashboard.admin.add_question', $data);
        }
        return redirect("/backend/tests/view");
    }

    public function viewAddTest()
    {
        $data['title'] = "Add Test";
        return view('dashboard.admin.add_test', $data);
    }

    public function viewEditQuestion(Request $request, $qid = null)
    {
        $id = $request->id - 3217;
        $question = Test_question::find($id);
        if ($question) {
            if($question->question_id == $qid) {
                $subData['question'] = $question;
                $html = View::make('partials.admin.edit_question', $subData);

                $data = [
                    'html' => $html->render()
                ];
                return response()->json($data, '200');
            }
        }
        return response()->json(['message' => 'Oops! Sorry, an error occured'],
            '404');

    }

    public function viewEditTest(Request $request, $tid)
    {
        $id = $request->id - 973;
        $test = Online_test::find($id);
        if ($test) {
            if($test->test_id == $tid) {
                $subData['test'] = $test;
                $html = View::make('partials.admin.edit_test', $subData);

                $data = [
                    'html' => $html->render()
                ];
                return response()->json($data, '200');
            }
        }
        return response()->json(['message' => 'Oops! Sorry, an error occured'],
            '404');

    }

    public function viewJobResults()
    {
        $data = $this->getJobResults();
        $data['title'] = 'Results';

        return view('admin.job_tests', $data);
    }

    public function viewTest($id)
    {
        $isTest = Online_test::where('test_id', $id)->first();

        if ($isTest) {
            $data['title'] = $isTest->title;
            $data['test'] = $isTest;
            $data['questions'] = Test_question::where('test_id', $id)->get();
            return view('dashboard.admin.test', $data);
        }

        return redirect('/backend/tests/view');
    }

    public function viewTestResults($id)
    {
        $data = $this->getTestResults($id);
        $data['title'] = 'Results';

        return view('admin.results', $data);
    }

}
