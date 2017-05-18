@extends('layouts.app')
@section('content')
    <form action="{{route('input.store')}}" method="POST">
        {{csrf_field()}}
        <span>Cabang : {{$cabang->nama}}</span><br>
        <span>Admin : {{$cabang->user->username}}</span><br>
        <input type="hidden" name="cabang" value="{{$cabang->id}}">
        <input type="text" name="score1" placeholder="score 1">
        <input type="text" name="score2" placeholder="score 2">
        <input type="text" name="score3" placeholder="score 3">
        <input type="text" name="score4" placeholder="score 4">
        <input type="text" name="score5" placeholder="score 5">
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection