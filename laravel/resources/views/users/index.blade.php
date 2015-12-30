@extends('app')
 
@section('content')
    <h2>Users</h2>
     @if ( !$users->count() )
        You have no users
    @else
        <ul>
            @foreach( $users as $user )
                <li>
				    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy', $user->name))) !!}
					<a href="{{ route('users.show', $user->name) }}">{{ $user->name }}</a>
					(
                            {!! link_to_route('users.edit', 'Edit', array($user->name), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
					</li>
            @endforeach
        </ul>
		
		<a href='auth/logout'>Logout</a>
    @endif
@endsection
