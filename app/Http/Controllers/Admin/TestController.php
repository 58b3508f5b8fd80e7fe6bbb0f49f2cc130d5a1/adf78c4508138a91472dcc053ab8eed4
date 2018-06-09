<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    function addTest()
    {
        $examinfo = Examinfo::create([
            'Teacher_id' => $request->input('Teacher_id'),
            'Course' => $request->input('Course'),
            'question_lenth' => $request->input('question_lenth'),
            'uniqueid' => $request->input('uniqueid'),
            'time' => $request->input('time')
        ]);
    }
}
