@extends('layouts.app')
@section('content')
    <form action="{{route('change-password')}}" method="POST">
        {{csrf_field()}}
        <input type="password" name="old_password" placeholder="old password">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection