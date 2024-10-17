<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Bible Verse Label</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            height: 100vh; 
            background-color: #f5f5f5; 
            font-family: 'Poppins', sans-serif;
        }

        .answer-form {
            background-color: white;
            border-radius: 10px;
            padding: 30px 40px;
            width: 100s%;
            max-width: 500px;
            margin: 120px auto; 
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .answer-form h2 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .verse-text {
            font-style: italic;
            margin: 15px 0;
            padding: 15px;
            background-color: #f7fbfc; 
            border-left: 4px solid #0D7C66; 
            font-size: 1.1em;
            color: #555;
            text-align: left; 
            
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 20px; 
        }

        .form-container label {
            font-size: 1.1em;
            color: #333;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-container input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd; 
            border-radius: 8px; 
            font-size: 1.1em;
            width: 95%;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05); 
            transition: border-color 0.3s ease; 
        }

        .form-container input[type="text"]:focus {
            border-color: #42a5f5; 
            outline: none;
        }

        .form-container button {
            padding: 12px;
            background-color: #0D7C66;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .form-container button:hover {
            background-color: #72BF78; 
            transform: translateY(-2px);
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 6px;
            font-size: 1em;
        }
    </style>
</head>
<body>

<section class="answer-form" id="answer-form">
    <h2>Please provide the label for this Bible Verse</h2>
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

</body>
</html>
