@extends('Components.Layout')

@section('title', 'Portfolio2')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title">Making <span> Routes </span> </h1>

        <div class="portfolio-content">
            
        <div class="custom-carousel">
                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide current-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-1.png') }}" alt="Design Project 1">
                                <div class="description">Image 1</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-2.png') }}" alt="Design Project 2">
                                <div class="description">Image 2</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-3.png') }}" alt="Design Project 3">
                                <div class="description">Image 3</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-4.png') }}" alt="Design Project 4">
                                <div class="description">Image 4</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-5.png') }}" alt="Design Project 5">
                                <div class="description">Image 5</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-6.png') }}" alt="Design Project 6">
                                <div class="description">Image 6</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port2-7.png') }}" alt="Design Project 7">
                                <div class="description">Image 7</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <button class="carousel-button left-button">&lt;</button>
                <button class="carousel-button right-button">&gt;</button>
            </div>

            <div class="narrative">
            <h2> Define Basic Routes </h2>
            <p> In this first section, we create the core navigation for our Laravel application using simple routes. The homepage route is intended to return a view displaying a welcome message to visitors, giving them a clear starting point when they visit the website. We also establish an extra route for the "About Us" page, which provides users with information about the site or organization. </p>
            <p> To improve navigation, we add a route that redirects visitors from /home to /, guaranteeing that users who try to access the homepage via /home are instantly sent to the right place. This enhances the user experience by making the website more intuitive. Finally, we design a route for the "Contact Us" form, so that people can simply discover a means to contact us by completing a form. Each route delivers a related view, delivering a consistent user experience throughout the site's fundamental components. </p>

            <h2> Using Route Parameters. </h2>
            <p> In this section, we investigate dynamic routing by enabling our application to receive user input via the URL. First, we define a route with a necessary username argument. When a user navigates to a URL like /user/jhona, the program recognizes "jhona" as the username and displays a personalized welcome message. This increases engagement by providing consumers the impression of a personalized experience.</p>
            <p> Next, we make the username argument optional. If a visitor hits /user without supplying a name, the application defaults to welcoming the user as "Guest." This flexibility allows the route to accommodate both personalized and broad messages based on the URL. </p>
            <p> To ensure that the input is real and safe, we employ a constraint that limits the username to just alphabetic letters. This prevents the use of numbers or special characters in the username, maintaining the input's integrity and protecting the application from potential misuse. </p>
            <h2>Documentation</h2>
            <p>Throughout the process, we document our progress by taking images of the program in operation and explaining the code. The manual describes how each route works, the purpose of the arguments, and how the program handles certain cases. This guarantees that the whole process, from designing fundamental routes to introducing dynamic parameters, is understandable and simple to execute.</p>
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
