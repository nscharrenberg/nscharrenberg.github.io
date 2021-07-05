---
extends: _layouts.page
title: Contact
subtitle: Get in Touch
---

@section('content')
    <div class="row">
        <div class=" col-xs-12 col-sm-6 ">
            <div id="info_list_1" class="info-list-w-icon">
                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="lnr lnr-home"></i>
                    </div>
                    <div class="ci-text">
                        <h4>Venray</h4>
                        <p>I'm also available in Maastricht or Eindhoven (Remote prefered)</p>
                    </div>
                </div>

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="lnr lnr-smartphone"></i>
                    </div>
                    <div class="ci-text">
                        <h4>Hidden</h4>
                        <p>Contact me through Linked In to get my phonenumber for further contact</p>
                    </div>
                </div>

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="lnr lnr-envelope"></i>
                    </div>
                    <div class="ci-text">
                        <h4 class="email_obf">neddiH</h4>
                        <p>Contact me through Linked In to get my email for further contact</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" col-xs-12 col-sm-6 ">
            <div id="info_list_1" class="info-list-w-icon">
                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="ci-text">
                        <h4><a class="text-white" target="_blank" href="https://linkedin.com/in/{{ $page->portfolio->socials->github }}">{{ $page->portfolio->socials->linkedin }}</a></h4>
                        <p></p>
                    </div>
                </div>

                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="ci-text">
                        <h4><a class="text-white" target="_blank" href="https://github.com/{{ $page->portfolio->socials->github }}">{{ $page->portfolio->socials->github }}</a></h4>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection