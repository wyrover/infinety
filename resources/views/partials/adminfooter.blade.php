<footer class="page-footer dark-blue">
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col l8">
                    &copy; {!! date('Y') !!} Infinety
                </div>

            </div>
        </div>
    </div>
</footer>

<!--Import jQuery and materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/sweet.js"></script>
@include('flash')
<script>
    $(document).ready(function(){
        // Responsive Nav
        $(".button-collapse").sideNav();
        // Material box
        $('.materialboxed').materialbox();
        // Slider
        $('.slider').slider({
            indicators: false
        });
        // Parallax
        $('.parallax').parallax();
    });
</script>
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66856664-1', 'auto');
    ga('send', 'pageview');

</script>

