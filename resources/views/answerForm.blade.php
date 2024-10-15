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
@endsection

<style>
    body {
        background-color: #e6f7f9;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .answer-form {
        background-color: #b3e5fc;
        border-radius: 10px;
        padding: 40px;
        width: 60%; /
        max-width: 700px;
        margin: 50px auto;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        border: 2px solid #00796b; 
    }

    .answer-form h2 {
        color: #00695c;
        font-size: 1.8em;
        margin-bottom: 15px;
    }

    .verse-text {
        font-style: italic;
        margin: 15px 0;
        padding: 15px;
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
        font-size: 1.1em;
        color: #333;
        text-align: left; 
    }

    .form-container {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-container label {
        font-size: 1.1em;
        color: #555;
        text-align: left;
    }

    .form-container input[type="text"] {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1.1em;
        width: 100%;
        height: 50px;
    }

    .form-container button {
        padding: 12px;
        background-color: #00796b;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1.1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: #004d40;
    }

    .alert {
        margin-top: 20px;
        padding: 15px;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 6px;
    }
</style>
