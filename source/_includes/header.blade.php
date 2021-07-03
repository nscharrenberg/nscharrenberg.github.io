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
                    <a href="index.html">About Me</a>
                </li>

                <li class="menu-item">
                    <a href="resume.html">Resume</a>
                </li>

                <li class="menu-item">
                    <a href="projects.html">Portfolio</a>
                </li>

                <li class="menu-item">
                    <a href="blog.html">Blog</a>
                </li>

                <li class="menu-item">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>
<!-- /Header -->
