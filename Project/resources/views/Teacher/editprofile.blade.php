@extends('layout.static')
@section('content')
<!DOCTYPE html>
<html>
    <title>Edit</title>
    <head>
    <link rel="stylesheet" href="/login.css">
</head>
<body>

    <h1>Editprofile</h1>

<form action="{{route('editprofile.submit')}}" Method="post">
        {{csrf_field()}}
       
        <div class=center>
   <label>First Name  :</label><input type="text"  name="first_name"><br>
 
</div>
  
    <div class=center>
    
    <label>Last Name  :</label><input type="text"  name="last_name"><br>
</div>    
  
     
    <div class=center>
   
    <label>MobileNo</label><input type="text"  name="mobileno"><br>
</div>   

    <br>
    <div class=center>
  
  <label>Department</label> <input type="text"  name="Department" ><br>
  </div>            

<br>
<div class=center>
<input type="submit" value="Editprofile">
</div>

</form>
</body>
</html>
@endsection