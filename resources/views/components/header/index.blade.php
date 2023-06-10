<!-- Header-->
<header class="rn-header">
    @if(!$agent->isMobile())
        <div class="rn-topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-5 col-lg-3">
                        <x-header.socials/>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-9">
                        <x-header.contact/>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Menubar-->
    <div class="rn-menubar">
        <div class="container">
           <x-header.menu/>
        </div>
    </div>
</header>
