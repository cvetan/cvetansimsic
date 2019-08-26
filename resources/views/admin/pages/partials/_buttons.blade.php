<div class="btn-group hidden-xs">
    <a class="btn btn-success" href="{{ route('admin.pages.show', ['page' => $page->id]) }}" target="_blank">
        <i class="fa fa-eye m-r-2"></i>
        <span>{{ __('general.preview') }}</span>
    </a>

    <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="btn btn-flat btn-warning">
        <i class="fa fa-pencil m-r-2"></i>
        <span>{{ __('general.edit') }}</span>
    </a>

    <a href="#" class="btn btn-danger remove-trigger" data-action="{{ route('admin.pages.destroy', ['page' => $page->id])}}">
        <i class="fa fa-minus-circle"></i>
        <span>{{ __('general.remove') }}</span>
    </a>
</div>
