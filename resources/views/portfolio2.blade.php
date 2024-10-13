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
