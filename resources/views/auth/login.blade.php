@extends('layouts.app')

@section('content')

    <!-- Form -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <section>
                <h2>Inicia sesion</h2>
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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="padding-left: 10px; border-bottom: none !important;" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contrasena?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li>
                                    <button type="submit" class="primary">
                                        {{ __('Iniciar sesion') }}
                                    </button>
                                </li>
                            </ul>
                        </div>

                    </div>
                </form>
            </section>
        </div>
    </section>

@endsection
