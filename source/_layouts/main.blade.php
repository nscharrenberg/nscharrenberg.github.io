<!DOCTYPE html>
<html lang="{{ isset($page->language) ? $page->language : 'en' }}" class="no-js">
    @include('_includes.head')
    <body class="page">
    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="nscharrenberg-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container page-container-no-bottom-padding bg-move-effect" data-animation="transition-flip-in-right">
            @include('_includes.header')
            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">
                        @yield('body')
                    </div>
                </div>
            </div>
            @include('_includes.footer')

        </div>
    </div>

    @include('_includes.foot')
    </body>
</html>
