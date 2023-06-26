<!-- Cars-->
<section class="rn-section rn-car-list" id="cars">
    <div class="container">
        <div class="row">
            @each('components.partials.car.index', $cars, 'car')
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Cars Pagination-->
                <nav class="rn-pagination rn-pagination-center">
                    <ul>
                        @if (! $cars->onFirstPage())
                            <li>
                                <a href="{{ $cars->previousPageUrl() }}#cars">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                        @endif

                        @foreach ($cars->getUrlRange(1, $cars->lastPage()) as $page => $url)
                            @if ($page == $cars->currentPage())
                                <li>
                                    <a class="rn-active" href="{{ $url }}#cars">{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}#cars">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        @if ($cars->hasMorePages())
                            <li>
                                <a href="{{ $cars->nextPageUrl() }}#cars">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
                <!-- End Cars Pagination-->
            </div>
        </div>
    </div>
</section>
<!-- End Cars-->
