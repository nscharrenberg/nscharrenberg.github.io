<div class="timeline-item clearfix">
    <h5 class="item-period current">{{ $education->getDate('start_date')->format('F, Y') }} - {{ !is_null($education->until_date) ? $education->getDate('until_date')->format('F, Y') : 'present' }}</h5>
    <span class="item-company">{{ $education->institute }}</span>
    <h4 class="item-title">{{ $education->study }}</h4>
    <p>{{ $education->description }}</p>
</div>