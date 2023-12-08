@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row  py-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <form class="p-4 p-md-5" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-wrap p-0">
                                <p class="w-100 text-center">— Or Sign In With —</p>
                            </div>
                            <h3>{{ __('Log in') }}</h3>
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="floatingInput" value="{{ old('email') }}"
                                placeholder="name@example.com" autocomplete="email" autofocus>
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" autocomplete="current-password" id="floatingPassword"
                                    placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}> Remember me
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                            <hr class="my-4">
                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <small class="p-0">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </small>
                            
                            
                        </form>
                        
                        <div class="social d-flex text-center">
                            <a href="https://www.instagram.com/z4l_di/" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Instagram</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                        </div>
                        
                    </div>      
                </div> 
            </div>
        </div>
    </div>
    
    
    @endsection
    