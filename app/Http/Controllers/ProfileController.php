<?php

namespace App\Http\Controllers;

use App\User;
use App\User_meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=$this->getProfile();
        return view('profile', $data);

    }

    public function home()
    {
        return new HomeController();
    }

    public function getProfile()
    {
        $data = [];
        $data['profile'] = User_meta::where('user_id', Auth::user()->user_id)
            ->first();
        //$data['degrees'] = $this->home()->getEnumValues('user_metas',);
        return $data;
    }

    public function update(Request $request)
    {

        $details = $request->all();
        /*$id = (int)$request->input('id') - 3021;
        $userMeta = User_meta::find($id);*/


        array_push($details, ['updated_at' => date('Y-m-d H:i:s')]);

        unset($details['_token']);
        unset($details['id']);
        unset($details[0]);

        $isUpdated = User_meta::where('user_id', Auth::user()->user_id)
            ->update($details);

        $userTable = User::where('user_id', Auth::user()->user_id)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'phone_no'   => $request->input('phone_no'),
                'job_title'  => $request->input('job_title'),
                'status'     => 'registered',
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        if ($isUpdated && $userTable) {
            $message = 'Your profile details have been updated successfully.';
            $status = 'success';
        } else {
            $message = 'An error occurred during update.';
            $status = 'danger';
        }
        return redirect()->back()->with('status', [
            'message' => $message,
            'state'   => $status
        ]);
    }
}
