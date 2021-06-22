<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Email</title>
</head>
<body>
    <h2>Welcome to the site {{$brand['brand_name']}}</h2>
    <br/>
    Your registered email-id is {{$brand['email']}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{ url('brand/verify', $brand['remember_token'])}}">Verify Email</a>
</body>
</html>
