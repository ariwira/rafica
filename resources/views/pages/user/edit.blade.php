@extends('layouts.index')
@section('content')
    <form action="{{route('user.update',$user->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <input type="text" name="name" placeholder="name" value="{{$user->name}}">
        <input type="text" name="username" placeholder="username" value="{{$user->username}}">
        <input type="text" name="jabatan" placeholder="jabatan" value="{{$user->jabatan}}">
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection