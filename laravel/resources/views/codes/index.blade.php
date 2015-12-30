@extends('app')
 
@section('content')
    <h2>Edit Code "{{ $code->id }}"</h2>
 
    {!! Form::model($code, ['method' => 'PATCH', 'route' => ['users.codes.update', $user->name, $code->id]]) !!}
        @include('codes/partials/_form', ['submit_text' => 'View Code'])
    {!! Form::close() !!}
		<a href='../auth/logout'>Logout</a>
@endsection