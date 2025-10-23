@extends('layout.app')
 
@section('content')
<h3>Pievienot jaunu pierakstu</h3>
 
<a href="/data/numuri" class="btn btn-secondary mb-3">Atpakaļ</a>
 
<form method="POST" action="/data/numuri/jaunsSubmit">
    @csrf
    <div class="mb-3">
        <label for="Tips" class="form-label">Tips</label>
        <input type="text" class="form-control" id="Tips" name="Tips" required>
    </div>
 
    <div class="mb-3">
        <label for="CenaParNakti" class="form-label">Cena par nakti</label>
        <input type="text" class="form-control" id="CenaParNakti" name="CenaParNakti">
    </div>

      <div class="mb-3">
        <label for="Statuss" class="form-label">Statuss</label>
        <input type="text" class="form-control" id="Statuss" name="Statuss" required>
    </div>


 
    <button type="submit" class="btn btn-success">Saglabāt</button>
</form>
@endsection
