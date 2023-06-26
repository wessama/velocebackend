<!-- Cars-->
@if ($assets->isNotEmpty())
<section class="rn-section rn-car-list" id="cars">
    <div class="container">
        <div class="row">
            @each('components.partials.car.index', $assets, 'asset')
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Cars Pagination-->
                <nav class="rn-pagination rn-pagination-center">
                    <ul>
                        @if (! $assets->onFirstPage())
                            <li>
                                <a href="{{ $assets->previousPageUrl() }}#cars">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                        @endif

                        @foreach ($assets->getUrlRange(1, $assets->lastPage()) as $page => $url)
                            @if ($page == $assets->currentPage())
                                <li>
                                    <a class="rn-active" href="{{ $url }}#cars">{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}#cars">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        @if ($assets->hasMorePages())
                            <li>
                                <a href="{{ $assets->nextPageUrl() }}#cars">
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
@else
    <x-partials.no-items-found />
@endif
