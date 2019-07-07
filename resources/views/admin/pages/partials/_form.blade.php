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
            <div id="tab-{{ $code }}" class="tab-pane fade">
                Content - {{ $code }}
            </div>
        @endforeach
    </div>
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit">
        Save
    </button>
</div>
