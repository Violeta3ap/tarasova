@section('layouts.app')

@extends('layout.app')

@section('content')
    <h2>Detalizētie dati</h2>
      <div class="d-flex justify-content mt-4">
        <a href="/data/allData" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger mt-4" style="width: 400px; background:#e49ecf; color: white;">
            <h3>ID: {{$Darbinieki->id}}</h3>
            <p>Vārds: {{$Darbinieki->Vards}}</p>
            <p>Uzvārds: {{$Darbinieki->Uzvards}}</p>

            <a class="btn btn-light" href="/data/allData/{{ $Darbinieki->id }}/edit">Rediģēt</a>
            <a class="btn btn-light" href="/data/allData/{{ $Darbinieki->id }}/delete">Dzēst</a>
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