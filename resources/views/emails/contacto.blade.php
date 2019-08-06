@component('mail::message')
# Contacto

Datos de Contacto

Nombre: {{ $request->nombre }}  
Apellido Paterno: {{ $request->appat }}  
Apellido Materno: {{ $request->apmat }}  
Direccion: {{ $request->direccion }}  
Telefono: {{ $request->telefono }}  
Email: {{ $request->email }}  
Comentario:  
{{ $request->comentario }}

Saludos,<br>
{{ config('app.name') }}
@endcomponent
