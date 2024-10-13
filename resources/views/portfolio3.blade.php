@extends('Components.Layout')

@section('title', 'Portfolio3')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title">Making <span> Layout </span> </h1>

        <div class="portfolio-content">
            
        <div class="custom-carousel">
                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide current-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-1.png') }}" alt="Design Project 1">
                                <div class="description">Image 1</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-2.png') }}" alt="Design Project 2">
                                <div class="description">Image 2</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-3.png') }}" alt="Design Project 3">
                                <div class="description">Image 3</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-4.png') }}" alt="Design Project 4">
                                <div class="description">Image 4</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-5.png') }}" alt="Design Project 5">
                                <div class="description">Image 5</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-6.png') }}" alt="Design Project 6">
                                <div class="description">Image 6</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port3-7.png') }}" alt="Design Project 7">
                                <div class="description">Image 7</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <button class="carousel-button left-button">&lt;</button>
                <button class="carousel-button right-button">&gt;</button>
            </div>

            <div class="narrative">
            <h2> Creating a Layout File </h2>
            <p> To begin, we created a layout file in the resources/views directory to serve as a reusable layout for our Laravel application. We begin by creating a new folder called "Components" to organise our views' reusable parts. Inside this folder, we create a new Blade file named Layout.blade.php. This layout file provides the basis for the general structure of our web pages, comprising the basic HTML skeleton, which contains parts such as the header, footer, and connections to stylesheets and scripts. </p>
            <p> Individual views can expand the layout, ensuring consistent appearance and structure across pages. For example, in Layout.blade.php, we identify places where individual views' content will be put, allowing for flexibility while maintaining the fundamental layout. </p>
            <h2> Creating Views </h2>
            <p> Next, we make three Blade view files in the resources/views folder. Each view represents a separate page, and all views are intended to expand the layout file established in Part 1. Blade's at extends directive ensures that each view inherits the structure described in Layout.blade.php, whereas the at section directive defines page-specific content. </p>
            <p> For example, we develop a homepage view (home.blade.php) that extends the layout and adds welcome information to the specified area. Similarly, we develop two more views for the "About" and "Contact" pages, each with its own unique content but having the same basic framework. This technique maintains a clear separation of responsibilities, with layout control centralized in a single file and content described in separate views. </p>
            <h2> Update Routes </h2>
            <p>Once the layout and views are complete, we can update the routes in routes/web.php to serve the views. For each page, we create a route that connects a URL to the relevant view file. </p>

            <p> Similar routes are developed for the "About" and "Contact" pages to ensure that each URL returns the right view. Setting up these routes establishes the navigation for our application, letting users to visit the various pages via the respective URLs. </p>
            <h2> Learnings and Difficulties </h2>
            <p>This project taught us how to use Laravel's Blade to construct reusable layouts. By designing a layout file, we ensured that the overall structure of our web pages remained constant across multiple views, making site management easier. Using Blade's at extends and at section, we were able to include page-specific material into the layout without repeating code. </p>

            <p>We also experimented with routing, creating routes in web.php to link URLs to certain views. This facilitated navigation between pages such as the home, About Us, and Contact Us. </p>

            <p> One of the issues we had was ensuring that the Blade syntax was precise, as minor errors in the at section or at yield directives may cause the views to render incorrectly. Configuring the routes and putting limitations to route parameters needed considerable attention to ensure that everything functioned properly. </p>
            <p>Overall, the project emphasized the significance of using clear structure, syntax, and organization while developing Laravel apps. </p>

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
