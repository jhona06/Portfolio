@extends('Components.Layout')

@section('title', 'Portfolio4')

@section('content')
<div class="center-container">
    <div class="container">
        <h1 class="portfolio-title">Implementing  <span> Middleware </span> </h1>

        <div class="portfolio-content">
            
        <div class="custom-carousel">
                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide current-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-1.png') }}" alt="Design Project 1">
                                <div class="description">Image 1</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-2.png') }}" alt="Design Project 2">
                                <div class="description">Image 2</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-3.png') }}" alt="Design Project 3">
                                <div class="description">Image 3</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-4.png') }}" alt="Design Project 4">
                                <div class="description">Image 4</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-5.png') }}" alt="Design Project 5">
                                <div class="description">Image 5</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-6.png') }}" alt="Design Project 6">
                                <div class="description">Image 6</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-7.png') }}" alt="Design Project 7">
                                <div class="description">Image 7</div>
                            </div>
                        </li>
                        <li class="carousel-slide">
                            <div class="image-container">
                                <img src="{{ asset('images/port4-8.png') }}" alt="Design Project 8">
                                <div class="description">Image 8</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <button class="carousel-button left-button">&lt;</button>
                <button class="carousel-button right-button">&gt;</button>
            </div>

            <div class="narrative">            
                <h2> Creating and Registering New Middleware. </h2>
                <p> The initial goal was to develop two pieces of middleware, CheckAge and LogRequests. We used the command line to create both middleware files. The CheckAge middleware was developed to determine whether the user was 18 or older. If the user's age did not match the criterion, the middleware forwarded them to a "Access Denied" page. This was a wonderful technique to impose age-based access controls. <p>
                <p>The LogRequests middleware was in charge of logging the details of each HTTP request, including the request method, URL, and date, to a file called log.txt. This middleware gave insights into request flow and served as a useful tool for tracking site activity. </p>
                <p>After constructing the middleware, we registered it in the app/Http/Kernel.php file. Both middlewares were introduced as global middleware, which applies to all routes, and route-specific middleware, which allows for more precise control. This allowed us the ability to deploy middleware to all requests or specific routes as needed. </p>
                <h2>Assigning middleware to routes. </h2>
                <p>Next, we defined a route group that applied the CheckAge middleware to certain routes. We utilized this middleware on the "home” page. As we want this to restrict the process of ordering. </p>
                <p> To test the middleware, we ran many situations in which the age met or failed the CheckAge condition. For example, those under the age of 18 were sent to the "Access Denied" page. When the user was 18 or older, the middleware provided access to make order place to the order list . This illustrated how middleware may be used to filter requests according to certain criteria. </p>
                <h2> Creating Middleware with Parameters </h2>
                <p> We then extended the functionality of the CheckAge middleware by adding parameters. By allowing the middleware to accept a minimum age requirement as a parameter, we could create routes with different age restrictions. We created a new route that required users to be at least 21 years old. This feature made the middleware more flexible and reusable for different conditions. <p>
                <h2>Key Learnings and Challenges </h2>
                <p> This project helped us better grasp how Laravel middleware works, from designing custom middleware to applying it to routes and adding arguments for more flexibility. One problem was ensuring that the middleware handled arguments as intended and appropriately logged requests to the file. Debugging and testing with various age values revealed important details about the function of middleware in request processing and access control. </p
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
