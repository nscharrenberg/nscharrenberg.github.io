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

    <div class="row">
        <div class=" col-xs-12 col-sm-12 ">
            <div class="p-20"></div>

            <div class="block-title">
                <h2>Certificates</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-xs-12 col-sm-6 ">
            <a href="../../../wp/leven-wp/wp-content/uploads/2019/11/1.jpg" class="lightbox">
                <div class="certificate-item clearfix">
                    <div class="certi-logo">
                        <img src="img/clients/client-7.png" alt="logo">
                    </div>

                    <div class="certi-content">
                        <div class="certi-title">
                            <h4>Psyhology of Intertnation Design</h4>
                        </div>

                        <div class="certi-id">
                            <span>Membership ID: XXXX</span>
                        </div>
                        <div class="certi-date">
                            <span>19 April 2018</span>
                        </div>

                        <div class="certi-company">
                            <span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
