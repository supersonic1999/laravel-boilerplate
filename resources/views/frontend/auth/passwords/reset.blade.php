@extends('frontend.layouts.app')

@section('title', __('Reset Password'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Reset Password')
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.password.update')">
                            <div class="row gy-3">
                                <input type="hidden" name="token" value="{{ $token }}" />

                                <div class="col col-md-12 input-group">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('E-mail Address')</label>

                                    <div class="col-md-8">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ $email ?? old('email') }}" maxlength="255" required autofocus autocomplete="email" />
                                    </div>
                                </div><!--form-group-->

                                <div class="col col-md-12 input-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Password')</label>

                                    <div class="col-md-8">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="password" />
                                    </div>
                                </div><!--form-group-->

                                <div class="col col-md-12 input-group">
                                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">@lang('Password Confirmation')</label>

                                    <div class="col-md-8">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
                                    </div>
                                </div><!--form-group-->

                                <div class="col col-md-12 input-group mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button class="btn btn-primary" type="submit">@lang('Reset Password')</button>
                                    </div>
                                </div><!--form-group-->
                            </div>
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
@endsection
