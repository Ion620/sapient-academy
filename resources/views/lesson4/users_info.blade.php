@extends('lesson4.users')
@section('users')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td><a href="{{route('users.show', ['id' => $user->id])}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
