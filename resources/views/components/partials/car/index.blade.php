@props([
    'car',
])

<div class="col-lg-4 col-md-6">
    <!-- Car Item-->
    <div class="rn-car-item">
        <x-partials.car.rating />
        <x-partials.car.thumbnail />
        <x-partials.car.info :name="$car->name"
                             :price-per-day="$car->price"
                             :amenities="$car->amenities?->take(3)->toArray()"
                             :short-description="$car->short_description" />
    <!-- End Car Item-->
    </div>
</div>
