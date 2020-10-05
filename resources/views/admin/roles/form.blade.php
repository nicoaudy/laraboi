<div class="form-group form-group-default required">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<h4>Assign Permissions</h4>

<input type="checkbox" id="select-all" class="mb-4"> Check All<br>
<div class="form-group">
	@foreach ($permissions as $permission)
	{{Form::checkbox('permissions[]', $permission->id, $role->permissions ?? null ) }}
	{{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
	@endforeach
</div>

<div class="form-group">
	{{ Form::submit('Submit', array('class' => 'btn btn-primary', 'name' => 'submitButton')) }}
</div>