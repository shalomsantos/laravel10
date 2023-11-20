@extends('master')

@section('content')
    <div>
        <h1>usuarios</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vel fugit tempore ut autem necessitatibus iste voluptate, similique minima qui, modi adipisci quas sint minus, sapiente at ipsum dicta ex?</p>

        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>

    </div>
@endsection