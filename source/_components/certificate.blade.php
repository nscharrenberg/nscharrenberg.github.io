<div class=" col-xs-12 col-sm-6 ">
    <a href="{{ url('/certificate/' . $certificate->getFilename()) }}">
        <div class="certificate-item clearfix">
            <div class="certi-logo">
                <img src="{{ $certificate->image }}" alt="logo">
            </div>

            <div class="certi-content">
                <div class="certi-title">
                    <h4>{{ $certificate->title }}</h4>
                </div>

                <div class="certi-id">
                    <span>{{ $certificate->subtitle }}</span>
                </div>
                <div class="certi-date">
                    <span>{{ $certificate->getDate('date')->format('F, Y') }}</span>
                </div>

                <div class="certi-company">
                    <span>{{ $certificate->company }}</span>
                </div>
            </div>
        </div>
    </a>
</div>