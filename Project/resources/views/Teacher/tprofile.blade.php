@extends('layout.static')
@section('content')
<!DOCTYPE html>
<html>
   
    <title>Supervisor</title>
    <head>
    <link rel="stylesheet" href="/login.css">
</head>
    <body>
        <h1>Welcome </h1>
        <div>
        <ul>
  
  
</ul>
</div>
<div>
  <a href="/sectiona">sectionA  </a><a href="/sectiond">sectionD  </a><a href="/sectionk">sectionK  </a>
</div>

     <h2>Add New<h2>   
<select name="powermenu" id="pmu">
  <option value="Student">Student</option>
  <option value="Section">Sections</option>
  </select>
<input type="submit" name="submit"><br>
<h3>My sections<h3>

</body>
</html>
@endsection