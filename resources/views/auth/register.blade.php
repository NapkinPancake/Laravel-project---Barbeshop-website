@extends('layouts.app')

@section('content')
<div class="custom-container">
    <div class="log-reg-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <ul>
                <li>
                    <label for="name" class="">{{ __('Name') }}</label>
                    <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                     @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password"> 
                </li>
                <li>
                    <button type="submit" class="custom-btn">
                        {{ __('Register') }}
                    </button>
                </li>
            </ul>
        </form>
    </div>
</div>
@endsection
