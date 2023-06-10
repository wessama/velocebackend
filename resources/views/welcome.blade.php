@extends('layouts.frontend.app')

@section('content')
    <!-- Slider-->
    <div class="rn-carousel carousel slide" id="carouselExampleControls" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Slider Item 1-->
            <div class="carousel-item beactive">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">Drive on your own terms</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Marketing text here</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="{{ asset('images/slide1.jpeg') }}" alt="slide">
            </div>

            <!-- Slider Item 2-->
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">Create your own style</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Marketing text here</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="{{ asset('images/slide2.jpeg') }}" alt="slide">
            </div>

            <!-- Slider Item 3-->
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">Drive your dream car</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Marketing text here</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="{{ asset('images/slide3.jpeg') }}" alt="slide">
            </div>

        </div>
        <!-- Slider Controls -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="lnr lnr-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="lnr lnr-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
    <!-- End slider-->
@endsection
