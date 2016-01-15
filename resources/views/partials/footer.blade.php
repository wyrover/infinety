<footer class="page-footer dark-blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Web Design Sheffield</h5>
                <p class="grey-text text-lighten-4">
                    We provide web design and development for everyone, from startup to fully established businesses.
                    Each website we create is built from scratch to the highest of standards.
                </p>
            </div>

            <div class="col l3 s12">
                <ul>
                    <li>&nbsp;</li>
                </ul>
            </div>

            <div class="col l3 s12">
                <h5 class="white-text">Our Latest Tweets</h5>
                <a class="twitter-timeline" href="https://twitter.com/infinety_web" data-widget-id="687760029018140672" data-chrome="transparent noheader noborders nofooter"></a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col l8">
                    &copy; {!! date('Y') !!} Infinety Web Ltd&nbsp;&bull;&nbsp;
                    all rights reserved
                </div>
                <div class="col l4 right-align">
                    Made by Infinety
                </div>
            </div>
        </div>
    </div>
</footer>
<p>Directory of <a href='http://www.rotherham.co.uk/web-development/'>Rotherham Web Development</a> - <a href='http://www.rotherham.co.uk/'> Rotherham</a></p>
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

