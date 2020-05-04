<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Bienvenido</a></li>
                <li><a href="{{route('index')}}#one">Quienes somos?</a></li>
                <li><a href="{{route('index')}}#two">Ultimos articulos</a></li>
{{--                <li><a href="{{route('contacto')}}">Contactanos</a></li>--}}
                <li id="hamburgerLI"><a href="#">Contactanos</a></li>
                @auth
                    <li id="hamburgerLI"><a href="{{route('login')}}">Pefil</a></li>
                @else
{{--                    <li id="hamburgerLI"><a href="{{route('register')}}">Pefil</a></li>--}}
                    <li id="hamburgerLI"><a href="#">Pefil</a></li>
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
                <li id="hamburgerLI"><a href="{{route('index')}}#one">Quienes somos?</a></li>
                <li id="hamburgerLI"><a href="{{route('index')}}#two">Ultimos articulos</a></li>
{{--                <li id="hamburgerLI"><a href="{{route('contacto')}}">Contactanos</a></li>--}}
                <li id="hamburgerLI"><a href="#">Contactanos</a></li>
                @auth
                    <li id="hamburgerLI"><a href="{{route('login')}}">Pefil</a></li>
                @else
{{--                    <li id="hamburgerLI"><a href="{{route('register')}}">Pefil</a></li>--}}
                    <li id="hamburgerLI"><a href="#">Pefil</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</section>