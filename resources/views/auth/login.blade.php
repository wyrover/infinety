<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CMS Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- stylesheets -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- javascript/jQuery -->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
<![endif]-->

</head>
<body>

<div class="container">
    <div class="row" style="margin: 130px 0px 0px 0px; display: flex; align-items: center; justify-content: center;">
        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-9">
            <form method="POST" action="/auth/login" class="form-horizontal">
            {!! csrf_field() !!}

                <div class="form-group">
                    <div class="col-sm-3">Email</div>
                    <div class="col-lg-7">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3">Password</div>
                    <div class="col-lg-7">
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-3">
                     <button class="btn btn-success">Login</button>
                  </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>