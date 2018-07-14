<?php

namespace App\Http\Controllers\Admin\Control;

use App\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data['title']='Control Panel';
        return view('dashboard.admin.control.index', $data);
    }

    public function user($id)
    {
        $data['title'] = 'User';
        return view('admin.user', $data);
    }

    public function getUser()
    {

    }

}
