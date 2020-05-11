<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Bienvenido</a></li>
                <li><a href="{{route('index')}}#one">Ultimos articulos</a></li>
                <li><a href="{{route('index')}}#two">Quienes somos?</a></li>
                <li><a href="{{route('contacto')}}">Contactanos</a></li>
                @auth
                    <li id="hamburgerLI"><a href="{{route('perfil')}}">Pefil</a></li>
                @else
                    <li id="hamburgerLI"><a href="{{route('login')}}">Pefil</a></li>
                @endauth
            </ul>
        </nav>
    </div>

    <a href="javascript:void(0);" class="hamburgerMenuIcon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <div class="inner" id="hamburgerMenu">
        <nav id="hamburgerNav">
            <ul id="hamburgerUL">
                <li id="hamburgerLI"><a href="{{route('index')}}">Bienvenido</a></li>
                <li id="hamburgerLI"><a href="{{route('index')}}#one">Ultimos articulos</a></li>
                <li id="hamburgerLI"><a href="{{route('index')}}#two">Quienes somos?</a></li>
                <li id="hamburgerLI"><a href="{{route('contacto')}}">Contactanos</a></li>
                @auth
                    <li id="hamburgerLI"><a href="{{route('perfil')}}">Pefil</a></li>
                @else
                    <li id="hamburgerLI"><a href="{{route('login')}}">Pefil</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</section>