<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - InfinetyWeb</title>
    <meta name="description" content="Web Design Sheffield - InfinetyWeb Contact us, hello@infinety.co.uk">
    <!--Import materialize.css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
@include('partials.header')

<div class="container content">
    <div class="row">
        <div class="section">
            <h4>Get in touch</h4>
            <p>If you require any of our services or want to chat about your next project, please get in touch below.</p>
            <div class="divider"></div><br /><br />
            {!! Form::open(['url' => 'contact', 'class' => 'form-horizontal']) !!}

                <div class="form-group">
                    {!! $errors->first('name', '<span class="red-text">:message</span>') !!}
                    <div class="col-sm-2">Name</div>
                    <div class="col-lg-6">
                        <input type="text" name="name" class="form-control" value="{!! old('name') !!}">
                    </div>
                </div>

                <div class="form-group">
                    {!! $errors->first('email', '<span class="red-text">:message</span>') !!}
                    <div class="col-sm-2">Email</div>
                    <div class="col-lg-6">
                        <input type="text" name="email" class="form-control" value="{!! old('email') !!}">
                    </div>
                </div>

                <div class="form-group">
                    {!! $errors->first('body', '<span class="red-text">:message</span>') !!}
                    <div class="col-sm-2">Message</div>
                    <div class="col-lg-5">
                        <textarea name="body" class="materialize-textarea" rows="10" length="250">{!! old('body') !!}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-lg-5">
                        <div class="g-recaptcha" data-sitekey="6LeStAsTAAAAAPrMukC9MHsWNaCaw2WNKxUg7c-R"></div>
                    </div>
                </div>
                <br />
                <button class="btn waves-effect waves-light" type="submit">Send
                    <i class="material-icons">send</i>
                </button>



            {!! Form::close() !!}<br />

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

@include('partials.footer')
</body>
</html>