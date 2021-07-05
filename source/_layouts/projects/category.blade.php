@extends('_layouts.page')

@php
    $page->subtitle = 'Project Category';
@endphp

@section('content')
    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <!-- Portfolio Content -->
            <div id="portfolio_content_q" class="portfolio-content">
                <!-- Portfolio Grid -->
                <div class="portfolio-grid three-columns shuffle">
                    @foreach($page->projects($projects) as $project)
                        @switch($project->type)
                            @case('video')
                            <figure class="item lbvideo" data-groups='{{ json_encode($project->tags) }}'>
                                <div class="portfolio-item-img">
                                    <img src="{{ $project->cover }}" alt="{{ $project->title }}" title="" />
                                    <a href="{{ $project->video }}" class="lightbox mfp-iframe" title="{{ $project->title }}"></a>
                                </div>

                                <i class="fab fa-youtube"></i>
                                <h4 class="name">{{ $project->title }}</h4>
                                <span class="category">@foreach($project->tags as $tag) {{ $tag }},  @endforeach</span>
                            </figure>
                            @break
                            @case('image')
                            <figure class="item lbimage" data-groups='{{ json_encode($project->tags) }}'>
                                <div class="portfolio-item-img">
                                    <img src="{{ $project->cover }}" alt="Image 2" title="" />
                                    <a class="lightbox" title="{{ $project->title }}" href="{{ $project->cover }}"></a>
                                </div>

                                <i class="fa fa-image"></i>
                                <h4 class="name">{{ $project->title }}</h4>
                                <span class="category">@foreach($project->tags as $tag) {{ $tag }},  @endforeach</span>
                            </figure>
                            @break
                            @case('link')
                            <figure class="item direct" data-groups='{{ json_encode($project->tags) }}'>
                                <div class="portfolio-item-img">
                                    <img src="{{ $project->cover }}" alt="{{ $project->title }}" title="{{ $project->title }}" />
                                    <a target="_blank" href="{!! $project->website !!}"></a>
                                </div>

                                <i class="fa fa-link"></i>
                                <h4 class="name">{{ $project->title }}</h4>
                                <span class="category">@foreach($project->tags as $tag) {{ $tag }},  @endforeach</span>
                            </figure>
                            @break
                            @case('audio')
                            <figure class="item lbaudio" data-groups='{{ json_encode($project->tags) }}'>
                                <div class="portfolio-item-img">
                                    <img src="{{ $project->cover }}" alt="{{ $project->title }}" title="" />
                                    <a href="{{ $project->audio }}" class="lightbox mfp-iframe" title="{{ $project->title }}"></a>
                                </div>

                                <i class="fas fa-volume-up"></i>
                                <h4 class="name">{{ $project->title }}</h4>
                                <span class="category">@foreach($project->tags as $tag) {{ $tag }},  @endforeach</span>
                            </figure>
                            @break
                            @default
                            <!-- Portfolio Item 1 -->
                                <figure class="item standard" data-groups='{{ json_encode($project->tags) }}'>
                                    <div class="portfolio-item-img">
                                        <img src="{{ $project->cover }}" alt="{{ $project->title }}" title="{{ $project->title }}" />
                                        <a href="{{ url('/projects/' . $project->getFilename()) }}" class="ajax-page-load"></a>
                                    </div>

                                    <i class="far fa-file-alt"></i>
                                    <h4 class="name">{{ $project->title }}</h4>
                                    <span class="category">@foreach($project->tags as $tag) {{ $tag }},  @endforeach </span>
                                </figure>
                                <!-- /Portfolio Item 1 -->
                        @endswitch
                        @endforeach
                </div>
                <!-- /Portfolio Content -->
            </div>
        </div>
    </div>
@endsection
