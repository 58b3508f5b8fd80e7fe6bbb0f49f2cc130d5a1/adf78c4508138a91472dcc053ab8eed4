<?php

namespace App\Http\Middleware;

use App\Application;
use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Http\Response;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->type == 'admin') {
            return redirect('backend');
        } elseif ($request->user()->type == 'staff') {
            return redirect('staff');
        } elseif ($request->user()->type != 'user') {
            return new Response (view('errors.600'));
        }

        $applicant = Application::where('resume_id', $request->user()->user_id)
            ->where('status', 'passed')->first();
        if($applicant){
            $request->session()->flash('userPassed', true);
        }
        return $next ($request);
    }
}
