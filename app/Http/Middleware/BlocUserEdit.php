<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class BlocUserEdit
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
        $users = User::find($request->route()->parameter('id'));
        if (Auth::user() && Auth::user()->id == $users['id']) {
            return $next($request);
        }
        return redirect('/users');
    }

}
