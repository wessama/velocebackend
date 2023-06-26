<!-- Cars-->
<section class="rn-section rn-car-list">
    <div class="container">
        <div class="row">
            @each('components.partials.car.index', $cars, 'car')
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Cars Pagination-->
                <nav class="rn-pagination rn-pagination-center">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        <li>
                            <a class="rn-active" href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Cars Pagination-->
            </div>
        </div>
    </div>
</section>
<!-- End Cars-->
