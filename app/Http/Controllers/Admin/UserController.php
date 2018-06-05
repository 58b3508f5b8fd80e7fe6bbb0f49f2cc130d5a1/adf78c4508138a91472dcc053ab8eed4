<?php

namespace App\Http\Controllers\Admin;

use App\Education;
use App\Experience;
use App\Honor;
use App\Http\Controllers\Controller;
use App\Resume;
use App\Skill;
use App\User_meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    public function index($id)
    {
        $user = User_meta::where('user_id', $id)->first();
        if ($user) {
            $data['resume'] = $this->getResume($id);
            $data['user'] = $user;
            $data['educations'] = $this->getEducation($id);
            $data['experiences'] = $this->getExperience($id);
            $data['honors'] = $this->getHonors($id);
            $data['skills'] = $this->getSkills($id);
            $data['title'] = 'User';
            return view('admin.user', $data);
        }

        return redirect()->back()->with([
            'status' => "We don't have records of such users",
            'state'  => "danger"
        ]);

    }

    public function getResume($id)
    {
        $resume = Resume::where('resume_id', $id)->first();
        return $resume;
    }

    public function getEducation($id)
    {
        $education = Education::where('resume_id', $id)
            ->get();
        return $education;
    }

    public function getExperience($id)
    {
        $experience = Experience::where('resume_id', $id)
            ->get();
        return $experience;
    }

    public function getHonors($id)
    {
        $honors = Honor::where('resume_id', $id)->get();
        return $honors;
    }

    public function getSkills($id)
    {
        $skills = Skill::where('resume_id', $id)->get();
        return $skills;
    }

}
