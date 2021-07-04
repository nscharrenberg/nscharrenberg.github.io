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
                <div class="timeline-item clearfix">
                    <h5 class="item-period ">2009</h5>
                    <span class="item-company">University of Studies</span>
                    <h4 class="item-title">UI Design</h4>
                    <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                </div>

                <div class="timeline-item clearfix">
                    <h5 class="item-period ">2008</h5>
                    <span class="item-company">University of Studies</span>
                    <h4 class="item-title">Graphic Design</h4>
                    <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                </div>

                <div class="timeline-item clearfix">
                    <h5 class="item-period ">2007</h5>
                    <span class="item-company">University of Studies</span>
                    <h4 class="item-title">Frontend Development</h4>
                    <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis ante.</p>
                </div>

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
