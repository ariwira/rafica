@extends('layouts.index')
@section('content')
    <form action="{{route('cabang.update',$cabang->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="text" name="nama" placeholder="name" value="{{$cabang->nama}}">
        <select name="user">
            @foreach($users as $user)
                <option value="{{$user->id}}" {{$cabang->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection