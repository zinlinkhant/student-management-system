<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!auth()->user()->student->classrooms === null) {
        //     return redirect('index')->with('message', 'you dont have classroom');
        // } else {
        //     return redirect('index');
        // }

        if (auth()->check() && auth()->user()->student && auth()->user()->student->classrooms->isEmpty()) {
            return redirect('index')->with('message', 'You have to enroll in class');
        } else {
            return $next($request);
        }
    }
}