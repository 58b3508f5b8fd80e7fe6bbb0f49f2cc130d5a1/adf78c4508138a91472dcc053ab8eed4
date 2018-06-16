<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Interview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class InterviewController extends Controller
{
    //
    public function getInvite($id)
    {
        $subData['applicant'] = Application::join('jobs', 'jobs.job_id', '=',
            'applications.job_id')
            ->join('users', 'users.user_id', 'applications.resume_id')
            ->where('applications.application_id', $id)
            ->where('applications.status', 'processing')->first();
        $html = View::make('partials.admin.invite', $subData);
        $data['html'] = $html->render();
        return response()->json($data);
    }

    public function getJobInterviews($page = 1, $per = 10)
    {
        $invites = Interview::join('applications',
            'applications.application_id', '=', 'interviews.interview_id')
            ->join('jobs', 'jobs.job_id', '=', 'applications.job_id')
            ->where('applications.status', 'invited')->get();

        $collection = collect($invites);
        $data['interviews'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($invites) / $per);
        $data['page'] = $page;
        $data['per'] = $per;
        return $data;
    }

    public function getInterviews($id, $page = 1, $per = 10)
    {
        $interviews = Interview::join('user_metas', 'interviews.resume_id',
            'user_metas.user_id')
            ->join('applications', 'applications.application_id', '=',
                'interviews.interview_id')->where('interviews.interview_id', $id)
            ->select('interviews.*', 'user_metas.*',
                'applications.status as application_status')->get();
        $collection = collect($interviews);
        $data['interviews'] = $collection->forPage($page, $per);
        $data['pages'] = ceil(sizeof($interviews) / $per);
        $data['page'] = $page;
        $data['per'] = $per;

        return $data;
    }

    public function sendInvite(Request $request)
    {
        $id = $request->id;
        $applicant = Application::where([
            ['application_id', $id],
            ['status', 'processing']
        ])->first();
        if ($applicant) {
            $application = Application::find($applicant->id);
            $application->status = "invited";

            $interview = new Interview();
            $interview->interview_id = $application->application_id;
            $interview->resume_id = $application->resume_id;
            $interview->due_date = $request->date;
            $interview->type = $request->type;
            $interview->address = $request->address;

            if ($interview->save() && $application->save()) {
                $data['message']
                    = "An invite has been sent to $request->full_name";
                $data['state'] = "success";
            } else {
                $data['message']
                    = "Oops! Sorry, we currently can't process your request.";
                $data['state'] = "success";
            }
            $test = new TestController();
            $subData = $test->getTestResults($id);
            $subData['title'] = 'Results';
            $html = View::make('partials.admin.results', $subData);
            $data['html'] = $html->render();
            $data['error'] = false;
        } else {
            $data['message'] = "Oops! Sorry, we cant find the applicant..";
            $data['state'] = "error";
            $data['error'] = true;
        }

        return response()->json($data);
    }


    public function viewJobInterviews()
    {
        $data = $this->getJobInterviews();
        $data['title'] = 'Interviews';

        return view('admin.job_interviews', $data);
    }

    public function viewInterviews($id)
    {
        $data = $this->getInterviews($id);
        $data['title'] = 'Interviews';

        return view('admin.interviews', $data);
    }
}
