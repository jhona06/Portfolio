<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AnsweredMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the answer is stored in the session
        if (!$request->session()->has('answered_form')) {
            // Redirect to the answer form if not answered
            return redirect()->route('answerForm');
        }

        return $next($request);
    }
}
