<h1>Contacto recibido desde la web EJI Villarreal</h1>

<br> <h2>Nombre de la persona que contacta:</h2>  <strong>{{ $fullName }}</strong> <br>
<br> <h2>Telefono de la persona que contacta:</h2>  <strong> {{ $contactTel }} </strong> <br>
<br> <h2>Motivo de su consulta:</h2>  <strong> {{$motivoConsulta}} </strong> <br>
<br> <h2>Tipo de consulta:</h2>
@foreach ($tiposContacto as $tipoContacto)
    <strong> {{$tipoContacto}} </strong> <br>
@endforeach
<br> <h2>Consulta:</h2> <p> <strong>{{ $body }}</strong> </p> <br>