@foreach ($errors->all() as $error)
	@component('include.alert')
	{{ $error }}
	@endcomponent
@endforeach