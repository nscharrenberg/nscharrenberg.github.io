<footer class="site-footer clearfix">
    <div class="footer-social">
        <ul class="footer-social-links">
            <li>
                <a href="https://www.linkedin.com/in/{{ $page->portfolio->socials->linkedin }}" target="_blank">Linked In</a>
            </li>

            <li>
                <a href="https://github.com/{{ $page->portfolio->socials->github }}" target="_blank">Github</a>
            </li>

            <li>
                <a href="{{ $page->portfolio->socials->website }}" target="_blank">nscharrenberg.nl</a>
            </li>
        </ul>
    </div>

    <div class="footer-copyrights">
        <p>{{ $page->site->footer_text }}</p>
    </div>
</footer>