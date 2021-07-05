---
extends: _layouts.page
title: Blog
subtitle: My Logbook
pagination:
    collection: posts
    perPage: 1
---

@section('content')
    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <div class="blog-masonry two-columns clearfix">
                @foreach ($pagination->items as $post)
                    <!-- Blog Post 1 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
{{--                                    <div class="category">--}}
{{--                                        <a href="#" title="View all posts in WordPress">WordPress</a>--}}
{{--                                    </div>--}}
                                    <a href="{{ url('/blog/' . $post->getFilename()) }}">
                                        <img src="{{ $post->cover }}" alt="{{ $post->title }}" title="{{ $post->title }}" />
                                        <div class="mask"></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <div class="post-date">{{ $post->getDate('posted_at')->format('F, Y') }}</div>
                                    <a href="{{ url('/blog/' . $post->getFilename()) }}">
                                        <h4 class="blog-item-title">{{ $post->title }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                    @if ($post != $pagination->items->last())
                        <hr class="border-b my-6">
                @endif
            @endforeach
            </div>

{{--            <a class="btn btn-primary" href="#">See All Posts</a>--}}
            @if ($pagination->pages->count() > 1)
                <div class="ajax-page-nav">
                    <div class="nav-item ajax-page-prev-next">
                        @if ($previous = $pagination->previous)
                            <a title="Previous Page" href="{{ url($previous) }}"><i class="lnr lnr-chevron-left"></i></a>
                        @endif

                            @foreach ($pagination->pages as $pageNumber => $path)
                                <a title="Go to Page {{ $pageNumber }}" href="{{ url($path) }}"><i>{{ $pageNumber }}</i></a>
                            @endforeach

                            @if ($next = $pagination->next)
                                <a title="Next Page" href="{{ url($next) }}"><i class="lnr lnr-chevron-right"></i></a>
                            @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
