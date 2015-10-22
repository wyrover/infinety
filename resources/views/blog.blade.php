<!DOCTYPE html>
<html>
<head>
    <title>InfinetyWeb - Web Development Blog</title>
    <meta name="description" content="Website development blog - InfinetyWeb">
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
@include('partials.header')

<div class="container content">
    <div class="row">
        <div class="section">
            <h4>Blog</h4>
            @foreach($posts as $post)
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card hoverable">
                            <div class="card-content">
                                <span class="card-title"><a href="/blog/{!! $post->title !!}">{!! ucwords($post->title) !!}</a></span>
                                <p>{!! nl2br($post->content) !!}</p>
                            </div>
                            <div class="card-action">
                                <small>Posted {!! date('d/m/y', strtotime($post->created_at)) !!}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {!! $posts->render() !!}
        </div>
    </div>
    <div class="divider"></div>
</div>
<div class="container"><br /></div>
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

@include('partials.footer')
</body>
</html>