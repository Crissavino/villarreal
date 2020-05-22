<h1>Contacto recibido desde la web EJI Villarreal</h1>

<br>Nombre de la persona que contacta: <br> <strong>{{ $fullName }}</strong> <br>
<br>Telefono de la persona que contacta: <br> <strong> {{ $contactTel }} </strong> <br>
<br>Motivo de su consulta: <br> <strong> {{$motivoConsulta}} </strong> <br>
<br>Tipo de consulta: <br>
@foreach ($tiposContacto as $tipoContacto)
    <strong> {{$tipoContacto}} </strong> <br>
@endforeach
<br>Consulta: <br> <p>{{ $body }}</p> <br>