<!doctype html>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>
    <div id="app">
        @include('partials.sidebar')

        <div id="wrapper">
            @include('flash.messages')

            @yield('content')
        </div>

        @include('partials.footer')
        @include('partials.scripts')
    </div>
</body>
</html>
