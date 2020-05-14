<div class="sidebar" data-color="blue" data-image="{{asset('dashboard/assets/img/sidebar-4.jpg')}}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{route('dashboard-index')}}">--}}
{{--                    <i class="nc-icon nc-chart-pie-35"></i>--}}
{{--                    <p>Dashboard</p>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li>
                <a class="nav-link" href="{{route('dashboard-blog')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Blog</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="">
                    {{-- <a class="nav-link" href="{{route('dashboard-user')}}"> --}}
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Usuarios</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="">
                    <i class="nc-icon nc-credit-card"></i>
                    <p>Pagos</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('index')}}">
                    <i class="nc-icon nc-align-center"></i>
                    <p>Ir a la webs</p>
                </a>
            </li>

        </ul>
    </div>
</div>
