@extends('Components.Layout')

@section('title', 'Answer Bible Verse Label')

@section('content')
<section class="answer-form" id="answer-form">
    <h2>Please provide the label for this Bible verse:</h2>
    <blockquote class="verse-text">
        "For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life."
    </blockquote>
    
    <form action="{{ route('submitAnswer') }}" method="POST" class="form-container">
        @csrf
        <label for="label">Which Bible verse says:</label>
        <input type="text" name="answer" id="label" placeholder="e.g., John 3:16" required>
        <button type="submit">Submit</button>
    </form>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</section>

<style>
    body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f4f8;
    font-family: Arial, sans-serif;
}

#answer-form {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    border-radius: 12px;
    background-color: #ffffff;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.answer-form {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.verse-text {
    font-style: italic;
    margin: 20px 0;
    padding: 15px;
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
    color: #333;
}

.form-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-container label {
    font-weight: bold;
    color: #555;
}

.form-container input[type="text"] {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    transition: border 0.3s ease;
}

.form-container input[type="text"]:focus {
    border-color: #2196F3;
    outline: none;
    box-shadow: 0 0 5px rgba(33, 150, 243, 0.5);
}

.form-container button {
    padding: 12px;
    background-color: #2196F3;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-container button:hover {
    background-color: #1976D2;
}

.alert {
    margin-top: 15px;
    padding: 12px;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 6px;
    text-align: center;
}
</style>

@endsection
