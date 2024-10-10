<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title') Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
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
            --bg-color: #1f242d;
            --second-bg-color: #323946;
            --text-color: #fff;
            --main-color: #0ef;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
        }

        body {
            background: var(--bg-color);
            color: var(--text-color);
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
            width: 35vw
        }

        .home-content p {
            font-size: 1.6rem;
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
</body>

</html>
