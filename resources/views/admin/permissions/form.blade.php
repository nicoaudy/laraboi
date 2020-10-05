<div class="form-group form-group-default required">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::submit('Add', array('class' => 'btn btn-primary', 'name' => 'submitButton')) }}
</div>