<div class="form-group">
    {{ Form::label($id, $label, ['class' => 'control-label']) }}
    {{ Form::textarea($name, null, ['class' => 'ckeditor form-control', 'id' => $id]) }}
</div>
