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
                
            <p>Welcome to my design portfolio. Below you will find a showcase of my projects. The work presented here highlights a wide range of design principles, styles, and technical abilities. Each project is a reflection of my commitment to aesthetics, user experience, and functionality. From visual design to interactive elements, I ensure that every piece meets the highest standards of creativity and practicality.</p>
                <p>Project 1: An exploration of minimalism in modern web design.</p>
                <p>Project 2: A dynamic user interface for a mobile application focusing on user interaction and engagement.</p>
                <p>Project 3: A corporate branding and identity design for a well-known organization.</p><p>Welcome to my design portfolio. Below you will find a showcase of my projects. The work presented here highlights a wide range of design principles, styles, and technical abilities. Each project is a reflection of my commitment to aesthetics, user experience, and functionality. From visual design to interactive elements, I ensure that every piece meets the highest standards of creativity and practicality.</p>
                <p>Project 1: An exploration of minimalism in modern web design.</p>
                <p>Project 2: A dynamic user interface for a mobile application focusing on user interaction and engagement.</p>
                <p>Project 3: A corporate branding and identity design for a well-known organization.</p>
                <p>Welcome to my design portfolio. Below you will find a showcase of my projects. The work presented here highlights a wide range of design principles, styles, and technical abilities. Each project is a reflection of my commitment to aesthetics, user experience, and functionality. From visual design to interactive elements, I ensure that every piece meets the highest standards of creativity and practicality.</p>
                <p>Project 1: An exploration of minimalism in modern web design.</p>
                <p>Project 2: A dynamic user interface for a mobile application focusing on user interaction and engagement.</p>
                <p>Project 3: A corporate branding and identity design for a well-known organization.</p>
                <p>Welcome to my design portfolio. Below you will find a showcase of my projects. The work presented here highlights a wide range of design principles, styles, and technical abilities. Each project is a reflection of my commitment to aesthetics, user experience, and functionality. From visual design to interactive elements, I ensure that every piece meets the highest standards of creativity and practicality.</p>
                <p>Project 1: An exploration of minimalism in modern web design.</p>
                <p>Project 2: A dynamic user interface for a mobile application focusing on user interaction and engagement.</p>
                <p>Project 3: A corporate branding and identity design for a well-known organization.</p>
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
