<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
   /*     if (in_array($request->user()->status,['visitor','registered'])) {
            return redirect('home')->with('status', [
                'message' => 'Please complete the given form',
                'state'   => 'danger'
            ]);
        }*/
        return $response;
    }
}
