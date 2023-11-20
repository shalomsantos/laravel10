@extends('master')

@section('content')
    <div class="container pb-5">
        <h1>usuarios</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vel fugit tempore ut autem necessitatibus iste voluptate, similique minima qui, modi adipisci quas sint minus, sapiente at ipsum dicta ex?</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>
@endsection