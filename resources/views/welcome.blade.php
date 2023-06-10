@extends('layouts.frontend.app')

@section('content')
    @inject('agent', 'Jenssegers\Agent\Agent')

    @if($agent->isMobile())
        @include('partials.frontend.car-search')
        @include('partials.frontend.slider')
        @include('partials.frontend.categories')
    @else
        @include('partials.frontend.slider')
        @include('partials.frontend.car-search')
        @include('partials.frontend.categories')
    @endif
@endsection
