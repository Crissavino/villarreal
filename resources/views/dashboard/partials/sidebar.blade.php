<div class="sidebar" data-color="blue" data-image="{{asset('dashboard/assets/img/sidebar-4.jpg')}}">
    <div class="sidebar-wrapper">
{{--        <div class="logo"></div>--}}
        <ul class="nav">
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
            <hr style="background-color: white">
            <li>
                <form class="text-center" method="post" action="{{route('logout')}}">
                    @csrf
                    @method('POST')
                    <button class="btn btn-fill btn-danger" type="submit">Cerrar sesion</button>
                </form>
            </li>

        </ul>
    </div>
</div>
