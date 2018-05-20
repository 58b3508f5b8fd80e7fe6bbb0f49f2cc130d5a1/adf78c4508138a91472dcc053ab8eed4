<?php

namespace App\Http\Controllers;

use App\User_meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = $this->getProfile();
        return view('profile', $data);
    }

    public function home(){
        return new HomeController();
    }
    public function getProfile()
    {
        $data = [];
        $data['profile'] = User_meta::where('user_id',Auth::user()->user_id)->first();
        //$data['degrees'] = $this->home()->getEnumValues('user_metas',);
        return $data;
    }

    public function updateProfile()
    {

    }
}
