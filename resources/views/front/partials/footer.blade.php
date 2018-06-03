<footer class="footer" data-background-color="black">
    <div class="container d-flex justify-content-center">
        <nav>
            <ul>
                <li>
                    <a href="/">{{ config('app.name', 'Laravel') }}</a>
                </li>
                <li>
                    <a href="/blog">{{ __('Blog') }}</a>
                </li>
                <li>
                    <a href="/contact">{{ __('Contact') }}</a>
                </li>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> {{ __('Designed by Enantiomer1 ') }} 
                </div>
            </ul>
        </nav>
    </div>
</footer>
