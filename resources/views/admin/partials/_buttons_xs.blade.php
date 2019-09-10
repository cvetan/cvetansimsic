<div class="btn-group visible-xs">
    @if(isset($showLink) || isset($editLink) || isset($deleteLink))
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ __('general.actions') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu">
            @isset($showLink)
                <li>
                    <a href="{{ $showLink }}" target="_blank">
                        {{ __('general.preview') }}
                    </a>
                </li>
            @endisset

            @isset($editLink)
                <li>
                    <a href="{{ $editLink }}">
                        {{ __('general.edit') }}
                    </a>
                </li>
            @endisset

            @isset($deleteLink)
                <li>
                    <a href="#" class="remove-trigger" data-action="{{ $deleteLink }}">
                        {{ __('general.remove') }}
                    </a>
                </li>
            @endisset
        </ul>
    @endif
</div>
