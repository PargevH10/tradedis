<!-- Register Modal -->
<div class="modal fade register-modal" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                        {{ __('Welcome to Back') }}
                    </h2>
                </div>
                <form id="login_form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label class="_form_label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        <span class="credential_error" style="color: red;">Credentials Is Wrong.</span>
                    </div>
                    <div class="form-group">
                        <label class="_form_label" for="login_password">Password</label>
                        <div class="input-group position-relative">
                            <input type="password" class="form-control" name="password" id="login_password" required>
                            <div class="input-group-prepend">
                                <span class="login-toggle-password">
                                    <img src="{{ asset('img/icons/eye-off.png') }}" class="login_password_img img-fluid">
                                    <img src="{{ asset('img/icons/eye.png') }}" class="login_password_img1 img-fluid d-none">
                                </span>
                            </div>
                        </div>

                    </div>
{{--                    <div class="form-check d-flex align-items-center">--}}
{{--                        <input type="checkbox" class="form-check-input" name="term_of_service_login" id="term_of_service_login">--}}
{{--                        <label class="form-check-label" for="term_of_service_login">I agree to the “Term of Service”</label>--}}
{{--                    </div>--}}
                    <div class="register_btn_container">
                        <button id="login_button" type="button" class="btn_gradient nav-link nav_link">{{ __('Log In') }}</button>
                        <button type="button" class="btn btn_login nav-link nav_link" id="register_modal" data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>

            </div>
        </div>
    </div>
</div>

