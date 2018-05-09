<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2> {{$user['name']}} ask for join MobiliSense community</h2>
<br/>
His registered email-id is {{$user['email']}} , Please click on the below link to approve his account
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</body>
 
</html>