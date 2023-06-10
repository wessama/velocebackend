<!-- Menubar-->
<div class="rn-menubar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4">
                <!-- Logo-->
                <a class="brand-name" href="{{ route('home') }}">
                    <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="Logo">
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
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#">Cars
                                <i class="lnr lnr-chevron-down"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="car-search.html">Car Search</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages
                                <i class="lnr lnr-chevron-down"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="service.html">Service</a>
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
