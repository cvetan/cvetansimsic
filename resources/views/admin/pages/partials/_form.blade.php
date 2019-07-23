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
                {{ Form::bsText("name_{$code}", __('general.name'), "name-{$code}", isset($page) ? $page->translate($code)->name : null) }}
                {{ Form::bsText("slug_{$code}", __('general.slug'), "slug-{$code}", isset($page) ? $page->translate($code)->slug : null) }}
                {{ Form::bsCkeditor("content_{$code}", __('general.content'), "content-{$code}", isset($page) ? $page->translate($code)->content : null) }}
                {{ Form::bsText("title_tag_{$code}", __('general.title_tag'), "title-tag-{$code}", isset($page) ? $page->translate($code)->title_tag : null) }}
                {{ Form::bsTextarea("description_tag_{$code}", __('general.description_tag'), "description-tag-{$code}", isset($page) ? $page->translate($code)->description_tag : null) }}
            </div>
        @endforeach
    </div>
</div>

{{ Form::bsSwitchery('active', 'Page active', 'active', '#167CCB', isset($page) ? $page->active : false) }}

@include('components.form.errors')

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
