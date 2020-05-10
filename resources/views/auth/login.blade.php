@extends('layouts.app')

@section('content')

    <!-- Form -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <section>
                <h2 style="display: inline-block">Inicia sesion</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row gtr-uniform">

                        <div class="col-12">
                            <input type="email" name="email" class="@error('email') is-invalid @enderror"
                                   id="email" value="{{ old('email') }}" required autocomplete="email"
                                   placeholder="Email" autofocus/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" name="password" id="password"
                                   class="@error('password') is-invalid @enderror" value="" required
                                   autocomplete="new-password" placeholder="Contrasena"/>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group row w-100">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="actions stacked">
                                <li>
                                    <button type="submit" class="primary fit">
                                        {{ __('Iniciar sesion') }}
                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </form>

                <h3 style="display: inline-block; margin-left: 20px; margin-bottom: 20px;">
                    No tiene cuenta? <a style="border-bottom: 0;" href="{{route('register')}}">Crea una</a>
                </h3>
                @if (Route::has('password.request'))
                    <h4 style="display: block; margin-left: 20px">
                        Olvidaste tu contrasena?
                        <a style="border-bottom: 0;" href="{{ route('password.request') }}">
                            {{ __('Recuperala') }}
                        </a>
                    </h4>
                @endif
            </section>
        </div>
    </section>

@endsection
