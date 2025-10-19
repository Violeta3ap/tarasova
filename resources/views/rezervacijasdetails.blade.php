@section('layouts.app')
@section('content')
@extends('layout.app')

@section('content')
    <h2>Detalizētie dati</h2>
    
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger mt-4" style="width: 400px; background:#e49ecf; color: white;">
            <h3>ID: {{$rezervacijas->id}}</h3>
            <p>NumuraID: {{$rezervacijas->NumuraID}}</p>
            <p>KlientaID: {{$rezervacijas->KlientaID}}</p>
            <p>Iebraukšanas datums: {{$rezervacijas->IebrauksanasDatums}}</p>
            <p>Izbraukšanas datums: {{$rezervacijas->IzbrauksanasDatums}}</p>
            <p>Rezervācijas statuss: {{$rezervacijas->RezervacijasStatuss}}</p>
            <p>DarbiniekaID: {{$rezervacijas->DarbiniekaID}}</p>
            <a class="btn btn-light" href="/data/rezervacijas/{{ $rezervacijas->id }}/edit">Rediģēt</a>
            <a class="btn btn-light" href="/data/rezervacijas/{{ $rezervacijas->id }}/delete">Dzēst</a>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-4">
        <a href="/data/rezervacijas" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
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