@component('mail::panel')
<center>APP OFICIOS</center>
@endcomponent

@component('mail::message')
<strong>Email: </strong>{{ $email }}
<br>
<strong>Password: </strong>{{ $password }}

Gracias,<br>
APP OFICIOS
@endcomponent
