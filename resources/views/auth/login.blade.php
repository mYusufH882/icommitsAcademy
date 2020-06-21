@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Content
    ================================================== -->
    <div uk-height-viewport class="uk-flex uk-flex-middle" style="background-image: url('/assets/images/texture.svg');">
        <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded">
            <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-grey" uk-grid>

                <!-- column one -->
                <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
                    <i class=" uil-graduation-hat icon-large"></i>
                    <h3 class="mb-4"> Icommits Academy</h3>
                    <p>Memperluas kesempatan untuk belajar.</p>
                </div>

              <!-- column two -->
                    <div class="uk-card-default p-5 rounded">
                        <div class="mb-4 uk-text-center">
                            <h3 class="mb-0"> Selamat Datang </h3>
                            <p class="my-2">Masuk Acount Icommits Academy.</p>
                        </div>

                    <form method="POST" action="{{ route('login') }}" class="uk-child-width-1-1 uk-grid-small" uk-grid>
                        @csrf

                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Email (Untuk Login ID)*</label>
                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-mail"></i>
                                    </span>
                                    <input id="email" class="uk-input form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Password*</label>
                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-lock"></i>
                                    </span>
                                    <input id="password" class="uk-input form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success transition-3d-hover ml-3"> Login</button>
                    </form>
                </div><!--  End column two -->

            </div>
        </div>
    </div>

    <!-- Content -End
    ================================================== -->
@endsection
