@extends('layout.app')

@section('content')

    <h3>Darbinieku dati</h3>

        <a href="/data" class="btn" style="background-color: #ddb0cfff; color: black;">Atgriezties</a>

   <a href="/darbiniekijauns" class="btn" style="background-color: #ddb0cfff; color: black;">Pievienot</a>
    

 
 <div style="display: flex; flex-wrap: wrap; gap: 16px;">
@foreach ($data as $item)
 

    <div style="background:#e49ecf; color: white; width: 400px;" class="card mt-3">
        <div class="card-body">
            <h5  class="card-title">ID: {{$item->id}}</h5>
            <p class="card-text">Vārds: {{$item->Vards }}</p>
            <p class="card-text">Uzvārds: {{$item->Uzvards }}</p>




            <a href="/data/darbinieki/{{$item->id}}/delete" class="btn btn-light">Dzēst</a>
            <a href="/data/darbinieki/{{$item->id}}/details" class="btn btn-light">Detalizētais</a>
        

 

            
        </div>
    </div>
@endforeach
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