<div class="form-group form-group-default mb-4 required">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group form-group-default mb-4 required">
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username', null, array('class' => 'form-control')) }}
</div>
<div class="form-group form-group-default mb-4 required">
	{{ Form::label('email', 'Email') }}
	{{ Form::email('email', null, array('class' => 'form-control')) }}
</div>

<h4>Roles</h4>
@foreach ($roles as $role)
{{ Form::checkbox('roles[]',  $role->id, $user->roles ?? null ) }}
{{ Form::label($role->name, ucfirst($role->name)) }}<br>
@endforeach

<div class="form-group form-group-default mb-4 required">
	{{ Form::label('password', 'Password') }}<br>
	{{ Form::password('password', array('class' => 'form-control')) }}
</div>
<div class="form-group form-group-default required">
	{{ Form::label('password', 'Confirm Password') }}<br>
	{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{ Form::submit('Submit', array('class' => 'btn btn-primary btn-lg', 'name' => 'submitButton')) }}
</div>