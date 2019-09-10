<div class="btn-group hidden-xs">
    @isset($showLink)
        <a class="btn btn-success" href="{{ $showLink }}" target="_blank">
            <i class="fa fa-eye m-r-2"></i>
            <span>{{ __('general.preview') }}</span>
        </a>
    @endisset

    @isset($editLink)
        <a href="{{ $editLink }}" class="btn btn-flat btn-warning">
            <i class="fa fa-pencil m-r-2"></i>
            <span>{{ __('general.edit') }}</span>
        </a>
    @endisset

    @isset($deleteLink)
        <a href="#" class="btn btn-danger remove-trigger" data-action="{{ $deleteLink }}">
            <i class="fa fa-minus-circle"></i>
            <span>{{ __('general.remove') }}</span>
        </a>
    @endisset
</div>
