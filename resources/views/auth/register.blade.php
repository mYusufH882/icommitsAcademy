@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div uk-height-viewport class="uk-flex uk-flex-middle" style="background-image: url('/assets/images/texture.svg');">
    <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded">
        <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-grey" uk-grid>

            <!-- column one -->
            <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
                <i class=" uil-graduation-hat icon-large"></i>
                <h3 class="mb-4">Icommits Academy</h3>
                <p>Memperluas kesempatan untuk belajar. </p>
            </div>

            <!-- column two -->
                <div class="uk-card-default p-5 rounded">
                    <div class="mb-4 uk-text-center">
                        <h3 class="mb-0"> Create new Account</h3>
                    </div>

                <form method="POST" action="{{ route('register') }}" class="uk-child-width-1-1 uk-grid-small" uk-grid>
                    @csrf

                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Nama Lengkap* </label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                                <input id="nama" class="uk-input form-control @error('nama') is-invalid  @enderror" type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap">
                            
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Email (Untuk Login ID)*</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                                <input id="email" class="uk-input form-control @error('email') is-invalid  @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                
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
                            <label class="uk-form-label"> Nomor HandPhone* </label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                                </span>
                                <input id="telepon" class="uk-input form-control @error('telepon') is-invalid  @enderror" type="text" name="telepon" value="{{ old('telepon') }}" placeholder="Nomor Telepon">
                            
                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Password*</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input id="password" class="uk-input form-control @error('password') is-invalid  @enderror" type="password" name="password" placeholder="Kata Sandi" autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Confirm password*</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input id="password-confirm" class="uk-input" type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" autocomplete="new-password">
                            
                                @error('cpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success transition-3d-hover ml-3"> Daftar</button>
                </form>
            </div>
            <!--  End column two -->

        </div>
    </div>
</div>
@endsection
