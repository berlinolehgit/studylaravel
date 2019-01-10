<?php

namespace App\Http\Middleware;

use App\Models\Offer;
use Closure;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class BlocOfferEdit
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
//        dd($request->route()->parameter('id'));
        $offers = Offer::find($request->route()->parameter('id'));
        if (Auth::user() && Auth::user()->id == $offers['user_id']) {
            return $next($request);
        }
        return redirect('/offers');
    }
}
