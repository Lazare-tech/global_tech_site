@extends('layouts.app')
@section('title','Accueill')

@section('content')

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-overlay"></div>

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('assets/images/work2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption text-center">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('assets/images/work1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption text-center">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('assets/images/work3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption text-center">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection()