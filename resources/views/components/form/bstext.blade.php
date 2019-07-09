<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::text($name, null, ['class' => 'form-control', 'id' => $id]) }}
</div>
