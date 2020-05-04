@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <section id="three" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h2>Contactate con nosotros</h2>
                <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
                <div class="style1">
                    <section>
                        <form method="post" action="{{route('recibirContacto')}}">
                            @METHOD('POST')
                            @csrf
                            <div class="fields">
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
                                    <label for="tel">Telefono</label>
                                    <input type="text" name="tel" id="tel" required/>
                                </div>
                                <div class="field">
                                    <label for="message">Mensaje</label>
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

