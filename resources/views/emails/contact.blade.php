<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- stylesheets -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="col-sm-7 col-md-7 col-lg-6">
        <h4>Hi Lee,</h4>
        <p>You have received a contact form request.<br />Here are the details</p>
        <ul class="list-unstyled">
            <li>Name: {!! $name !!}</li>
            <li>Email: {!! $email !!}</li>
            <li>Message: {!! $body !!}</li>
        </ul>

    </div>
</div>

</body>
</html>