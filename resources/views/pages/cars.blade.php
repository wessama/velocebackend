@extends('layouts.frontend.app')

@section('title')
    <x-partials.page-title>
        <h1>All Cars</h1>
        <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
    </x-partials.page-title>
@endsection

@section('content')
    @include('partials.frontend.cars')
@endsection
