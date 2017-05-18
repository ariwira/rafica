@extends('layouts.app')
@section('content')
    <form action="{{route('user.store')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="name">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <input type="text" name="jabatan" placeholder="jabatan">
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection