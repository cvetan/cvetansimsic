<div class="btn-group visible-xs">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        {{ __('general.actions') }} <span class="caret"></span>
    </button>

    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('admin.pages.show', ['page' => $page->id]) }}" target="_blank">
                {{ __('general.preview') }}
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}">
                {{ __('general.edit') }}
            </a>
        </li>

        <li>
            <a href="#" class="remove-trigger" data-action="{{ route('admin.pages.destroy', ['page' => $page->id])}}">
                {{ __('general.remove') }}
            </a>
        </li>
    </ul>
</div>
