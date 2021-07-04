<div class="fw-package-wrap col-md-4 {{ $plan->highlighted ? 'highlight-col' : '' }}">
    <div class="fw-package">
        <div class="fw-heading-row">
            <span>{{ $plan->title }}</span>
        </div>

        <div class="fw-pricing-row">
            <span>{!! $plan->currency !!}{{ $plan->price }}</span>
            <small>{{ $plan->frequency }}</small>
        </div>

        <div class="fw-button-row">
            <a href="{{ $plan->button->link }}" target="_self" class="btn btn-secondary">{{ $plan->button->text }}</a>
        </div>

        @foreach($plan->services as $service)
        <div class="fw-default-row">{{ $service }}</div>
        @endforeach
    </div>
</div>