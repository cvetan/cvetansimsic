<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::checkbox($name, '1', false, ['class' => 'form-control', 'data-plugin' => 'switchery', 'data-color' => $color]) }}
</div>
