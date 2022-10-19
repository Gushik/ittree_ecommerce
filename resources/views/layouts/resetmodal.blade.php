<div class="modal fade" id="EmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Відновлення паролю') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="pe-7s-close" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="card-body">
                    @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <form method="POST" action="{{ route('password.email') }}">
                        <div class="modal-body">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Адреса електронної пошти') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="default-btn floatright">
                                                {{ __('Відправити посилання') }}
                            </button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
</div>
