@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <section id="three" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                @if(count($errors) !== 0)
                    <div class="alert alert-danger" role="alert">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endif
                <h2>Contacto</h2>
                <p>
                    Envianos tu consulta, a la brevedad nos pondremos en contacto
                </p>
                <div class="style1">
                    <section>
                        <form method="post" onsubmit="submitForm(this)" id="contactForm"
                              action="{{route('recibirContacto')}}">
                            @METHOD('POST')
                            @csrf
                            <div class="fields gtr-uniform">
                                <div class="field half">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" required/>
                                </div>
                                <div class="field half">
                                    <label for="lastName">Apellido</label>
                                    <input type="text" name="lastName" id="lastName" required/>
                                </div>
                                <div class="field half">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" required/>
                                </div>
                                <div class="field half">
                                    <label class="d-inline-block" for="tel">Telefono</label>
                                    <label class="d-inline-block text-muted" for="tel">(opcional)</label>
                                    <input type="text" name="tel" id="tel"/>
                                </div>
                                <div class="field">
                                    <label for="">Motivo de su consulta</label>

                                    <input type="radio" id="personal" name="motivoConsulta" value="Personal">
                                    <label for="personal">Personal</label>

                                    <input type="radio" id="empresarial" name="motivoConsulta" value="Empresarial">
                                    <label for="empresarial">Empresarial</label>
                                </div>
                                <div class="field">
                                    <label for="">Tipo de consulta</label>

                                    @foreach ($contactTypes as $contactType)
                                        <input type="checkbox" class="contactType" id="{{$contactType->title}}"
                                               name="contactType[]" value="{{$contactType->title}}">
                                        <label for="{{$contactType->title}}">{{$contactType->title}}</label>
                                    @endforeach


                                </div>
                                <div class="field">
                                    <label class="d-inline-block" for="message">Escriba su consulta</label>
                                    <label class="d-inline-block text-muted" for="">(Mencionar si posee algun tipo de
                                        documentación)</label>
                                    <textarea name="message" id="message" required rows="5"></textarea>
                                </div>
                            </div>
                            <ul class="actions stacked">
                                <li><a href="" class="button submit primary fit">Enviar mensaje</a></li>
                            </ul>
                        </form>
                    </section>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/contacto.js')}}"></script>
@stop

