@extends('layouts.index')
@section('content')

    <br>
    <div class="card-panel purple darken-3 white-text">
        <h6>Welcome To Rafica, {{ Auth::user()->name }}.</h6>
        <p>Masukan data.</p>
    </div>
    <br>

    <form action="{{route('input.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="input-field col s12">
                <input type="text" class="validate" name="judul" value="{{old('judul')}}">
                <label for="title">Judul</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" class="validate" name="tahun" value="{{old('tahun')}}">
                <label for="title">Tahun</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                <label for="textarea1">Deskripsi</label>
            </div>
        </div>

        <div class="row">
        @foreach($cabang as $key => $cabang)
        <input type="hidden" name="cabang_id[{{$key}}]" value="{{$cabang->id}}">

        <li>{{$cabang->nama}}</li> <br>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="score1[{{$key}}]" value="{{old('score1[$key]')}}">
                    <label for="title">Pendapatan Jalan Tol</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="score2[{{$key}}]" value="{{old('score2[$key]')}}">
                    <label for="title">Volume Ruas Jalan Tol</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="score3[{{$key}}]" value="{{old('score3[$key]')}}">
                    <label for="title">Bla Bla Bla Jalan Tol</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="score4[{{$key}}]" value="{{old('score4[$key]')}}">
                    <label for="title">Bla Bla Bla Jalan Tol</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="score5[{{$key}}]" value="{{old('score5[$key]')}}">
                    <label for="title">Bla Bla Bla Jalan Tol</label>
                </div>
        @endforeach
        </div>

        <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>

    </form>

@endsection