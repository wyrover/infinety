<!DOCTYPE html>
<html>
<head>
    <title>Materialize Demo</title>
    <meta name="description" content="">
    <!--Import materialize.css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<nav class="dark-blue" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="images/infinety.png" alt="Infinety - Web Design Sheffield" width="150" class="responsive-img"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Web Apps</a></li>
        </ul>

        <!-- Mobile Nav -->
        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Web Apps</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>


    <div class="col s12">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="https://ununsplash.imgix.net/photo-1421757295538-9c80958e75b0?fit=crop&fm=jpg&h=700&q=90&w=1050"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>User Friendly Websites</h3>
                        <h5 class="light grey-text text-lighten-3">Custom user friendly websites to<br />help you and your business</h5>
                    </div>
                </li>

                <li>
                    <img src="https://images.unsplash.com/photo-1433838552652-f9a46b332c40?fit=crop&fm=jpg&h=700&q=90&w=1050"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Endless Possibilities</h3>
                        <h5 class="light grey-text text-lighten-3">Creative websites that work for you</h5>
                    </div>
                </li>

                {{--<li>--}}
                    {{--<img src="https://images.unsplash.com/24/DSC02021.JPG?q=80&fm=jpg&s=b8ca2293b871e61f5a090f1974f58543"> <!-- random image -->--}}
                    {{--<div class="caption center-align">--}}
                        {{--<h3></h3>--}}
                        {{--<h5 class="light grey-text text-lighten-3"></h5>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>


<div class="container content">
    <div class="row">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="medium material-icons">done</i></h2>
                        <h5 class="center">Web Development</h5>

                        <p class="light">Websites of today should be easy to use, look great and work across all devices and that's what we do best. Using our experience we combine design and development to give you a website which you and your customers will adore.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="medium material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="medium material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">With our in-house custom built platform, updating your website has never been easier. From creating new pages, editing existing pages along with uploading images, videos or whatever you need on your website. Plus you can run a blog from the same system without having to use an alternative source.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row content">
        <h4>Our Clients</h4>
        <div class="col s6">
            <p class="light">
                We’ve worked with some awesome clients over the years, from well known brands to small start-up companies,
                including construction companies, SaaS products, online Clothing &amp; Survey maintenance.<br />All of which have their own demands and requirements.
                Working with each and every one has been a pure pleasure, so what ever the size of your business, get in touch today and see how we can help you.
            </p>
        </div>
        <div class="col s6">
            <div class="row">
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/balfour-beatty.png" alt="Balfour Beatty" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/synergypal.png" alt="Synergy Pal" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/mittar.png" alt="Mittar" class="circle responsive-img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/crmple.png" alt="CRM:PLE" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/agency247.png" alt="Agency 247" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/avoin.png" alt="Avoin Maa Surveys" class="circle responsive-img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="divider"></div>
</div>


{{--<div class="parallax-container">--}}
    {{--<div class="parallax"><img src="https://images.unsplash.com/24/DSC02021.JPG?q=80&fm=jpg&s=b8ca2293b871e61f5a090f1974f58543"></div>--}}
{{--</div>--}}
<div class="section white">
    <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>


<footer class="page-footer dark-blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Who are we?</h5>
                <p class="grey-text text-lighten-4">
                    We provide website development & design for everyone, from startup businesses to fully established businesses.
                    Each website/application we create is built from scratch and to the highest of standards.
                </p>
            </div>

            <div class="col l3 s12">
                <ul>
                    <li><a class="white-text" href=""><i class="fa fa-twitter fa-2x"></i> </a></li>
                    <li><a class="white-text" href="#!"><i class="fa fa-linkedin fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col l8">
                    &copy; {!! date('Y') !!} Infinety Web Ltd<br />
                    all rights reserved
                </div>
                <div class="col l4 right-align">
                    Made by Infinety
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Import jQuery and materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.materialboxed').materialbox();
        $('.slider').slider({
            indicators: false
        });
        $('.parallax').parallax();
    });
</script>
</body>
</html>