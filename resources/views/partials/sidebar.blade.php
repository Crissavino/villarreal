<section id="sidebar">
    <div class="marca">
        <span class="text-wrapper">
            <span style="font-family: 'Crimson Text', serif;" class="letters letters-left">V</span><br>
            <span style="margin-left: 70px; font-size: 60%; font-family: 'Crimson Text', serif;" class="letters ampersand">&amp;</span><br>
            <span style="margin-left: 150px; font-family: 'Crimson Text', serif;" class="letters letters-right">V</span>
        </span>
    </div>

    <div class="inner">

        <nav style="margin-top: 20px">
            <ul>
                <li class="link"><a style="font-size: 12px;" href="{{route('index')}}">Bienvenido</a></li>
                <li class="link"><a style="font-size: 12px;" onclick="goToIndexTwo()" href="{{route('index')}}#two">Quienes somos?</a></li>
                <li class="link"><a style="font-size: 12px;" onclick="goToIndexOne()" href="{{route('index')}}#one">Últimas noticias</a></li>
                <li class="link"><a style="font-size: 12px;" href="{{route('contacto')}}">Contactanos</a></li>
                @auth
                    @if (auth()->user()->isAdmin)
                        <li class="link"><a style="font-size: 12px;" href="{{route('dashboard-blog')}}">Pefil</a></li>
                    @else
                        <li class="link"><a style="font-size: 12px;" href="{{route('perfil')}}">Pefil</a></li>
                    @endif
                @else
                    <li class="link"><a style="font-size: 12px;" href="{{route('login')}}">Pefil</a></li>
                @endauth
            </ul>
        </nav>
    </div>

    <a href="javascript:void(0);" class="hamburgerMenuIcon" onclick="myFunction()">
        <i class="fa fa-bars"> MENU</i>
    </a>
    <div class="inner" id="hamburgerMenu">
        <nav id="hamburgerNav">
            <ul id="hamburgerUL">
                <li id="hamburgerLI"><a href="{{route('index')}}">Bienvenido</a></li>
                <li id="hamburgerLI"><a onclick="goToIndexTwo()" href="{{route('index')}}#two">Quienes somos?</a>
                </li>
                <li id="hamburgerLI"><a onclick="goToIndexOne()" href="{{route('index')}}#one">Últimas noticias</a>
                </li>
                <li id="hamburgerLI"><a href="{{route('contacto')}}">Contactanos</a></li>
                @auth
                    @if (auth()->user()->isAdmin)
                        <li id="hamburgerLI"><a href="{{route('dashboard-blog')}}">Pefil</a></li>
                    @else
                        <li id="hamburgerLI"><a href="{{route('perfil')}}">Pefil</a></li>
                    @endif
                @else
                    <li id="hamburgerLI"><a href="{{route('login')}}">Pefil</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</section>

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>

      anime.timeline({loop: false}).add({
        targets: '.marca .line',
        opacity: [0.5, 1],
        scaleX: [0, 1],
        easing: 'easeInOutExpo',
        duration: 1000,
      }).add({
        targets: '.marca .ampersand',
        opacity: [0, 1],
        scaleY: [0.5, 1],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=800',
      }).add({
        targets: '.marca .letters-left',
        opacity: [0, 1],
        translateX: ['2em', 0],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=300',
      }).add({
        targets: '.marca .letters-right',
        opacity: [0, 1],
        translateX: ['-2em', 0],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=800',
      });
      setInterval(() => {
        anime.timeline({loop: false}).add({
          targets: '.marca .line',
          opacity: [0.5, 1],
          scaleX: [0, 1],
          easing: 'easeInOutExpo',
          duration: 1000,
        }).add({
          targets: '.marca .ampersand',
          opacity: [0, 1],
          scaleY: [0.5, 1],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=800',
        }).add({
          targets: '.marca .letters-left',
          opacity: [0, 1],
          translateX: ['2em', 0],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=300',
        }).add({
          targets: '.marca .letters-right',
          opacity: [0, 1],
          translateX: ['-2em', 0],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=800',
        });
      }, 4000);

      anime.timeline({loop: false}).add({
        targets: '.marcaMobile .line',
        opacity: [0.5, 1],
        scaleX: [0, 1],
        easing: 'easeInOutExpo',
        duration: 1000,
      }).add({
        targets: '.marcaMobile .ampersand',
        opacity: [0, 1],
        scaleY: [0.5, 1],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=800',
      }).add({
        targets: '.marcaMobile .letters-left',
        opacity: [0, 1],
        translateX: ['2em', 0],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=300',
      }).add({
        targets: '.marcaMobile .letters-right',
        opacity: [0, 1],
        translateX: ['-2em', 0],
        easing: 'easeInOutExpo',
        duration: 800,
        offset: '-=800',
      });
      setInterval( () => {
        anime.timeline({loop: false}).add({
          targets: '.marcaMobile .line',
          opacity: [0.5, 1],
          scaleX: [0, 1],
          easing: 'easeInOutExpo',
          duration: 1000,
        }).add({
          targets: '.marcaMobile .ampersand',
          opacity: [0, 1],
          scaleY: [0.5, 1],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=800',
        }).add({
          targets: '.marcaMobile .letters-left',
          opacity: [0, 1],
          translateX: ['2em', 0],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=300',
        }).add({
          targets: '.marcaMobile .letters-right',
          opacity: [0, 1],
          translateX: ['-2em', 0],
          easing: 'easeInOutExpo',
          duration: 800,
          offset: '-=800',
        });
      }, 4000);

    </script>

    <script>
      let links = document.querySelectorAll('.link');

      links.forEach((link) => {
        link.addEventListener('mouseover', () => {
          link.classList.add('animate__pulse');
          link.classList.add('animate__animated');
        });

        link.addEventListener('mouseout', () => {
          link.classList.remove('animate__pulse');
          link.classList.remove('animate__animated');
        });
      });
    </script>
@endsection