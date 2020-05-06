<!doctype html>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    <title>EJI Villarreal - @yield('title')</title>
</head>
<body>
    <div id="app">
        @include('partials.sidebar')

        <div id="wrapper">
            @yield('content')

            <div class="contactsDiv">
                <a href="https://wa.me/544119656?text=Me%20gustaria%20hacerles%20una%20concuslta" target="_blank" style="border-bottom: 0">
                    <img class="whatsAppIcon" src="{{asset('images/whatsapp.png')}}" alt="">
                </a>

                <a href="{{route('contacto')}}" style="border-bottom: 0">
                    <img class="whatsAppIcon" src="{{asset('images/mail.png')}}" alt="">
                </a>
            </div>
        </div>



        @include('partials.footer')
        @include('partials.scripts')
        @yield('javascript')
    </div>
</body>
</html>
