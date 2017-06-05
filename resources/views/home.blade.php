@extends('layouts.index')
@section('content')
    <!-- Navbar goes here -->
    <div class="section">
        <div class="card-panel purple darken-3 white-text">Welcome To Rafica, {{ Auth::user()->name }}.</div>
    <!-- Page Layout here -->
        <div class="col s3 center-align">
            @role('admin')
            <!-- admin -->
                <button class="waves-effect waves-light btn"><a class="white-text" href="{{ route('input.index') }}">View Data</a></button>
                <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 50px;">

                    <a href="{{ route('input.create') }}" class="btn-floating btn-large red">
                        <i class="large material-icons">add</i>
                    </a>
            @endrole
            @role('user')
            &nbsp;<!-- user -->
            @endrole
            </div>
        </div>
    </div>
    @endsection
