@extends('Components.Layout')

@section('title', 'Portfolio1')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title">Setting Up <span>Laravel Project </span> </h1>

        <div class="portfolio-content">
            <div class="custom-carousel">
                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide current-slide">
                            <img src="{{ asset('images/port1-1.png') }}" alt="Design Project 1">
                        </li>
                        <li class="carousel-slide">
                            <img src="{{ asset('images/port1-2.png') }}" alt="Design Project 2">
                        </li>
                        <li class="carousel-slide">
                            <img src="{{ asset('images/port1-3.png') }}" alt="Design Project 3">
                        </li>
                        <li class="carousel-slide">
                            <img src="{{ asset('images/port1-4.png') }}" alt="Design Project 4">
                        </li>
                    </ul>
                </div>

                <button class="carousel-button left-button">&lt;</button>
                <button class="carousel-button right-button">&gt;</button>
            </div>
            <div class="narrative">
            <p> To start our Laravel project, we installed the essential framework and dependencies. Using Composer, we installed Laravel, ensuring that all necessary libraries and packages were in place for seamless development. Following installation, we started the project by putting it under version control using Git. This enabled us to efficiently monitor changes and preserve the project's history via frequent commits. </p>
            <p> Next, we set up the .env file, which is required for environment-specific customizations such as database connections. We connected our Laravel application to the database by entering the right database credentials, allowing us to manage data effortlessly thereafter. </p>
            <p> After completing the core structure, we began constructing the frontend, which had three important views: the homepage, about page, and content page. These views are intended to manage the application's presentation layer and were placed in Laravel's resources/views directory. We then linked these views to specific routes by specifying the URLs that visitors might use, ensuring that the application displayed the relevant page when requested. </p>
            <p> As part of the project's organization, we specified the purpose of essential folders and files, as well as the roles of components such as the app folder for application logic, routes for URL processing, and resources/views for user interface. </p>
            <p> Finally, we collected screenshots of each critical stage of the process, from installation to route configuration and examining the final output in the browser. This documentation offered a clear roadmap for our development process, ensuring that each phase of the project was well documented and easily followed. </p>




            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.right-button');
    const prevButton = document.querySelector('.left-button');
    
    let currentSlideIndex = 0;
    
    nextButton.addEventListener('click', () => {
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        track.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
    });

    prevButton.addEventListener('click', () => {
        currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
        track.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
    });
});
</script>

@endsection
