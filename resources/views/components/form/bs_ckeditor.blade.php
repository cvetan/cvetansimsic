<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, ['class' => 'ckeditor form-control', 'id' => $id]) }}
</div>
