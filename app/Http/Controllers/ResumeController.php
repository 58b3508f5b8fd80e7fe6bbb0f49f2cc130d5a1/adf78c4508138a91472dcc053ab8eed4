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
use Illuminate\Support\Facades\View;

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
            $ext = $request->file('cv_location')->extension();
            $resume->cv_ext = $ext;

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

    public function addEducation(Request $request)
    {
        $education = new Education();
        $education->resume_id = Auth::user()->user_id;
        $education->title = $request->title;
        $education->institution = $request->institution;
        $education->description = $request->description;
        $education->qualification = $request->qualification;
        $education->started_at = date('Y-m-d H:i:s',
            strtotime($request->started_at));
        $education->finished_at = date('Y-m-d H:i:s',
            strtotime($request->finished_at));

        if ($education->save()) {
            $data['message'] = 'Your education has been added.';
            $data['state'] = 'success';
            $data['text'] = 'text';
            $subData['educations'] = $this->getEducation();
            $html = View::make('partials.sub.education', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['text'] = 'text';
        }
        return response()->json($data);
    }

    public function addExperience(Request $request)
    {
        $experience = new Experience();
        $experience->resume_id = Auth::user()->user_id;
        $experience->title = $request->title;
        $experience->company = $request->company;
        $experience->description = $request->description;
        $experience->started_at = date('Y-m-d H:i:s',
            strtotime($request->started_at));
        $experience->finished_at = date('Y-m-d H:i:s',
            strtotime($request->finished_at));
        if (isset($request->status)) {
            $experience->status = $request->status;
        }

        if ($experience->save()) {
            $data['message'] = 'Your experience has been added.';
            $data['state'] = 'success';
            $data['text'] = 'text';
            $subData['experiences'] = $this->getExperiences();
            $html = View::make('partials.sub.experience', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['text'] = 'text';
        }
        return response()->json($data);
    }

    public function addSkills(Request $request)
    {
        $skill = new Skill();
        $skill->resume_id = Auth::user()->user_id;
        $skill->title = $request->title;
        $skill->percentage = $request->percentage;

        if ($skill->save()) {
            $data['message'] = 'Your skill has been added.';
            $data['state'] = 'success';
            $data['text'] = 'text';
            $subData['skills'] = $this->getSkills();
            $html = View::make('partials.sub.skill', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['text'] = 'text';
        }
        return response()->json($data);
    }

    public function addHonors(Request $request)
    {
        $honor = new Honor();
        $honor->resume_id = Auth::user()->user_id;
        $honor->title = $request->title;
        $honor->received_at = $request->received_at;
        $honor->company = $request->company;
        $honor->description = $request->description;

        if ($honor->save()) {
            $data['message'] = 'Your honor has been added.';
            $data['state'] = 'success';
            $data['text'] = 'text';
            $subData['honors'] = $this->getHonors();
            $html = View::make('partials.sub.honor', $subData);
            $data['html'] = $html->render();
        } else {
            $data['message'] = 'Sorry, an error occurred';
            $data['state'] = 'danger';
            $data['text'] = 'text';
        }
        return response()->json($data);
    }

    public function delete(Request $request)
    {
        $type = $request->type;
        $id = $request->id;
        $title = $request->title;
        switch ($type) {
            case 'education':
                $resume = Education::find($id - 3329);
                $delete = $resume->delete();
                $subData['educations'] = $this->getEducation();
                $html = View::make('partials.sub.education', $subData);
                break;
            case 'experience':
                $resume = Experience::find($id - 3329);
                $delete = $resume->delete();
                $subData['experiences'] = $this->getExperience();
                $html = View::make('partials.sub.experience', $subData);
                break;
            case 'honor':
                $resume = Honor::find($id - 3329);
                $delete = $resume->delete();
                $subData['honors'] = $this->getHonors();
                $html = View::make('partials.sub.honor', $subData);
                break;
            case 'skill':
                $resume = Skill::find($id - 3329);
                $delete = $resume->delete();
                $subData['skills'] = $this->getSkills();
                $html = View::make('partials.sub.skill', $subData);
                break;
        }
        if ($delete) {
            $data['message'] = "$title has been deleted from list of $type.";
            $data['type'] = $type;
            $data['state'] = 'success';
            $data['html'] = $html->render();
        } else {
            $data['message']
                = "Sorry, an error occurred while trying to delete $title";
            $data['state'] = 'danger';
        }
        return response()->json($data);
    }

    public function downloadCV()
    {
        $resume = Resume::where('resume_id', Auth::user()->user_id)->first();
        $path = "";
        if (Storage::exists($resume->cv_location)) {
            $path = Storage::get($resume->cv_location);
            $name = Auth::user()->first_name . "_cv_" . date('YmdHis')
                . ".$resume->cv_ext";
            return Storage::download($resume->cv_location,$name);
        } else {
            $message = "Sorry, file does not exist..";
            $status = "danger";
        }

        return redirect()->back()->with('status', [
            'message' => $message,
            'state'   => $status
        ]);

    }

    public function getModal($action, $type, $id = null)
    {
        switch ($type) {
            case 'education':
                switch ($action) {
                    case 'create':
                        $html = View::make('partials.sub.educationModal');
                        break;
                    case 'update':
                        $subData['education'] = $this->getEducation();
                        $html = View::make('partials.sub.educationModal',
                            $subData);
                        break;
                    default:
                        $html = View::make('partials.sub.educationModal');
                        break;
                }
                break;
            case 'experience':
                switch ($action) {
                    case 'create':
                        $html = View::make('partials.sub.experienceModal');
                        break;
                    case 'update':
                        $subData['experiences'] = $this->getExperience();
                        $html = View::make('partials.sub.experience', $subData);
                        break;
                    default:
                        $html = View::make('partials.sub.experienceModal');
                        break;
                }
                break;
            case 'honor':
                switch ($action) {
                    case 'create':
                        $html = View::make('partials.sub.honorModal');
                        break;
                    case 'update':
                        $subData['honors'] = $this->getHonors();
                        $html = View::make('partials.sub.honorModal', $subData);
                        break;
                    default:
                        $html = View::make('partials.sub.honorModal');
                        break;
                }
                break;
            case 'skill':
                switch ($action) {
                    case 'create':
                        $html = View::make('partials.sub.skillModal');
                        break;
                    case 'update':
                        $subData['skills'] = $this->getSkills();
                        $html = View::make('partials.sub.skillModal', $subData);
                        break;
                    default:
                        $html = View::make('partials.sub.skillModal');
                        break;
                }
                break;
        }
        $data['html'] = $html->render();
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
