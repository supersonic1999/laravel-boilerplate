<x-forms.patch :action="route('frontend.auth.password.change')">
    <div class="row gy-3">
        <div class="col col-md-12 input-group">
            <label for="current_password" class="col-md-3 col-form-label text-md-right">@lang('Current Password')</label>

            <div class="col-md-9">
                <input type="password" name="current_password" class="form-control" placeholder="{{ __('Current Password') }}" maxlength="100" required autofocus />
            </div>
        </div><!--form-group-->

        <div class="col col-md-12 input-group">
            <label for="password" class="col-md-3 col-form-label text-md-right">@lang('New Password')</label>

            <div class="col-md-9">
                <input type="password" name="password" class="form-control" placeholder="{{ __('New Password') }}" maxlength="100" required />
            </div>
        </div><!--form-group-->

        <div class="col col-md-12 input-group">
            <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">@lang('New Password Confirmation')</label>

            <div class="col-md-9">
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('New Password Confirmation') }}" maxlength="100" required />
            </div>
        </div><!--form-group-->

        <div class="col col-md-12 input-group mb-0">
            <div class="col-md-12 text-right">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Password')</button>
            </div>
        </div><!--form-group-->
    </div>
</x-forms.patch>
