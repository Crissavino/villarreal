@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1 class="major">Nosotros</h1>
                <p class="d-inline-block"><span class="image right"><img style="max-width: 200px"
                                                                         src="{{asset('images/nosotros.png')}}"
                                                                         alt=""/></span>Dr. Luis Lujan
                    Villarreal, Abogado con mas de 30 años en el ejercicio de la profesión. Graduado en
                    la Universidad Nacional de La Plata Especialista en derecho penal, civil y comercial. Actualmente
                    lidera el derecho empresarial y societario conjuntamente con la gestión de negocios. <br>
                    Dr. Fernando Villarreal, abogado con mas de 8 años en el ejercicio de la profesión graduado en la
                    Universidad Nacional de La Plata.
                    Actualmente coordina la cartera del estudio conjuntamente con la procuración judicial en todas las
                    áreas. <br>
                    Nuestro estudio, situado en la ciudad de La Plata, Provincia de Buenos Aires, se encuentra orientado
                    a dar soluciones jurídicas y financieras a nuestros clientes confiándonos estos más que sus
                    problemas legales. <br>
                    Es por eso que el tiempo y dedicación nos avalas haciendo de nuestra profesión un estilo de vida
                    llevando a cabo la misma con responsabilidad y sobre todo, con JUSTICIA.
                </p>

                <h1 class="major">Nuestras Oficinas</h1>
                <div class="box alt">
                    <div class="row gtr-uniform">
                        <div class="col-sm-4">
                            <span style="overflow: hidden; max-height: 335px;" class="image fit">
                                <img class="imagen" style="transform: translateY(-80px);" src="{{asset('images/oficina1.jpeg')}}"
                                     alt=""/>
                            </span>
                        </div>
                        <div class="col-sm-4" data-aos="flip-left">
                            <span style="overflow: hidden; max-height: 335px;" class="image fit">
                                <img class="imagen" style="transform: translateY(-80px);" src="{{asset('images/oficina2.jpeg')}}"
                                     alt=""/>
                            </span>
                        </div>
                        <div class="col-sm-4" style=" overflow: hidden" data-aos="flip-left">
                            <span style="overflow: hidden; max-height: 335px;" class="image fit">
                                <img class="imagen" style="width: 130%" src="{{asset('images/oficina3.jpeg')}}" alt=""/>
                            </span>
                        </div>
                    </div>
                </div>

                <h1 class="major">Nuestros Colaboradores</h1>
                <p>
                    Estudio contable de la Cdra. Marcela Guarino
                </p>
                <p>
                    Estudio Contable del Cdor. Andrés Laure
                </p>
                <p>
                    Médico deportologo Dr. Rafael Agüero
                </p>
                <p>
                    Escribanía Sisterna.
                </p>
                <p>
                    Dr. Corbaliza Martin.
                </p>
                <p>
                    Dr. Alejandro Chiodini.
                </p>
                <p>
                    Constructora e inmobiliaria Cuellar de Alberto Cuellar
                </p>
            </div>
        </section>

    </div>
@endsection

<script>
  setTimeout( () => {
    let imagen = document.querySelectorAll('.imagen');

    console.log(imagen);

    imagen.forEach((image) => {
      image.addEventListener('mouseover', () => {
        image.classList.add('animate__pulse');
        image.classList.add('animate__animated');
      });

      image.addEventListener('mouseout', () => {
        image.classList.remove('animate__pulse');
        image.classList.remove('animate__animated');
      });
    });
  }, 1000)
</script>