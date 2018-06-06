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

}
