@extends('layout.app')
 
@section('content')
<h3>Pievienot jaunu pierakstu</h3>
 
<a href="/data/darbinieki" class="btn btn-secondary mb-3">Atpakaļ</a>
 
<form method="POST" action="/data/darbinieki/jaunsSubmit">
    @csrf
    <div class="mb-3">
        <label for="Vards" class="form-label">Vārds</label>
        <input type="text" class="form-control" id="Vards" name="Vards" required>
    </div>
 
    <div class="mb-3">
        <label for="Uzvards" class="form-label">Uzvārds</label>
        <input type="text" class="form-control" id="Uzvards" name="Uzvards">
    </div>

 
    <button type="submit" class="btn btn-success">Saglabāt</button>
</form>
@endsection