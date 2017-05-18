@extends('layouts.app')
@section('content')
    <table>
        @if(empty($datas) || count($datas) < 1)
            <tr>No data</tr>
        @else
            @foreach($datas as $data)
                <tr>
                    <td>{{$data->cabang->nama}}</td>
                    <td>{{$data->score1}}</td>
                    <td>{{$data->score2}}</td>
                    <td>{{$data->score3}}</td>
                    <td>{{$data->score4}}</td>
                    <td>{{$data->score5}}</td>
                    {{--<td><a href="{{route('user.show',$user->id)}}" class="btn btn-default">Show</a></td>--}}
                    {{--<td><a href="{{route('user.edit',$user->id)}}" class="btn btn-success">Edit</a></td>--}}
                    {{--<td>--}}
                        {{--<form action="{{route('user.destroy',$user->id)}}" method="POST">--}}
                            {{--{{csrf_field()}}--}}
                            {{--{{method_field('DELETE')}}--}}
                            {{--<input type="submit" class="btn btn-danger" value="delete">--}}
                        {{--</form>--}}
                    {{--</td>--}}
                </tr>
            @endforeach
        @endif
    </table>
@endsection