@extends('layouts.app')

@section('content')

    <!-- Form -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <section>
                <h2>Resetear Contrasena</h2>
                <form method="POST" action="{{ route('password.email') }}">
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
                            <ul class="actions stacked">
                                <li>
                                    <button type="submit" class="primary fit">
                                        {{ __('Enviar link al mail') }}
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
