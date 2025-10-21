@section('layouts.app')
@section('content')
@extends('layout.app')

@section('content')
    <h2>Detalizētie numuru dati</h2>
        <div class="d-flex justify-content mt-4">
        <a href="/data/numuri" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <div class="alert alert-danger" style="width: 400px; background:#e49ecf; color: white;">
            <h3>ID: {{$numuri->id}}</h3>
            <p>Tips: {{$numuri->Tips}}</p>
            <p>Cena par nakti: {{$numuri->CenaParNakti}}</p>
            <p>Statuss: {{$numuri->Statuss}}</p>
<!--  -->
            <a class="btn btn-light" href="/data/numuri/{{ $numuri->id }}/editnumuri">Rediģēt</a>
            <a class="btn btn-light" href="/data/numuri/{{ $numuri->id }}/delete">Dzēst</a>
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