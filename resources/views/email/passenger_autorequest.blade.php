Hola {{$user->name}}!
<br>
Te informamos que {{$from->name}} se ha subido a tu viaje hacia {{$trip->to_town}}.
<br>
<!-- Click <a href={{$url}}>aquí</a> para ver tus solicitudes.
<br> -->
Saludos!
<br>
{{$name_app}}
<br>
<br>
<small style="color: red;">Si no deseás recibir más este tipo de correo, <a href="{{ $domain }}/desuscribirme?email={{ $user->email }}">hacé click aquí</a>.</small>