<div class="form-group">
    <div class="form-group">
        {{ Form::label($id, $label, ['class' => 'control-label']) }}
        {{ Form::textarea($name, $value, ['class' => 'form-control resize-v', 'id' => $id]) }}
    </div>
</div>
