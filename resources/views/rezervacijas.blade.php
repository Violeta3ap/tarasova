@extends('layout.app')

@section('content')

    <h3>Rezervāciju dati</h3>

        <a href="/data" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>



 <div style="display: flex; flex-wrap: wrap; gap: 16px;">
@foreach ($data as $item)
 
    <div style="background:#e49ecf; color: white; width: 400px;" class="card mt-3">
        <div class="card-body">
            <h5  class="card-title">ID: {{$item->id}}</h5>
            <p class="card-text">NumuraID: {{$item->NumuraID }}</p>
            <p class="card-text">KlientaID: {{$item->KlientaID }}</p>
            <p class="card-text">Iebraukšanas datums: {{$item->IebrauksanasDatums }}</p>
            <p class="card-text">Izbraukšanas datums: {{$item->IzbrauksanasDatums }}</p>
                <p class="card-text">Rezervācijas statuss: {{$item->RezervacijasStatuss }}</p>
            <p class="card-text">DarbiniekaID: {{$item->DarbiniekaID }}</p>




            <a href="/data/klienti/{{$item->id}}/delete" class="btn btn-light">Dzēst</a>
            <a href="/data/klienti/{{$item->id}}/details" class="btn btn-light">Detalizētais</a>

 
        </div>
    </div>
@endforeach
</div>

    
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




