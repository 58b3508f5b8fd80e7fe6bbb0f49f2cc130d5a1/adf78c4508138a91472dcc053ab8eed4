<?php

namespace App\Http\Controllers;

use App\Education;
use App\Experience;
use App\Honor;
use App\Resume;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['resume'] = $this->getResume();
        $data['educations'] = $this->getEducation();
        $data['experiences'] = $this->getExperience();
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

    function curriculumVitae(Request $request)
    {
        $id = (int)$request->input('id') - 373;
        $resume = Resume::find($id);
        if ($request->hasFile('cv_location')
            && $request->file('cv_location')->isValid()
        ) {
            if ($resume->cv_location !== null) {
                Storage::delete($resume->cv_location);
            }
            $location = $request->file('cv_location')
                ->store('careers.touchinglivesskills/app/user/resume/cv');
            $resume->cv_location = $location;


            if ($resume->save()) {
                $data['message'] = 'Your cover letter has been changed. '
                    . $location;
                $data['state'] = 'success';
                $data['success'] = true;
            } else {
                $data['message'] = 'Sorry, an error occurred';
                $data['state'] = 'danger';
                $data['error'] = 'Sorry, an error occurred';
            }
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['errpr'] = 'Sorry, an error occurred';
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
