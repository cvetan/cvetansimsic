{{ Form::bsText('first_name', __('general.first_name'), 'first-name') }}

{{ Form::bsText('last_name', __('general.last_name'), 'last-name') }}

{{ Form::bsText('username', __('general.username'), 'username') }}

{{ Form::bsText('email', __('general.email'), 'email') }}

{{ Form::bsPassword('password', __('general.password'), 'password') }}

{{ Form::bsPassword('password_confirmation', __('general.password_confirmation'), 'password-confirmation') }}

{{ Form::bsSwitchery('is_admin', __('users.is_admin'), 'is-admin', '#167CCB', isset($user) ? $user->is_admin : false) }}

<div class="form-group">
    <ul class="nav nav-tabs">
        @foreach(LaravelLocalization::getSupportedLocales() as $code => $lang)
            <li role="presentation">
                <a href="#tab-{{ $code }}" data-toggle="tab" aria-expanded="true">{{ $lang['name'] }}</a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content">
        @foreach(LaravelLocalization::getSupportedLanguagesKeys() as $code)
            <div class="tab-pane fade" id="tab-{{ $code }}">
                {{ Form::bsText("title_tag_{$code}", __('general.title_tag'), "title-tag-{$code}", isset($user) ? $user->translate($code)->title_tag : null) }}

                {{ Form::bsTextarea("description_tag_{$code}", __('general.description_tag'), "description-tag-{$code}", isset($user) ? $user->translate($code)->description_tag : null) }}
            </div>
        @endforeach
    </div>
</div>

@include('components.form.errors')

<div class="form-group">
    <button class="btn btn-success" type="submit">
        <i class="fa fa-save m-r-5"></i>
        <span>{{ __('general.save') }}</span>
    </button>

    <a href="{{ route('admin.users.index') }}" class="btn btn-danger">
        <i class="fa fa-times m-r-5"></i>
        <span>{{ __('general.cancel') }}</span>
    </a>
</div>
