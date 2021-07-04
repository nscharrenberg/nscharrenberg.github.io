@extends('_layouts.main')

@section('child')
    <div class="page-title">
        <h1>{{ $page->title }}</h1>
        <div class="page-subtitle">
            <h4>{{ $page->subtitle }}</h4>
        </div>
    </div>

    <div id="content" class="page-content site-content single-post" role="main">
        @yield('content')
    </div>
@endsection