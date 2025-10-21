@section('layouts.app')
@section('content')
@extends('layout.app')

@section('content')
    <h2>Detalizētie darbinieku dati</h2>
        <div class="d-flex justify-content mt-4">
        <a href="/data/darbinieki" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger mt-4" style="width: 400px; background:#e49ecf; color: white;">
            <h3>ID: {{$darbinieki->id}}</h3>
            <p>Vārds: {{$darbinieki->Vards}}</p>
            <p>Uzvārds: {{$darbinieki->Uzvards}}</p>

            <a class="btn btn-light" href="/data/darbinieki/{{ $darbinieki->id }}/darbiniekiedit">Rediģēt</a>
            <a class="btn btn-light" href="/data/darbinieki/{{ $darbinieki->id }}/delete">Dzēst</a>
        </div>
    </div>

    <style>
        body {
            background-color: #dfc3d6ff;
        }
        .table-dark {
            background-color: #e49ecf !important;
            color: black;
        }
        .btn {
            background-color: #e49ecf;
            color: black;
        }
    </style>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>  
    @endif
@endsection