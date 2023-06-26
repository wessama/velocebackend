@props([
    'asset',
])

<div class="col-lg-4 col-md-6">
    <!-- Car Item-->
    <div class="rn-car-item">
        <x-partials.car.rating />
        <x-partials.car.thumbnail />
        <x-partials.car.info :name="$asset->name"
                             :price-per-day="$asset->price"
                             :amenities="$asset->amenities?->take(3)->toArray()"
                             :short-description="$asset->short_description" />
    <!-- End Car Item-->
    </div>
</div>
