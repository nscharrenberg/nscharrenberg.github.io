<div class=" col-xs-12 col-sm-6 ">
    <div class="block-title">
        <h2>{{ $skill->title }}</h2>
    </div>

    <div id="skills_{{$skill->title}}" class="skills-info skills-first-style">
        @foreach($skill->percentages as $percentage)
            <!-- Skill 6 -->
            <div class="clearfix">
                <h4>{{ $percentage->title }}</h4>
                <div class="skill-value">{{ $percentage->value }}%</div>
            </div>
            <div id="skill_{{ $page->slugify($skill->title) }}_{{ $page->slugify($percentage->title) }}" data-value="{{ $percentage->value }}" class="skill-container">
                <div class="skill-percentage"></div>
            </div>
            <!-- /Skill 6 -->
        @endforeach
    </div>
</div>