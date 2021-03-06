<?php

namespace App\Http\Controllers;

use App\Job;
use App\Resume;
use App\User;
use App\User_meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isUser');
    }

    public function index()
    {
        $data = $this->getProfile();
        $data['title'] = 'Profile';
        return view('profile', $data);
    }

    public function home()
    {
        return new HomeController();
    }

    public function avatar(Request $request)
    {
        $id = (int)$request->input('id') - 1933;
        $userMeta = User_meta::find($id);
        $user = Auth::user();
        if ($userMeta) {
            if ($request->hasFile('avatar_location')
                && $request->file('avatar_location')->isValid()
            ) {
                if ($userMeta->avatar_location !== null
                    && $userMeta->avatar_location
                    !== config('app.default-image')
                ) {
                    Storage::delete($userMeta->avatar_location);
                }
                $location = $request->file('avatar_location')
                    ->store('careers.touchinglivesskills/app/user/avatar');
                $userMeta->avatar_location = $location;
                $user->avatar_location = $location;

                if ($userMeta->save() && $user->save()) {
                    $data['message'] = 'Your profile image has been changed. '
                        . $location;
                    $data['state'] = 'success';
                    $data['type'] = 'img';
                    $data['avatar'] = Storage::url($user->avatar_location);
                    $data['success'] = true;
                } else {
                    $data['message'] = "Oops!, we couldn't save your image";
                    $data['state'] = 'danger';
                    $data['error'] = "Oops!, we couldn't save your image";
                }
            } else {
                $data['message'] = 'Oops!, your file is invalid';
                $data['state'] = 'danger';
                $data['error'] = "Oops!, your file is invalid";
            }
        } else {
            $data['message']
                = 'Oops! You need to fill in other profile details before uploading your avatar.';
            $data['state'] = 'danger';
            $data['error']
                = 'Oops! You need to fill in other profile details before uploading your avatar.';
        }
        return response()->json($data);
    }

    public function getProfile()
    {
        $meta = User_meta::where('user_id', Auth::user()->user_id)
            ->first();
        if (!$meta) {
            $data['profile'] = User::where('user_id', Auth::user()->user_id)
                ->first();
        } else {
            $data['profile'] = $meta;
        }
        return $data;
    }

    public function profile(Request $request)
    {
        $profile = User_meta::where('user_id', Auth::user()->user_id)
            ->first();
        if ($profile) {
            return $this->update($request);
        }
        return $this->create($request);
    }

    public function create(Request $request)
    {
        $details = $request->all();
        $details = array_merge($details, [
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id'    => Auth::user()->user_id
        ]);

        unset($details['_token']);
        unset($details['id']);
        unset($details[0]);

        $isCreated = User_meta::create($details);

        $userTable = User::where('user_id', Auth::user()->user_id)
            ->update([
                'first_name' => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'phone_no'   => $request->input('phone_no'),
                'job_title'  => $request->input('job_title'),
                'status'     => 'registered',
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $resume = new Resume();
        $resume->resume_id = Auth::user()->user_id;

        if ($isCreated && $userTable && $resume->save()) {
            $message = 'Your profile details have been updated successfully.';
            $status = 'success';
        } else {
            $message = 'An error occurred during update.';
            $status = 'error';
        }
        return redirect()->back()->with([
            'status' => $message,
            'state'  => $status
        ]);
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
            $status = 'error';
        }
        return redirect()->back()->with([
            'status' => $message,
            'state'  => $status
        ]);
    }
}
