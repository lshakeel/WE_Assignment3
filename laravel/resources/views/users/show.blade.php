@extends('app')
 
@section('content')
    <h2>{{ $user->name }}</h2>
     @if ( !$user->codes->count() )
        Your user has no codes.
    @else
        <ul>
            @foreach( $user->codes as $code )
                <li>
				    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.codes.destroy', $user->name, $code->id))) !!}
					<a href="{{ route('users.codes.show', [$user->name, $code->id]) }}">{{ $code->id }}</a>
						(
                            {!! link_to_route('users.codes.edit', 'Edit', array($user->name, $code->id), array('class' => 'btn btn-info')) !!},
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
					</li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('users.codes.create', 'Create Code', $user->name) !!} ||
		<a href='../auth/logout'>Logout</a>
    </p>
@endsection

