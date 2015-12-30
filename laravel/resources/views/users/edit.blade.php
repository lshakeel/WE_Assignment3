@extends('app')
 
@section('content')
    <h2>Edit User</h2>
 
    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->name]]) !!}
        @include('users/partials/_form', ['submit_text' => 'Edit User'])
    {!! Form::close() !!}
	
		<a href='../../auth/logout'>Logout</a>
@endsection