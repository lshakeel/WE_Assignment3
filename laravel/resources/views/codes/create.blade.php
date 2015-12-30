@extends('app')
 
@section('content')
    <h2>Create Code for User "{{ $user->name }}"</h2>
 
    {!! Form::model(new App\Code, ['route' => ['users.codes.store', $user->name], 'class'=>'']) !!}
        @include('codes/partials/_form', ['submit_text' => 'Create Code'])
    {!! Form::close() !!}
		<a href='../../../auth/logout'>Logout</a>
@endsection