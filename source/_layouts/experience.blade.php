@extends('_layouts.main')

@section('child')
    <article class="post">
        <header class="entry-header">
            <div class="entry-meta entry-meta-top m-1">
                <span><a href="{{ url('/resume') }}" rel="category tag">Experience</a></span>
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
                                <li><p><i class="fa fa-building"></i> {{ $page->company }}</p></li>
                                <li><p><i class="fa fa-address-card"></i> {{ $page->position }}</p></li>
                                <li><p><i class="fa fa-globe"></i> <a href="{{ $page->website }}" target="_blank">{{ $page->website }}</a></p></li>
                                <li><p><i class="fa fa-calendar"></i> {{ $page->getDate('start_date')->format('F, Y') }}</p></li>
                                <li><p><i class="fa fa-flag-checkered"></i> {{ !is_null($page->until_date) ? $page->getDate('until_date')->format('F, Y') : 'present' }}</p></li>
                            </ul>

                            <p class="text-justify">{{ $page->description }}</p>
                            <!-- /Project Description -->

                        @if(count($page->technologies ) > 0)
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
                            @endif
                        </div>
                        <!-- Project Description -->
                    </div>
                </div>
            </div><!-- .entry-content -->
        </div>
    </article>
@endsection