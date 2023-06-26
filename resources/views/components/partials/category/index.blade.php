@props([
    'assetCategory',
])

<div class="col-lg-2 col-6 col-md-4">
    <!-- Car Category-->
    <div class="rn-car-type">
        <a href="{{ route('frontend.cars', $assetCategory) }}">
            <span class="rn-car-type-icon">
                <i class="{{ $assetCategory->icon }}"></i>
            </span>
            <span class="rn-car-type-title">{{ $assetCategory->name }}</span>
        </a>
    </div>
</div>
