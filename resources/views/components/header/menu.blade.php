<!-- Menubar-->
<div class="rn-menubar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4">
                <!-- Logo-->
                <a class="brand-name" href="{{ route('home') }}">
                    {{--<img class="img-fluid" src="#" alt="Logo">--}}
                </a>
            </div>
            <div class="col-12 col-md-8">
                <nav class="rn-navbar-container">
                    <!-- Navbar Toggle Button for Only Tablet and Phone-->
                    <button class="rn-navbar-toggler" id="rn-navbar-toggler">
                        <span class="rn-navbar-toggler-bar"></span>
                        <span class="rn-navbar-toggler-bar"></span>
                        <span class="rn-navbar-toggler-bar"></span>
                    </button>

                    <!-- Main Nav Menu-->
                    <ul class="rn-navbar">
                        <li @class(['active' => request()->is('home') || request()->is('/')])>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li @class(['active' => request()->is('cars/category*')])>
                            <a href="{{ route('frontend.cars') }}">Available Cars</a>
                        </li>
                        <li @class(['active' => request()->is('cars/search')])>
                            <a href="{{ route('frontend.cars.search') }}">Search</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Menubar-->
