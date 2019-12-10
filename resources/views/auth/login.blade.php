@extends('layouts.app')

@section('content')
<div class="custom-container">
    <div class="log-reg-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <ul>
                <li>
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>
                <li>
                    <label for="password" class="">{{ __('Password') }}</label>
                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </li>
                <li>
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class=""  for="remember">{{ __('Remember Me') }}</label>
                </li>
                <li>
                    <button type="submit" class="custom-btn">
                    {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </li>
            </ul>
        </form>
    </div>
</div>
@endsection
