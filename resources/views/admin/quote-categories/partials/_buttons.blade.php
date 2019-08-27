<div class="btn-group hidden-xs">
    <a href="{{ route('admin.quote-categories.edit', ['quoteCategory' => $category->id]) }}" class="btn btn-flat btn-warning">
        <i class="fa fa-pencil m-r-2"></i>
        <span>{{ __('general.edit') }}</span>
    </a>

    <a href="#" class="btn btn-danger remove-trigger" data-action="{{ route('admin.quote-categories.destroy', ['quoteCategory' => $category->id])}}">
        <i class="fa fa-minus-circle"></i>
        <span>{{ __('general.remove') }}</span>
    </a>
</div>
