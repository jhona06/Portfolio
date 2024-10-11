@extends('Components.Layout')

@section('title','Portfolio1')

@section('content')
    <!-- Custom Section for About -->
    <section class="custom-section about" id="about">
        <!-- Custom Carousel for Images -->
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="{{ asset('images/pic1.png') }}" alt="Setup Image 1" class="carousel-image">
                <img src="{{ asset('images/pic1.png') }}" alt="Setup Image 2" class="carousel-image">
                <img src="{{ asset('images/pic1.1png') }}" alt="Setup Image 3" class="carousel-image">
            </div>

            <!-- Carousel Controls -->
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <!-- About Content with Scrollable Feature -->
        <div class="about-content scrollable-content mt-5">
            <h2 class="heading">Setting Up <span>Laravel Project</span></h2>
            <h3>Laboratory 1</h3>
            <p>blaha</p>
            <p>Additional content can go here to demonstrate scrolling...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Fusce dictum ipsum vel augue malesuada, a gravida ipsum ullamcorper. Cras lacinia ante sed gravida tempor.</p>
            <p>Aliquam erat volutpat. Vivamus vehicula ligula a mauris accumsan, id tempor purus placerat.</p>
            <p>Donec ut sem nec justo ultricies facilisis et nec nisi. Etiam quis mi sit amet tortor lacinia ultrices at et ante.</p>
            <p>Maecenas ut semper libero. Sed vestibulum vehicula mi, sed vehicula orci laoreet eu. Etiam dignissim libero in sapien finibus.</p>
        </div>
    </section>

    <!-- JavaScript for Carousel Functionality -->
    <script>
    let currentSlide = 0;

    function moveSlide(step) {
        const slides = document.querySelector('.carousel-slide');
        const totalSlides = document.querySelectorAll('.carousel-image').length;
        currentSlide += step;

        if (currentSlide >= totalSlides) {
            currentSlide = 0;
        } else if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        }

        const slideWidth = document.querySelector('.carousel-image').clientWidth;
        slides.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
    }
    </script>
@endsection
