@extends('layouts.app')

@section('login-content')
<!-- START: Main Content-->
<div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
        <div class="col-12">

            <form method="POST" action="{{ route('login') }}" class="row row-eq-height lockscreen  mt-5 mb-5">
                @csrf
                <div class="lock-image col-12 col-sm-5"></div>
                <div class="login-form col-12 col-sm-7">
                    <div class="form-group mb-3">
                        <label for="emailaddress">
                            <span style="text-align: center; font-size: 10px; position: relative; top:8px; ">{{
                                __('Adresse e-mail') }}</span>
                        </label>
                        <input style="border-left: none; border-right: none;  border-top: none;  "
                            class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"
                            name="email" placeholder="  Tapez adresse e-mail" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group mb-3">
                        <label for="password">
                            <span style="text-align: center; font-size: 10px; position: relative; top:8px;">{{ __('Mot
                                de passe') }}
                            </span></label>
                        <input style="border-left: none; border-right: none;  border-top: none;  "
                            class="form-control @error('password') is-invalid @enderror" type="password" id="password"
                            name="password" placeholder=" Tapez votre mot de passe" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox" style="text-align: center;">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                            <label class="custom-control-label" for="checkbox-signin" style="font-size: 10px; ">
                                <span style="position: relative; top:3px;">Souviens-toi de moi</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button class="btn btn-success col-md-12" type="submit">
                            <i class="icon-login" style="margin-right: 12px; "></i>Se connecter </button>
                    </div>

                    <div class="mt-3" style="text-align: center;">
                        <a href="mailto:name@email.com" target="blank">
                            <center style="font-size: 10px;">
                                Vous n'avez pas de compte ? <a href="/register"
                                    style=" text-decoration: underline; ">Créer un compte</a>
                            </center>
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- END: Content-->
@endsection
