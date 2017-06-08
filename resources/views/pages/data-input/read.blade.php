@extends('layouts.index')
@section('content')

<div class="section">


            <div class="row">
                <div class="col s12">
                    <h5>{{ $tampilkan->judul }}</h5>

                    <div class="divider"></div>
                    <p>{!!substr($tampilkan->deskripsi,0,200)!!}...</p>
                    <div class="divider"></div>
                    <p>Tahun : {!!substr($tampilkan->tahun,0,200)!!}...</p>

                    <p>Cabang : {{$tampilkan->nama}} </p>
                    <td>Pendapatan Jalan Tol : {{$tampilkan->score1}}</td>
                    <td>Volume Ruas Jalan Tol : {{$tampilkan->score2}}</td>
                    <td>Bla Bla Bla Jalan Tol : {{$tampilkan->score3}}</td>
                    <td>Bla Bla Bla Jalan Tol : {{$tampilkan->score4}}</td>
                    <td> Bla Bla Bla Jalan Tol : {{$tampilkan->score5}}</td>
                </div>
            </div>

</div>
@endsection