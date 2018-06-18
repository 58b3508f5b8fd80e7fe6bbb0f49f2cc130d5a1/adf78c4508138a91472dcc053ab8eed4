<?php

namespace App\Http\Middleware;

use App\Application;
use Closure;
use Illuminate\Http\Response;

class ApplicantPassed
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
        $applicant = Application::where('resume_id', $request->user()->user_id)
            ->where('status', 'passed')->first();
        if ($applicant) {
            return $next($request);
        }
        return new Response(view('errors.600'));
    }
}
