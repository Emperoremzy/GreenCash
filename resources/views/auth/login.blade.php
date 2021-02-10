@extends('layouts.master')

@section('content')

<div class="container-fluid " id="fade" >
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-5" id="authcards">
               
                <br><br><br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                <br>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-success">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="">{{ __('Password') }}</label>
                                <br>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-success">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="form-check col-sm-12 col-md-6 col-lg-6">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    @if (Route::has('password.request'))
                                        <a class="text-white" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif  
                                    </div>
                            </div>
                        </div>
                      <br>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn" style="background-color:transparent;border:1px solid #FFA500" id="banner-button" >
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <br><br><br>
            </div>
        </div>
    </div>
</div>

@endsection
