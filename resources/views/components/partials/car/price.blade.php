<div class="rn-car-list-n-price">
    <x-partials.car.amenities :$amenities />
    <div class="rn-car-price-wrap">
        <a class="rn-car-price" href="car-single.html">
            <span class="rn-car-price-from">From</span>
            <span class="rn-car-price-format">
                <span class="rn-car-price-amount">AED {{ round($pricePerDay) }}</span>
                <span class="rn-car-price-per">/day</span>
            </span>
        </a>
    </div>
</div>
