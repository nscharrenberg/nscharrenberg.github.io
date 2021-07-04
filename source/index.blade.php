@extends('_layouts.home')

@section('content')
    @if(count($page->site->what_i_do) > 0 && !$page->site->hidden->what_i_do)
    <!-- Services -->
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="p-50"></div>

            <div class="block-title">
                <h2>What I Do</h2>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($page->site->what_i_do as $widRow)
        <div class="col-xs-12 col-sm-6">
            <div class="info-list-w-icon">
                @foreach($widRow as $widCol)
                <div class="info-block-w-icon">
                    <div class="ci-icon">
                        <i class="{{ $widCol->icon_class }}"></i>
                    </div>

                    <div class="ci-text">
                        <h4>{{ $widCol->title }}</h4>
                        <p>{{ $widCol->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <!-- /Services -->
    @endif

    @if(count($page->site->testimonials) > 0 && !$page->site->hidden->testimonials || count($page->site->clients) > 0 && !$page->site->hidden->clients)
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="p-20"></div>

            @if(count($page->site->testimonials) > 0 && !$page->site->hidden->testimonials)
            <!-- Testimonials -->
            <div class="block-title">
                <h2>Testimonials</h2>
            </div>

            <div id="testimonials_1" class="testimonials owl-carousel" data-mobile-items="1" data-tablet-items="2" data-items="2">
                @foreach($page->site->testimonials as $testimonial)
                    @include('_components.testimonial', $testimonial)
                @endforeach
            </div>
            <!-- /Testimonials -->

            <div class="p-40"></div>
            @endif

            @if(count($page->site->clients) > 0 && !$page->site->hidden->clients)
            <!-- Clients Slider -->
            <div class="block-title">
                <h2>Clients & Employers</h2>
            </div>

            <div id="clients_1" class="clients owl-carousel" data-mobile-items="1" data-tablet-items="3" data-items="6">
                @foreach($page->site->clients as $client)
                <div class="client-block">
                    <a href="{{ $client->link }}" target="_blank" title="{{ $client->name }}">
                        <img src="{{ $client->image }}" alt="{{ $client->name }}">
                    </a>
                </div>
                    @endforeach
            </div>
            <!-- /Clients Slider -->

            <div class="p-40"></div>
            @endif
        </div>
    </div>
    @endif

    @if(count($page->portfolio->facts) > 0 && !$page->site->hidden->facts)
        <!-- Fun Facts -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h2>Fun Facts</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($page->portfolio->facts as $fact)
                <div class="col-xs-12 col-sm-3">
                    <div class="lm-info-block gray-default">
                        <i class="{{ $fact->icon_class }}"></i>
                        <h4>{{ $fact->title }}</h4>
                        <span class="lm-info-block-value">{{ $fact->value }}</span>
                        <span class="lm-info-block-text">{{ $fact->text }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /Fun Facts -->

        <div class="p-40"></div>
    @endif
@endsection
