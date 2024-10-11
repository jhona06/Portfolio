@extends('Components.Layout')

@section('title','Compilation')

@section('content')
    <section class="compilation" id="compilation">
        <h2 class="heading typewriter">
            Compilation of <span>Lab Activities</span>
        </h2>
        <div class="compilation-container">
            <div class="compilation-box">
                <img src="{{ asset('images/pic1.png') }}">
                <div class="compilation-layer">
                    <h4>Setup</h4>
                    <p>Setting up Laravel Project<p>
                    <a href="{{ route('portfolio1') }}"><i class='bx bx-link-external'></i>
                </div>
            </div>

            <div class="compilation-box">
                <img src="{{ asset('images/pic2.png') }}">
                <div class="compilation-layer">
                    <h4>Setup</h4>
                    <p>Setting up Laravel Project<p>
                    <a href="{{ route('portfolio2') }}"><i class='bx bx-link-external'></i>
                </div>
            </div>

            <div class="compilation-box">
                <img src="{{ asset('images/pic3.png') }}">
                <div class="compilation-layer">
                    <h4>Setup</h4>
                    <p>Setting up Laravel Project<p>
                    <a href="{{ route('portfolio1') }}"><i class='bx bx-link-external'></i>
                </div>
            </div>

            <div class="compilation-box">
                <img src="{{ asset('images/pic4.png') }}">
                <div class="compilation-layer">
                    <h4>Setup</h4>
                    <p>Setting up Laravel Project<p>
                    <a href="{{ route('portfolio1') }}"><i class='bx bx-link-external'></i>
                </div>
            </div>
        </div>
    </section>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const boxes = document.querySelectorAll('.compilation-box');
            boxes.forEach((box, index) => {
                setTimeout(() => {
                    box.style.opacity = '1';
                    box.style.transform = 'translateY(0)';
                }, index * 200); // Staggered effect every 200ms
            });
        });
    </script>

@endsection

