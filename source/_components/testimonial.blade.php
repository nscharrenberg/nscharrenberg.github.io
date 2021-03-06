<!-- Testimonial 1 -->
<div class="testimonial-item">
    <!-- Testimonial Content -->
    <div class="testimonial-content">
        <!-- Picture -->
        <div class="testimonial-picture">
            <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}"/>
        </div>
        <!-- /Picture -->

        <!-- Testimonial Text -->
        <div class="testimonial-text">
            <p>{!! $testimonial->text !!}</p>
        </div>
        <!-- /Testimonial Text -->

        <!-- Testimonial author information -->
        <div class="testimonial-author-info">
            <h5 class="testimonial-author">{{ $testimonial->name }}</h5>
            <p class="testimonial-firm">{{ $testimonial->job_title }}</p>
        </div>
        <!-- /Testimonial author information -->

        <div class="testimonial-icon">
            <i class="fa fa-quote-left"></i>
        </div>

        <div class="testimonial-icon-big">
            <i class="fa fa-quote-right"></i>
        </div>
    </div>
    <!-- /Testimonial Content -->
</div>
<!-- End of Testimonial 1 -->