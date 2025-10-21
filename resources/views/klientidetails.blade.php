@section('layouts.app')
@section('content')
@extends('layout.app')

@section('content')
    <h2>Detalizētie dati</h2>
        <div class="d-flex justify-content mt-4">
        <a href="/data/klienti" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger mt-4" style="width: 400px; background:#e49ecf; color: white;">
            <h3>ID: {{$klienti->id}}</h3>
            <p>Vārds: {{$klienti->Vards}}</p>
            <p>Uzvārds: {{$klienti->Uzvards}}</p>
            <p>E-pasts: {{$klienti->Epasts}}</p>
            <p>Telefona numurs: {{$klienti->TelefonaNumurs}}</p>
            <a class="btn btn-light" href="/data/klienti/{{ $klienti->id }}/editklienti">Rediģēt</a>
            <a class="btn btn-light" href="/data/klienti/{{ $klienti->id }}/delete">Dzēst</a>
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