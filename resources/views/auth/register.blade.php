@extends('layouts.app')

@section('content')

    <!-- Form -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <section>
                <h2>Registro</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row gtr-uniform">

                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                   class="@error('name') is-invalid @enderror" required autocomplete="name" autofocus
                                   placeholder="Nombre"/>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="lastName" class="@error('lastName') is-invalid @enderror"
                                   id="lastName" value="{{ old('lastName') }}" required autocomplete="name"
                                   placeholder="Apellido"/>

                            @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" value="{{ old('email') }}" required autocomplete="email"
                                   placeholder="Email"/>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="password" id="password"
                                   class="form-control @error('password') is-invalid @enderror" value="" required
                                   autocomplete="new-password" placeholder="Contrasena"/>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <input type="password" name="password_confirmation" id="password_confirmation" value=""  required autocomplete="new-password" placeholder="Confirmar Contrasena" />
                        </div>

                        <div class="col-12">
                            <ul class="actions stacked">
                                <li>
                                    <button type="submit" class="primary fit">
                                        {{ __('Registrar') }}
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

