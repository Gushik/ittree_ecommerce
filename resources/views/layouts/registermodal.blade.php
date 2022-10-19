<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Реєстрація') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="pe-7s-close" aria-hidden="true"></span>
                </button>
            </div>
            <form method="POST" action="{{ route('register') }}">
                <div class="modal-body">
                    <div class="register-form-container">
                        <div class="register-form">

                            @csrf
                            <label for="name">{{ __("Ім'я та Прізвище") }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                                    </span>
                                @enderror
                            </div>


                            <label for="email">{{ __('Адреса електронної пошти') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                                    </span>
                                @enderror
                            </div>


                            <label for="password">{{ __('Пароль') }}</label>

                            <div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                                    </span>
                                @enderror
                            </div>


                            <label for="password-confirm">{{ __('Підтвердіть пароль') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="modal-footer">
                                <div class="button-box">
                                    <button type="submit" class="default-btn floatright">
                                        {{ __('Зареєструватись') }}
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
