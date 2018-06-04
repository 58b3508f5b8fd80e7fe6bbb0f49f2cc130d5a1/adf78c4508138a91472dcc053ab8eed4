<?php

namespace App\Http\Controllers\Admin;

use App\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function index()
    {
        $job = new JobController();
        return $job->index();
    }

    public function user($id)
    {
        $data['title'] = 'User';
        return view('admin.user', $data);
    }

    public function getUser(){

    }

    public function downloadCV($id)
    {
        $resume = Resume::where('resume_id', $id)->first();
        if ($resume && Storage::exists($resume->cv_location)) {
            $path = Storage::get($resume->cv_location);
            $name = $id . "_cv_" . date('YmdHis');
            return Storage::download($resume->cv_location, $name);
        } else {
            $message = "Sorry, file does not exist..";
            $status = "danger";
        }

        return redirect()->back()->with([
            'message' => $message,
            'state'   => $status
        ]);
    }
}
