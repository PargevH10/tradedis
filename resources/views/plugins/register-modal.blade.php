<!-- Register Modal -->
<div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal_dialog" role="document">
        <div class="modal-content">
            <div class="col">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <img src="{{ asset('img/banner.png') }}" class="form_bg_img img-fluid">
            <div class="modal-body modal_body">
                <div class="text-center">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" width="57">
                    <h2 class="registerModal">
                        {{ __('Welcome to Register') }}
                    </h2>
                </div>
                <form id="register_form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label class="_form_label" for="register_email">{{ __('E-Mail Address') }}</label>
                        <input id="register_email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label class="_form_label" for="tuid">TUID</label>
                        <input id="tuid" type="text" class="form-control" name="tuid" value="{{ old('tuid') }}" required autocomplete="tuid" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="_form_label" for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                        <div class="input-group position-relative">
{{--                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">--}}
                            <div class="input-group-prepend">
                                <span class="toggle-password">
{{--                                    <img src="{{ asset('img/icons/eye-off.png') }}" class="password_img img-fluid">--}}
{{--                                    <img src="{{ asset('img/icons/eye.png') }}" class="password_img1 img-fluid d-none">--}}
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="_form_label" for="confirmPassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <div class="input-group position-relative">
{{--                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                            <div class="input-group-prepend">
                                <span class="toggle-confirmPassword">
{{--                                    <img src="{{ asset('img/icons/eye-off.png') }}" class="confirmPassword_img img-fluid">--}}
{{--                                    <img src="{{ asset('img/icons/eye.png') }}" class="confirmPassword_img1 img-fluid d-none">--}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check d-flex align-items-center">
                        <input type="checkbox" class="form-check-input" name="term_of_service" id="term_of_service_register">
                        <label class="form-check-label" for="term_of_service_register">I agree to the “Term of Service”</label>
                    </div>
                    <div class="register_btn_container">
                        <button id="register_button" type="button" class="btn_gradient nav-link nav_link">{{ __('Register') }}</button>
                        <button type="button" class="btn btn_login nav-link nav_link" id="login_modal" data-toggle="modal" data-target="#loginModal">{{ __('Log In') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
