@extends ('layout.app')

@section('content')
 
<div class="d-flex justify-content-center">

    <a href="/data/allData" class="btn btn-success mx-2" style="background-color: #ddb0cfff; border: none; color: black;">
        Dati par darbiniekiem
    </a>

    <a href="/data/klienti" class="btn btn-success mx-2" style="background-color: #ddb0cfff; border: none; color: black;">
        Dati par klientiem
    </a>

    <a href="/data/numuri" class="btn btn-success mx-2" style="background-color: #ddb0cfff; border: none; color: black;">
        Dati par numuriem
    </a>

    <a href="/data/rezervacijas" class="btn btn-success mx-2" style="background-color: #ddb0cfff; border: none; color: black;">
        Dati par rezervācijam
    </a>
</div>

    


@endsection
