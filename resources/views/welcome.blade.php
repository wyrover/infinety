<!DOCTYPE html>
<html>
<head>
    <title>Web Design Sheffield - InfinetyWeb</title>
    <meta name="description" content="Infinety are a web development company based in Sheffield Shout Yorkshire, providing websites and web apps.">
    <!--Import materialize.css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    @include('partials.header')

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
                        <h5 class="center">User Friendly Website</h5>

                        <p class="light">Focusing on the design and usability of a website is key in every sector, we use our experience and tech know how to make this happen. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="medium material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">With our in-house custom built platform, updating your website has never been easier. From creating new pages, editing existing pages along with uploading images, videos or whatever you need on your website. Plus run a blog from the same system without having to use an alternative source.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
</div>
<div class="clients">
    <div class="container">
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
                <div class="col s7 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/balfour-beatty.png" alt="Balfour Beatty" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s7 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/synergypal.png" alt="Synergy Pal" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s7 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/mittar.png" alt="Mittar" class="circle responsive-img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s7 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/crmple.png" alt="CRM:PLE" class="circle responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s7 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="/images/agency247.png" alt="Agency 247" class="circle responsive-img">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
 </div>
</div>

<div class="section white">
    <div class="row container">
        <h4 class="header">Our Work</h4>
        <div class="row">
            <div class="col s12 m4">
                <img src="/images/wscc.png" class="responsive-img">
            </div>

            <div class="col s12 m4">
                <img src="/images/mittar-site.png" class="responsive-img">
            </div>

            <div class="col s12 m4">
                <img src="/images/crmple-site.png" class="responsive-img">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <img src="/images/avoin-site.png" class="responsive-img">
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

</body>
</html>