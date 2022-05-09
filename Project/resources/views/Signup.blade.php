@component('mail::message')
Sign up here {{$name}}
@component('mail::button',['url' => 'https://portal.aiub.edu/'])
Send OTP
@endcomponent
@endcomponent

