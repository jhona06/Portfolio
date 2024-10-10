@extends('Components.Layout')

@section('title','Home' )

@section('content')
    <section class="home" id="home">
        <div class="home-content">
        <h3>Welcome to My Portfolio</h3>
        <h1>I'm Karel Jhona Cestina </h1>
        <h3> And I'm a <span> BSIT-3C Student </span></h3>
        <p>This is will showcase my work all throught the midterm </p>
    </section>

    <div class="home-img">
        <img src="{{ asset('images/front1.jpg') }}">
    <div>
@endsection
