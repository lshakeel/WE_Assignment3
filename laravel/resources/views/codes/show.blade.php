@extends('app')
 
@section('content')
    <h2>
        {!! link_to_route('users.show', $user->name, [$user->name]) !!} -
        {{ $code->id }}
    </h2>
 
    {{ $code->code }}
		{!! link_to_route('users.codes.edit', 'Run', array($user->name, $code->id), array('class' => 'btn btn-info')) !!}
		<br>
		<a href='../../../auth/logout'>Logout</a>
@endsection