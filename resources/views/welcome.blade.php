@extends('layouts.frontend.app')

@section('content')
    @if($agent->isMobile())
        @include('partials.frontend.car-search')
        @include('partials.frontend.slider')
        @include('partials.frontend.categories')
        @include('partials.frontend.cars')
    @else
        @include('partials.frontend.slider')
        @include('partials.frontend.car-search')
        @include('partials.frontend.categories', ['assetCategories' => $assetCategories])
        @include('partials.frontend.cars', ['assets' => $assets])
    @endif
@endsection
