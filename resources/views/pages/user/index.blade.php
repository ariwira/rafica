@extends('layouts.index')
@section('content')
    <a href="{{route('user.create')}}" class="btn btn-primary">Create account</a>
    <table>
        @if(empty($users) || count($users) < 1)
            <tr>No data</tr>
        @else
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->jabatan}}</td>
            <td><a href="{{route('user.show',$user->id)}}" class="btn btn-default">Show</a></td>
            <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-success">Edit</a></td>
            <td>
                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
@endsection