{{ Form::bsText('name', __('general.name'), 'name') }}

{{ Form::bsText('icon', __('general.icon'), 'icon') }}

@include('components.form.errors')

<div class="form-group">
    <button class="btn btn-success" type="submit">
        <i class="fa fa-save m-r-5"></i>
        <span>{{ __('general.save') }}</span>
    </button>

    <a href="{{ route('admin.quote-categories.index') }}" class="btn btn-danger">
        <i class="fa fa-times m-r-5"></i>
        <span>{{ __('general.cancel') }}</span>
    </a>
</div>
