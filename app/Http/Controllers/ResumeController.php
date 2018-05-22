<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Honor;
use App\Resume;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['resume'] = $this->getResume();
        $data['educations'] = $this->getEducation();
        $data['experience'] = $this->getExperience();
        $data['honors'] = $this->getHonors();
        $data['skills'] = $this->getSkills();
        $data['title'] = 'Resume';
        return view('resume', $data);
    }

    public function coverLetter(Request $request)
    {
        $letter = Resume::where('resume_id', Auth::user()->user_id)->first();
        $text = $request->input('text', $letter->cover_letter);
        $resume = Resume::find($letter->id);
        $resume->cover_letter = $text;
        if ($resume->save()) {
            $data['message'] = 'Your cover letter has been changed.';
            $data['state'] = 'success';
            $data['text'] = 'text';
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['text'] = 'text';
        }
        return response()->json($data);
    }

    public function getResume()
    {
        $resume = Resume::where('resume_id', Auth::user()->user_id)->first();
        return $resume;
    }

    public function getEducation()
    {
        $education = Education::where('resume_id', Auth::user()->user_id)
            ->get();
        return $education;
    }

    public function getExperience()
    {
        $experience = Experience::where('resume_id', Auth::user()->user_id)
            ->get();
        return $experience;
    }

    public function getHonors()
    {
        $honors = Honor::where('resume_id', Auth::user()->user_id)->get();
        return $honors;
    }

    public function getSkills()
    {
        $skills = Skill::where('resume_id', Auth::user()->user_id)->get();
        return $skills;
    }

}
