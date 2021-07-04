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
@endsection
