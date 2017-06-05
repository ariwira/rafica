@extends('layouts.index')
@section('content')
    <div class="panel-body">
    <table>
        <td>
            <tr>{{$user->name}}</tr>
            <tr>{{$user->username}}</tr>
            <tr>{{$user->email}}</tr>
            <tr>{{$user->jabatan}}</tr>
        </td>
    </table>
    </div>
@endsection