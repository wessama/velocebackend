<form id="car-search-form" action="{{ route('frontend.cars.filter') }}" method="POST">
    @csrf
    <!-- Car Search Filters-->
    <div class="rn-car-search-filters">
        <div class="rn-car-search-filter-item">
            {{ $categories }}
        </div>
        <div class="rn-car-search-filter-item">
            {{ $amenities }}
        </div>
        <div class="rn-car-search-filter-item">
            {{ $color }}
        </div>
        <div class="rn-car-search-filter-item rn-csf-item-last">
            {{ $price }}
        </div>
    </div>
    <!-- End Car Search Filters-->
</form>

@pushOnce('footer-scripts')
    <script>
        $(document).ready(function() {
            $('#car-search-form input, #car-search-form select').on('change', function() {
                $('#car-search-form').submit();
            });
        });
    </script>
@endpushOnce
