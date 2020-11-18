@extends('user.main')

@section('content')
 <!-- Register Section Begin -->
 <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>{{ __('Login Admin') }}</h2>
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <div class="group-input">
<<<<<<< HEAD
                                <label for="username">{{ __('username') }}</label>
                                <input id="username" type="input" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
=======
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
>>>>>>> 594946ac7ca7ae577e65bfaaf41e3f1b6fdc82a5
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="group-input">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="group-input gi-check">
                                <div class="gi-more">

                                <label for="remember">
                                    {{ __('Remember Me') }}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>                              
                                </label>
                                @if (Route::has('password.request'))
                                     <a class="forget-pass" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                    </a>
                                 @endif
                                </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">
                            {{ __('Login') }}
                        </button>
                        </div>
                    </form>
                    <div class="switch-login">
                            <a href="{{ route('register') }}" class="or-login">Or Create An Account</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
