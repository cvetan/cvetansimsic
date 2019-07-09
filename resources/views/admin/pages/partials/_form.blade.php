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
                {{ Form::bsText("name_{$code}", 'Name', "name-{$code}") }}

                <div class="form-group">
                    {{ Form::label("content-{$code}", "Content", ['class' => 'control-label']) }}

                    <textarea name="content_{{ $code }}" id="content-{{ $code }}" class="ckeditor form-control"></textarea>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{ Form::bsSwitchery('active', 'Page active', 'active', '#167CCB') }}

<div class="form-group">
    <button class="btn btn-success" type="submit">
        <i class="fa fa-save m-r-5"></i>
        <span>{{ __('general.save') }}</span>
    </button>

    <a href="{{ route('admin.pages.index') }}" class="btn btn-danger">
        <i class="fa fa-times m-r-5"></i>
        <span>{{ __('general.cancel') }}</span>
    </a>
</div>
