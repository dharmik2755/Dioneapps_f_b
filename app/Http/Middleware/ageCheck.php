<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $res, Closure $next)
    {
        $path = $res->path();
        if ($path=="Admin-side" && Session::get('user_id')) 
        {
             return redirect('/dashboard');
        } 
        else if($path!="Admin-side" && !Session::get('user_id'))
        {
            return redirect('Admin-side');
        }

        return $next($res);
    }
}
