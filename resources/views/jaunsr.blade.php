@extends('layout.app')
 
@section('content')
<h3>Pievienot jaunu pierakstu</h3>
 
<a href="/data/rezervacijas" class="btn btn-secondary mb-3">Atpakaļ</a>
 
<form method="POST" action="/data/rezervacijas/jaunsSubmit">
    @csrf
    <div class="mb-3">
        <label for="KlientaID" class="form-label">Klienta ID</label>
        <input type="text" class="form-control" id="KlientaID" name="KlientaID" required>
    </div>
 
    <div class="mb-3">
        <label for="NumuraID" class="form-label">Numura ID</label>
        <input type="text" class="form-control" id="NumuraID" name="NumuraID">
    </div>

 
    
    <div class="mb-3">
        <label for="IebrauksanasDatums" class="form-label">Iebrauksanas datums</label>
        <input type="text" class="form-control" id="IebrauksanasDatums" name="IebrauksanasDatums">
    </div>


     
    <div class="mb-3">
        <label for="IzbrauksanasDatums" class="form-label">Izbrauksanas datums</label>
        <input type="text" class="form-control" id="IzbrauksanasDatums" name="IzbrauksanasDatums">
    </div>


    <div class="mb-3">
        <label for="RezervacijasStatuss" class="form-label">Rezervacijas statuss</label>
        <input type="text" class="form-control" id="RezervacijasStatuss" name="RezervacijasStatuss">
    </div>


     
    <div class="mb-3">
        <label for="DarbiniekaID" class="form-label">Darbinieka ID</label>
        <input type="text" class="form-control" id="DarbiniekaID" name="DarbiniekaID">
    </div>



    <button type="submit" class="btn btn-success">Saglabāt</button>
</form>
@endsection

