@extends('layouts.app')
@section('content')
    <form action="{{route('cabang.store')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="nama" placeholder="name">
        <select name="user">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection