<!-- Car Search Form-->
<section class="rn-search-form-big rn-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title-->
                <div class="rn-section-title  rn-title-bg-color-white-10 rn-title-color-white">
                    <h2 class="rn-title">Search &amp; Rent Cars</h2>
                    <span class="rn-title-bg">Search &amp; Rent Cars</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Main Big Search Form-->
                <div class="rn-big-search-form rn-big-search-form-dark">
                    <form action="car-search.html">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="rn-icon-input">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input id="pickup_location" type="text" value="" placeholder="Pick-up Location">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="rn-icon-input">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input id="dropoff_location" type="text" value="" placeholder="Drop-off Location">
                                </div>
                            </div>
                            <div class="col-lg-3 rn-date-time-input">
                                <div class="row">
                                    <div class="col-lg-7 col-md-8 col-8">
                                        <div class="rn-icon-input">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" placeholder="Pick-up Date" id="pickup-date">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-4">
                                        <div class="rn-icon-input">
                                            <i class="far fa-clock"></i>
                                            <input type="text" placeholder="Time" id="pickup-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 rn-date-time-input">
                                <div class="row">
                                    <div class="col-lg-7 col-md-8 col-8">
                                        <div class="rn-icon-input">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" placeholder="Drop-off Date" id="drop-date">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-4">
                                        <div class="rn-icon-input">
                                            <i class="far fa-clock"></i>
                                            <input type="text" placeholder="Time" id="drop-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-orange btn-lg mt-30 btn-shadow" type="submit">
                                <i class="fas fa-search"></i> Find Now
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Section Shape-->
    <div class="rn-shape rn-shape-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="rn-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"/>
        </svg>
    </div>
</section>
<!-- End Car Search Form-->

@pushOnce('footer-scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_maps_api_key') }}ProvideKeyHeres&libraries=places"></script>

    <script>
        $(document).ready(function() {
            // Initialize autocomplete for pick-up location
            const pickupInput = document.getElementById('pickup_location');
            const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);

            // Initialize autocomplete for drop-off location
            const dropoffInput = document.getElementById('dropoff_location');
            const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
        });
    </script>
@endpushOnce
