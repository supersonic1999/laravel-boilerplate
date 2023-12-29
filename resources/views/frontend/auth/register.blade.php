@extends('frontend.layouts.app')

@section('title', __('Register'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Register')
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.register')">
                            <div class="input-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Name')</label>

                                <div class="col-md-8">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
                                </div>
                            </div><!--input-group-->

                            <div class="input-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('E-mail Address')</label>

                                <div class="col-md-8">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autocomplete="email" />
                                </div>
                            </div><!--input-group-->

                            <div class="input-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Password')</label>

                                <div class="col-md-8">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
                                </div>
                            </div><!--input-group-->

                            <div class="input-group row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Password Confirmation')</label>

                                <div class="col-md-8">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
                                </div>
                            </div><!--input-group-->

                            <div class="input-group row mb-3">
                                <div class="col-md-8 offset-md-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input" required>
                                        <label class="form-check-label" for="terms">
                                            @lang('I agree to the') <a href="{{ route('frontend.pages.terms') }}" target="_blank">@lang('Terms & Conditions')</a>
                                        </label>
                                    </div>
                                </div>
                            </div><!--input-group-->

                            @if(config('boilerplate.access.captcha.registration'))
                                <div class="input-group row mb-3">
                                        @captcha
                                        <input type="hidden" name="captcha_status" value="true" />
                                </div><!--row-->
                            @endif

                            <div class="input-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-primary" type="submit">@lang('Register')</button>
                                </div>
                            </div><!--input-group-->
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
@endsection
