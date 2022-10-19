@extends('layouts.resetmodal')
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Вхід') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="pe-7s-close" aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="{{ route('login') }}">
                <div class="modal-body">
                    @csrf
                    <input id="email" placeholder="email" type="email"
                           class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                    <input id="password" placeholder="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                    <div class="button-box">
                        <div class="login-toggle-btn">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label>{{ __("запам'ятати") }}</label>
                            @if (Route::has('password.request'))
                                <a class="animate-right" href="#" data-target="#EmailModal" data-toggle="modal"
                                   title="Login">
                                    <p>Забули пароль?</p>
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="default-btn floatright">
                        {{ __('Вхід') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

