<div id="ajax-page" class="ajax-page-content">
    <div class="ajax-page-wrapper">
        <div class="ajax-page-nav">
{{--            <div class="nav-item ajax-page-prev-next">--}}
{{--                <a class="ajax-page-load" href="portfolio-project-3.html"><i class="lnr lnr-chevron-left"></i></a>--}}
{{--                <a class="ajax-page-load" href="portfolio-project-2.html"><i class="lnr lnr-chevron-right"></i></a>--}}
{{--            </div>--}}
            <div class="nav-item ajax-page-close-button">
                <a id="ajax-page-close-button" href="#"><i class="lnr lnr-cross"></i></a>
            </div>
        </div>

        <div class="ajax-page-title">
            <h1>{{ $page->title }}</h1>
        </div>

        <div class="row">
            <div class="col-sm-8 col-md-8 portfolio-block">
                @if(count($page->images) > 0)
                    <div class="owl-carousel portfolio-page-carousel">
                        @foreach($page->images as $image)
                        <div class="item">
                            <img src="{{ $image }}" alt="" />
                        </div>
                        @endforeach
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            $('.portfolio-page-carousel').imagesLoaded(function(){
                                $('.portfolio-page-carousel').owlCarousel({
                                    smartSpeed:1200,
                                    items: 1,
                                    loop: true,
                                    dots: true,
                                    nav: true,
                                    navText: false,
                                    margin: 10,
                                    autoHeight:true
                                });
                            });
                        });
                    </script>
                @endif

                @yield('content')
            </div>

            <div class="col-sm-4 col-md-4 portfolio-block">
                <!-- Project Description -->
                <div class="project-description">
                    <div class="block-title">
                        <h3>Description</h3>
                    </div>
                    <ul class="project-general-info">
                        <li><p><i class="fa fa-user"></i>@foreach($page->contributors as $contributor) {{ $contributor }}, @endforeach </p></li>
                        <li><p><i class="fa fa-building"></i> {{ $page->client }}</p></li>
                        <li><p><i class="fa fa-globe"></i> <a href="{{ $page->website }}" target="_blank">{{ $page->website }}</a></p></li>
                        <li><p><i class="fa fa-calendar"></i> {{ $page->getDate('start_date')->format('F, Y') }}</p></li>
                        <li><p><i class="fa fa-flag-checkered"></i> {{ isset($page->until_date) && !is_null($page->until_date) ? $page->getDate('until_date')->format('F, Y') : 'present' }}</p></li>
                    </ul>

                    <p class="text-justify">{{ $page->description }}</p>
                    <!-- /Project Description -->

                    <!-- Technology -->
                    <div class="tags-block">
                        <div class="block-title">
                            <h3>Technology</h3>
                        </div>
                        <ul class="tags">
                            @foreach($page->technologies as $technology)
                            <li><a>{{ $technology }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /Technology -->

                    <!-- Tags -->
                    <div class="tags-block">
                        <div class="block-title">
                            <h3>Tags</h3>
                        </div>
                        <ul class="tags">
                            @foreach($page->tags as $tag)
                                <li><a>{{ $tag }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /Tags -->
                </div>
                <!-- Project Description -->
            </div>
        </div>
    </div>
</div>
