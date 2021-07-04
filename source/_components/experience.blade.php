<div class="timeline-item clearfix">
    <h5 class="item-period current">{{ $experience->getDate('start_date')->format('F, Y') }} - {{ !is_null($experience->until_date) ? $experience->getDate('until_date')->format('F, Y') : 'present' }}</h5>
    <span class="item-company">{{ $experience->company }}</span>
    <h4 class="item-title"><a class="text-white" href="{{ url('/experience/' . $experience->getFilename()) }}">{{ $experience->position }}</a></h4>
    <p>{{ $experience->description }}</p>
</div>