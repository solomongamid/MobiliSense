<?php

namespace App\Http\Middleware;

use Closure;

class AdminMidWare
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
        $user = $request->user();

        if($user && $user->role == '1') {
            return $next($request);
        }
        elseif ($user && $user->role == '0') {
            return redirect('/');
        }
        return redirect('login');
    }
}
