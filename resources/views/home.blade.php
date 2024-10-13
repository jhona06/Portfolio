@extends('Components.Layout') 

@section('title','Home') 

@section('content')
<section class="home" id="home">
    <div class="home-img">
        <img src="{{ asset('images/front1.gif') }}" style="max-width: 100%;">
    </div>

    <div class="home-content" >
        <h3 class="fade-in" id="welcome">Welcome to My Portfolio</h3>
        <h1 class="fade-in delay-1" id="name"></h1>
        <h3 class="fade-in delay-2" id="studentTitle" style="display: none;">And I'm a <span>BSIT-3C Student</span></h3>
        <p class="fade-in delay-3" id="showcase" style="display: none;">This will showcase my work throughout the midterm.</p>
    </div>

<script>
    function typeWriter(element, text, delay, callback) {
        let i = 0;
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, delay);
            } else if (callback) {
                callback();
            }
        }
        type();
    }
    document.addEventListener('DOMContentLoaded', function() {
        const nameElement = document.getElementById('name');
        typeWriter(nameElement, "I'm Karel Jhona Cestina", 100, function() {
            document.getElementById('studentTitle').style.display = 'block';
            setTimeout(() => {
                document.getElementById('studentTitle').style.opacity = 1;
            }, 50);
        });
        setTimeout(() => {
            const studentTitle = document.getElementById('studentTitle');
            studentTitle.style.display = 'block';
            studentTitle.classList.add('fade-in');
        }, 2500); 
        setTimeout(() => {
            const showcaseText = document.getElementById('showcase');
            showcaseText.style.display = 'block';
            showcaseText.classList.add('fade-in');
        }, 3000);
    });
</script>
@endsection
