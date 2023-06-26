@props([
    'asset',
])

<!-- Car Search Item-->
<div class="rn-car-search-item">
    <div class="rn-car-search-item-thumb">
        <a href="car-single.html">
            <img class="img-fluid" src="{{ asset('images/car-search-item-1.jpg') }}" alt="" srcset="{{ asset('images/car-search-item-1.jpg') }} 1x, {{ asset('images/car-search-item-1@2x.jpg') }} 2x"/>
        </a>
    </div>
    <div class="rn-car-search-item-info">
        <h2 class="rn-car-search-item-title">
            <a href="#">{{ $asset->name }}</a>
        </h2>
        <div class="rn-car-reviews">
            <div class="rn-car-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#">3 Reviews</a>
        </div>
        <p>Mauris semper nisl a massa convallis</p>
        <div class="rn-car-meta">
            @foreach ($asset->amenities as $amenity)
                @if (! empty($asset->icon))
                    <span>
                        <i class="{{ $asset->icon }}"></i> {{ $asset->name }}
                    </span>
                @endif
            @endforeach
        </div>
        <a class="rn-car-more-info" href="#">More Information</a>
    </div>
    <div class="rn-car-search-item-pricing">
        <div class="rn-car-total-price">
            <span>$1400</span>/total
        </div>
        <div class="rn-car-price">
            <span>AED {{ round($asset->price) }}</span>/day
        </div>
        <a class="btn btn-main btn-lg btn-shadow" href="#">Book Now</a>
    </div>
</div>
<!-- End Car Search Item-->
