{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/login.css">
</head>

    <title>Email</title>
    <body>
     
        <h1 style="text-align:centered">{{$details['title']}}</h1> 
        <p style="text-align:centered">{{$details['body']}}</p> 
        <p>Done</p>  
    


        <br>
        
        <div class="center"><input class="center" type="submit" value="Login"><br></div>
        
        <br>
        </form>
</body> 
</html>
      


