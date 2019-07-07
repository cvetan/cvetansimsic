<div class="form-group">
    {{ Form::label(__('pages.page_active')) }}
    {{ Form::checkbox('active', '1', false, ['class' => 'form-control', 'data-plugin' => 'switchery', 'data-color' => '#ff0000']) }}
</div>

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

        @endforeach
    </div>
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit">
        <i class="fa fa-save m-r-5"></i>
        <span>Save</span>
    </button>

    <a href="{{ route('admin.pages.index') }}" class="btn btn-danger">
        <i class="fa fa-times m-r-5"></i>
        <span>Cancel</span>
    </a>
</div>
