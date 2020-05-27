<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('dashboard.partials.head')
    <title>EJI Villarreal - @yield('title')</title>
</head>
<body>
<div id="app" class="wrapper">
    @include('dashboard.partials.sidebar')

    <div class="main-panel">
{{--        @include('dashboard.partials.header')--}}

        <div class="content">
            @yield('content')
        </div>

{{--        @include('dashboard.partials.footer')--}}
    </div>

    @include('dashboard.partials.scripts')
    @yield('javascript')
</div>
</body>
</html>
