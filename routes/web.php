<?php

use App\Http\Middleware\AnsweredMiddleware; 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 

// Route to the home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Route to display the answer form
Route::get('/answer-form', function () {
    return view('answerForm');
})->name('answerForm');

// Route to handle the answer submission
Route::post('/submit-answer', function (Request $request) {
    $answer = $request->input('answer');
    
    // Expected Bible verse label
    $correctAnswer = 'John 3:16';

    // Log the user's attempt
    Log::info('User submitted an answer: ' . $answer);

    // Validate the user's input (case-insensitive)
    if (strtolower(trim($answer)) === strtolower($correctAnswer)) {
        // Log successful submission
        Log::info('User submitted the correct label: ' . $answer);

        // Store the answer in the session if correct
        $request->session()->put('answered_form', true);
        return redirect()->route('compilation');
    } else {
        // Log incorrect submission
        Log::warning('User submitted an incorrect label: ' . $answer);

        // Redirect back with an error message if the answer is incorrect
        return redirect()->back()->with('error', 'Incorrect label! Try again.');
    }
})->name('submitAnswer');

// Route to the compilation page, protected by the AnsweredMiddleware
Route::get('/compilation', function () {
    return view('compilation');
})->name('compilation')->middleware(AnsweredMiddleware::class);

// Portfolio routes
Route::get('/portfolio1', function () {
    return view('portfolio1');
})->name('portfolio1');

Route::get('/portfolio2', function () {
    return view('portfolio2');
})->name('portfolio2');

Route::get('/portfolio3', function () {
    return view('portfolio3');
})->name('portfolio3');

Route::get('/portfolio4', function () {
    return view('portfolio4');
})->name('portfolio4');
