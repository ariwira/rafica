@extends('layouts.index')
@section('content')

        <table>
        @if(empty($datas) || count($datas) < 1)
            <tr>No data</tr>
        @else

            @foreach($datas as $key => $data)

                    <tr>
                    <h5>{{ $data->crud->judul }}</h5>
                    <h5>{{ $data->crud->tahun }}</h5>
                    <p>{{ $data->crud->deskripsi }}</p>
                    {{--<td>Cabang {{$data->cabang[$key]->nama}} </td>--}}
                    <td>Pendapatan Jalan Tol : {{$data->score1}}</td>
                    <td>Volume Ruas Jalan Tol : {{$data->score2}}</td>
                    <td>Bla Bla Bla Jalan Tol : {{$data->score3}}</td>
                    <td>Bla Bla Bla Jalan Tol : {{$data->score4}}</td>
                    <td> Bla Bla Bla Jalan Tol : {{$data->score5}}</td>
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