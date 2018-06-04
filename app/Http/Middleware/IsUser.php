<?php

namespace App\Http\Middleware;

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

        return $next ($request);
    }
}
