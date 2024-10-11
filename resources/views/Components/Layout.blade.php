<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title') Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        .typewriter {
            overflow: hidden;
            white-space: nowrap;
            letter-spacing: 0.1em;
            animation: typing 3.5s steps(30, end);
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in forwards; 
        }

        .delay-1 {
            animation-delay: 0.5s;
        }

        .delay-2 {
            animation-delay: 1s;
        }

        .delay-3 {
            animation-delay: 1.5s;
        }

        .delay-4 {
            animation-delay: 2s; 
        }

        #name {
            opacity: 0; 
            transition: opacity 1s ease-in; 
        }
        #studentTitle {
            opacity: 0; 
            transition: opacity 2s ease-in; 
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --bg-color: #f8f9fa; 
            --second-bg-color: #e9ecef; 
            --text-color: #343a40;
            --content-color: #F5F7F8;
            --main-color: #007bff; 
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            overflow-y: hidden; 
        }

        body {
            background: var(--bg-color);
            color: var(--text-color);
            overflow: hidden; 
        }
        section{
            min-height: 100vh;
            padding: 10rem 9% 2rem;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 2rem 9%;
            background: var(--bg-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 2.5rem;
            color: var(--text-color);
            font-weight: 600;
            cursor: default;
        }

        .navbar a {
            font-size: 1.7rem;
            color: var(--text-color);
            margin-left: 4rem;
            transition: 0.3s;
        }

        .navbar a:hover,
        .navbar a.active {
            color: var(--main-color);
        }

        .home{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .home-content h3{
            font-size: 3.2rem;
            font-weight: 700;
        }

        .home-content h3:nth-of-type(2){
            margin-bottom: 2rem;
        }

        span{
            color: var(--main-color);
        }

        .home-content h1{
            font-size: 5.6rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .home-img img {
            width: 35vw;
        }

        .home-content p {
            font-size: 1.6rem;
        }

        .compilation {
            background: var(--second-bg-color);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .compilation h2 {
            margin-bottom: 4rem;
            font-size: 3.2rem;
            text-align: center;
        }

        .compilation-container {
            display: grid;
            grid-template-columns: repeat(4, minmax(150px, 1fr)); 
            gap: 2.5rem; 
            justify-content: center; 
            align-items: center;
            max-width: 100%; 
            
        }

        .compilation-container .compilation-box {
            position: relative;
            border-radius: 1rem;
            box-shadow: 0 0 1rem var(--bg-color);
            overflow: hidden;
            display: flex;
            justify-content: center;
            width: 100%; 
            height: auto;
            transition: transform 0.3s ease; 
            margin-left: 50%;
        }

       
        .compilation-box:hover img{
            transform: scale(1.1);
        }

        .compilation-box img {
            width: 100%; 
            height: auto; 
            transition: .5s ease; 
            
        }

   
        .compilation-box .compilation-layer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0, .1), var(--main-color));
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 0 2rem;
            opacity: 0;
            transform: translateY(100%);
            transition: .5s ease; 
        }

    
        .compilation-box:hover .compilation-layer {
            opacity: 1;
            transform: translateY(0);
        }

        .compilation-layer h4 {
            font-size: 3rem;
            color: var(--content-color);
        }

        .compilation-layer p {
            margin-bottom: 1rem; 
            color: var(--content-color);
        }
        .compilation-layer a i {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size:  2rem;
            border-radius: 50%;
            background: var(--content-color);
        }
        .compilation-layer i {
            color: var(--text-color);
            width: 5rem;
            height: 5rem;
            margin-top: 20%;
        }
        
    </style>

</head>

<body>
    <header class="header">
        <a href="" class="logo">Portfolio</a>
        <div class="navbar">
            <a class="active" href="{{ route('home') }}" >Home</a>
            <a href="{{ route('compilation') }}">Compilation</a>
        </div>
    </header>

    <main>
        <!-- Main content of the page will be injected here -->
        @yield('content')
    </main>

    <script src="js/script.js"></script>

</body>

</html>
