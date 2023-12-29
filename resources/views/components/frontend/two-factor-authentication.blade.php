<div>
    @error('code')
        <x-utils.alert type="danger">
            {{ $message }}
        </x-utils.alert>
    @enderror

    <form wire:submit.prevent="validateCode" class="form-horizontal">
        <div class="input-group row mb-3">
            <label for="code" class="col-md-4 col-form-label text-md-right">@lang('Authorization Code')</label>

            <div class="col-md-8">
                <input
                    type="text"
                    id="code"
                    wire:model.lazy="code"
                    minlength="6"
                    class="form-control"
                    placeholder="{{ __('Authorization Code') }}"
                    required
                    autofocus />
            </div>
        </div><!--input-group-->

        <div class="input-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button class="btn btn-primary" type="submit">@lang('Enable Two Factor Authentication')</button>
            </div>
        </div><!--input-group-->
</form>
</div>
