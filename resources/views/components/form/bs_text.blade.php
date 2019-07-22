<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::text($name, $value, ['class' => 'form-control', 'id' => $id]) }}
</div>
