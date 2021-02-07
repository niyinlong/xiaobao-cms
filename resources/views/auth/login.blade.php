@extends('layouts.login')

@section('content')

<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-xs4 layui-col-xs-offset4">
            <form method="POST" action="{{ route('login') }}"> 
                @csrf
                <div class="layui-form-item">
                    <label for="email"  class="layui-form-label">{{ __('E-Mail Address') }}</label>
                    <div class="layui-input-block">
                        <input id="email" type="email" class="layui-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="password" class="layui-form-label">{{ __('Password') }}</label>
                    <div class="layui-input-block">
                        <input id="password" type="password" class="layui-input" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label" for="remember"> {{ __('Remember Me') }}</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                    </div>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn" type="submit">{{ __('Login') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
