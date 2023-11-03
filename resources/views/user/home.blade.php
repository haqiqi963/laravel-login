@extends('layout.mainlayout')

@section('title', 'Home User')

@section('content')

    <div class="container">
        <h4>Anda Login sebagai {{ Auth::User()->name }}</h4>
    </div>

@endsection
