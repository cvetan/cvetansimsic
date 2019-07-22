<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::checkbox($name, '1', $checked, ['class' => 'form-control', 'data-plugin' => 'switchery', 'data-color' => $color]) }}
</div>
