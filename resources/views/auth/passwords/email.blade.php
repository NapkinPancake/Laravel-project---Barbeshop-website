@extends('layouts.app')

@section('content')
<div class="custom-container">
    <div class="log-reg-form">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                        <button type="submit" class="custom-btn">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </li>
                </ul>
        </form>
    </div>
</div>
@endsection
