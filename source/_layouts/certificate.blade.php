@extends('_layouts.main')

@section('child')
    <article class="post">
        <header class="entry-header">
            <div class="entry-meta entry-meta-top m-1">
                <span><a href="{{ url('/resume') }}" rel="category tag">Certificate</a></span>
            </div><!-- .entry-meta -->

            <h2 class="entry-title text-primary">{{ $page->title }}</h2>
        </header><!-- .entry-header -->

        <div class="post-content">
            <div class="entry-content">

                <div class="row">
                    <div class="col-sm-8 col-md-8 ">
                        @yield('content')
                    </div>

                    <div class="col-sm-4 col-md-4 portfolio-block">
                        <!-- Project Description -->
                        <div class="project-description">
                            <div class="block-title">
                                <h3>Description</h3>
                            </div>
                            <ul class="project-general-info">
                                <li><p><i class="fa fa-building"></i> {{ $page->title }}</p></li>
                                <li><p><i class="fa fa-address-card"></i> {{ $page->subtitle }}</p></li>
                                <li><p><i class="fa fa-calendar"></i> {{ $page->getDate('date')->format('F, Y') }}</p></li>
                            </ul>
                            <!-- /Project Description -->
                        </div>
                        <!-- Project Description -->
                    </div>
                </div>
            </div><!-- .entry-content -->
        </div>
    </article>
@endsection