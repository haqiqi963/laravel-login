@extends('layout.mainlayout')

@section('title', 'Home Admin')

@section('content')

    <div class="container">
        <h4>Anda Login sebagai {{ Auth::user()->name }}</h4>
    </div>

@endsection
