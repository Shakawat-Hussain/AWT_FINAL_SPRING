@extends('layout.static')
@section('content')
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>SId</td>
<td>name</td>
<td>CGPA</td>
<td>Course</td>
<td>Section</td>
<td>Department</td>
<td>Teacher_ID</td>


</tr>
@foreach ($students as $s)
<tr>
<td>{{ $s->Sid }}</td>
<td>{{ $s->student_name }}</td>
<td>{{ $s->cgpa }}</td>
<td>{{ $s->course }}</td>
<td>{{ $s->section }}</td>
<td>{{ $s->dept }}</td>
<td>{{ $s->Tid }}</td>

</tr>
@endforeach
</table>
</body>
</html>
<a href="/profile">Go Back</a>
@endsection