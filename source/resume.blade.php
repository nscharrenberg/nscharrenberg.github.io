---
extends: _layouts.page
title: Resume
subtitle: 6 years of experience
---

@section('content')
    <div class="row">

        <div class=" col-xs-12 col-sm-6 ">
            <div class="block-title">
                <h2>Education</h2>
            </div>

            <div id="timeline_1" class="timeline clearfix">
                @foreach($educations as $education)
                    @include('_components.education', $education)
                @endforeach
            </div>
        </div>

        <div class=" col-xs-12 col-sm-6 ">
            <div class="block-title">
                <h2>Experience</h2>
            </div>

            <div id="timeline_2" class="timeline clearfix">
                @foreach($experiences as $experience)
                    @include('_components.experience', $experience)
                @endforeach
            </div>
        </div>
    </div>

    @if(count($certificates) > 0)
    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <div class="p-20"></div>

            <div class="block-title">
                <h2>Certificates</h2>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($certificates as $certificate)
            @include('_components.certificate', $certificate)
        @endforeach
    </div>
    @endif

    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <div class="p-40"></div>
        </div>
    </div>

    <div class="row">
        @foreach($page->portfolio->skills as $skill)
            @include('_components.skill', $skill)
        @endforeach
    </div>
@endsection
