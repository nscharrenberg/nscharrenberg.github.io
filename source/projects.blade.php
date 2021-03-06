---
extends: _layouts.page
title: Portfolio
subtitle: My Works
---

@php
    if(is_null($page->tags)) {
        $page->tags = ['all'];
    } else {
        array_push($page->tags, 'all');
    }
@endphp

@section('content')
    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <!-- Portfolio Content -->
            <div id="portfolio_content_q" class="portfolio-content">

                <ul class="portfolio-filters">
                    <li class="active">
                        <a class="filter btn btn-sm btn-link" data-group="all">All</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="software_engineering">Software Engineering</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="web_development">Web Development</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="frontend">Frontend</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="backend">Backend</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="cloud">Cloud</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="blockchain">Blockchain</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="data_science">Data Science</a>
                    </li>

                    <li>
                        <a class="filter btn btn-sm btn-link" data-group="artificial_intelligence">Artificial Intelligence</a>
                    </li>
                </ul>


                <!-- Portfolio Grid -->
                <div class="portfolio-grid three-columns shuffle">

                    @foreach($projects as $project)
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
