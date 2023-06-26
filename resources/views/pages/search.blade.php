@extends('layouts.frontend.app')

@section('title')
    <x-partials.page-title>
        <h1>Car Search</h1>
        <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
    </x-partials.page-title>
@endsection

@section('content')
    <section id="search-results">
        <x-partials.search>
            <x-slot name="filters">
                <x-partials.search.filters>
                    <x-slot name="categories">
                        <x-partials.search.filters.categories :asset-categories="$assetCategories" />
                    </x-slot>
                    <x-slot name="color">
                        <x-partials.search.filters.color />
                    </x-slot>
                    <x-slot name="price">
                        <x-partials.search.filters.price />
                    </x-slot>
                    <x-slot name="amenities">
                        <x-partials.search.filters.amenities />
                    </x-slot>
                </x-partials.search.filters>
            </x-slot>
            <x-slot name="results">
                @if ($results->isNotEmpty())
                    @each('components.partials.search.result', $results, 'asset')
                @endif
            </x-slot>
        </x-partials.search>
    </section>

    @if ($results->isEmpty())
        <x-partials.no-items-found />
    @endif
@endsection

@pushOnce('footer-scripts')
    <script>
        $(document).ready(function() {
            // Scroll to the search results section
            $('html, body').animate({
                scrollTop: $('#search-results').offset().top
            }, 800);
        });
    </script>
@endpushOnce


