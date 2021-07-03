@extends('_layouts.main')

@section('body')
    <div id="content" class="page-content site-content single-post" role="main">
        <div class="row">
            <div class=" col-xs-12 col-sm-12">
                <div class="home-content">
                    <div class="row flex-v-align">

                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="home-photo">
                                <div class="hp-inner" style="background-image: url({{ $page->portfolio->picture }});">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <div class="home-text hp-left">
                                <div class="owl-carousel text-rotation">
                                    @foreach($page->portfolio->roles as $role)
                                    <div class="item">
                                        <h4>{{ $role }}</h4>
                                    </div>
                                    @endforeach
                                </div>

                                <h1>{{ $page->portfolio->first_name }} {{ $page->portfolio->last_name }}</h1>
                                <p>{{ $page->portfolio->description }}</p>
                                <div class="home-buttons">
                                    <a href="/resume" target="_blank" class="btn btn-primary">Download CV</a>
                                    <a href="/contact" target="_self" class="btn btn-secondary">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
@endsection