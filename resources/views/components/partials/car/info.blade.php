@props([
    'name',
    'pricePerDay' => 0,
    'amenities' => [],
    'shortDescription' => '',
])

<div class="rn-car-item-info">
    <h3>
        <a href="car-single.html">{{ $name }}</a>
    </h3>
    <p>{{ $shortDescription }}</p>
    <x-partials.car.price :$amenities :$pricePerDay />
</div>
