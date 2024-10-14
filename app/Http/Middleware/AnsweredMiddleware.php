<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnsweredMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the session contains the 'answered_form' key
        if (!$request->session()->has('answered_form')) {
            // Redirect to the answer form if not answered
            return redirect()->route('answerForm')->with('error', 'Please answer the form before accessing this page.');
        }

        // Proceed to the next request if the form was answered
        return $next($request);
    }
}
