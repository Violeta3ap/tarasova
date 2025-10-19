@extends('layout.app')

@section('content')

    <h3>Numuru dati</h3>

        <a href="/data" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>

 
@foreach ($data as $item)
 
    <div style="background:#e49ecf; color: white; width: 400px;" class="card mt-3">
        <div class="card-body">
            <h5  class="card-title">ID: {{$item->id}}</h5>
            <p class="card-text">Tips: {{$item->Tips }}</p>
            <p class="card-text">Cena par nakti: {{$item->CenaParNakti }}</p>
            <p class="card-text">Statuss: {{$item->Statuss }}</p>
           



            <a href="/data/numuri/{{$item->id}}/delete" class="btn btn-light">Dzēst</a>
            <a href="/data/numuri/{{$item->id}}/details" class="btn btn-light">Detalizētais</a>

 
        </div>
    </div>
@endforeach


    
    <div class="d-flex justify-content-end">
        <a href="/data" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>
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
@endsection



@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>  
@endif




