@extends('layout.static')
@section('content')
<!DOCTYPE html>
<html>
    <title>Edit</title>
    <head>
    <link rel="stylesheet" href="/login.css">
</head>
<body>

    <h1>Change Password</h1>


    <form action="{{route('updatepass.submit')}}" Method="post">
        {{csrf_field()}}
       
        <div class="center">
 
 <label>Old Password  :</label><input type="password"  name="oldpass"><br> 
</div>
@error('oldpass')
<span>{{$message}}</span><br>
    @enderror 
    <div class="center">
    <label>New Password  :</label><input type="password"  name="newpass"><br>
</div>    
  
@error('newpass')
<span>{{$message}}</span><br>
    @enderror 

    <br>
    <div class="center">
  <label>Confirm Password</label> <input type="password"  name="confpass">
  </div>            
  @error('confpass')
<span>{{$message}}</span><br>
    @enderror 
<br>
<input type="submit" value="Changepass">

</form>
</body>
</html>
@endsection