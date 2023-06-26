<!-- Car Categories-->
<section class="rn-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Section Title-->
                <div class="rn-section-title   ">
                    <h2 class="rn-title">What are you looking for?</h2>
                    <p>Inbecilloque elegans errorem concedo etsi electram.</p>
                    <span class="rn-title-bg">We've got it</span>
                </div>
            </div>
        </div>
        <div class="row">
            @each('components.partials.category.index', $assetCategories, 'assetCategory')
        </div>
    </div>
</section>
<!-- End Car Categories-->
