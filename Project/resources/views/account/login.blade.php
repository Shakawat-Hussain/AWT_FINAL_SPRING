<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/login.css">
</head>

    <title>Sign IN Form</title>
    <body>
       <form action="{{route('login.submit')}}"   Method="post">
               {{@csrf_field()}}
               <centre>
        <h1 style="text-align:centered">Sign In</h1>
    
<table style="border:1px solid black;margin-left:auto;margin-right:auto;">
        <tr><th>Email</th><th>Password</th></tr>
        <tr><td><input type="text" id="email" name="email"  placeholder="Enter email" onkeyup="username()"></td><td><input type="password" id="password" name="password"  placeholder="Enter password" onkeyup="Checkpassword()"></td></tr>
        <tr><td class="td color"><p id="error1"></p></td><td class="td color"><p id="error2"></p></td></tr>

</table>

        <br>
        
        <div class="center"><input class="center" type="submit" value="Login"><br></div>
        
        <br>
        <br>
       <div class="center"> <h2>New here? register now</h2><a href="/signup">Teacher registration</a><br>
        
</div>
</form>



<!--<form action="{{route('login.submit')}}" method="post" >

    <div class="col-md-6">

    <h2> Student Login </h2>

        <label> Student Name </label>

        <input type="text" name="uname" class="form-control" placeholder="Enter your name" >

        <label> Student Name </label>

        <input type="password" name="password" class="form-control" placeholder="Enter your password" >

        <br>

        <input type="submit" class="btn-btn-primary"  value="Login" >

</div><-->




</form>
<script src="/validatelogin.js"></script>
</body>
</html>