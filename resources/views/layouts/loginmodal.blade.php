@extends('layouts.resetmodal')

<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="pe-7s-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog modal-quickview-width" role="document">
        <div class="modal-content">
            <div class="modal-body-left">
                <div class="qwick-view">
                    <div class="login">
                        <div class="card-header">{{ __('Вхід') }}</div>
                        <div class="login-form-container">
                            <div class="login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="button-box">
                                        <div class="login-toggle-btn">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label>{{ __("запам'ятати") }}</label>
                                            @if (Route::has('password.request'))
                                                <a class="animate-right" href="#" data-target="#EmailModal" data-toggle="modal" title="Login">
                                                    <p>Забули пароль?</p>
                                                </a>
                                            @endif
                                        </div>
                                        <button type="submit" class="default-btn floatright">
                                            {{ __('Вхід') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
