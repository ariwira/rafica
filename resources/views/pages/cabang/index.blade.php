@extends('layouts.app')
@section('content')
    <a href="{{route('cabang.create')}}" class="btn btn-primary">Create Cabang</a>
    <table>
        @if(empty($cabangs) || count($cabangs) < 1)
            <tr>No data</tr>
        @else
            @foreach($cabangs as $cabang)
                <tr>
                    <td>{{$cabang->nama}}</td>
                    <td>{{$cabang->user->name}}</td>
                    <td><a href="{{route('cabang.show',$cabang->id)}}" class="btn btn-default">Show</a></td>
                    <td><a href="{{route('cabang.edit',$cabang->id)}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="{{route('cabang.destroy',$cabang->id)}}" method="POST">
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