<!-- Header -->
<header id="site_header" class="header">
    <div class="header-content clearfix">

        <!-- Text Logo -->
        <div class="text-logo">
            <a href="index.html">
                <div class="logo-text">{{ $page->portfolio->first_name }} <span>{{ $page->portfolio->last_name }}</span></div>
            </a>
        </div>
        <!-- /Text Logo -->

        <!-- Navigation -->
        <div class="site-nav mobile-menu-hide">
            <ul class="nscharrenberg-classic-menu site-main-menu">
                <li class="menu-item current-menu-item">
                    <a href="{{ url('/') }}">About Me</a>
                </li>

                <li class="menu-item">
                    <a href="{{ url('/resume') }}">Resume</a>
                </li>

                <li class="menu-item">
                    <a href="{{ url('/projects') }}">Portfolio</a>
                </li>

                <li class="menu-item">
                    <a href="{{ url('/blog') }}">Blog</a>
                </li>

                <li class="menu-item">
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>
<!-- /Header -->
