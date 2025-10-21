@section('layouts.app')
@section('content')
@extends('layout.app')

@section('content')


<!--bloks kļūdam--> 

@if($errors->any() )
<div class ="alert alert-danger">
    <ul>
        @foreach($errors->all() as $kluda)
        <li> <h3>  {{$kluda}}</h3></li>
        @endforeach
    </ul>
    </div>
@endif




<form action="/data/rezervacijas/{{ $rezervacijas->id }}/editrezervacijas" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt</h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $rezervacijas->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="NumuraID" class="form-label"> Numura ID </label>
    <input type= "number" class="form-control" value="{{$rezervacijas->NumuraID}}" id="NumuraID" name="NumuraID" placeholder="Ievadiet numura ID">

    <label for="KlientaID" class="form-label"> Klienta ID </label>
    <input type= "number" class="form-control" value="{{$rezervacijas->KlientaID}}" id="KlientaID" name="KlientaID" placeholder="Ievadiet klienta ID">



 <label for="IebrauksanasDatums" class="form-label"> Iebraukšanas datums </label>
    <input type= "date" class="form-control" value="{{$rezervacijas->IebrauksanasDatums}}" id="IebrauksanasDatums" name="IebrauksanasDatums" placeholder="Ievadiet iebraukšanas datumu">

    <label for="IzbrauksanasDatums" class="form-label"> Izbraukšanas datums </label>
    <input type= "date" class="form-control" value="{{$rezervacijas->IzbrauksanasDatums}}" id="IzbrauksanasDatums" name="IzbrauksanasDatums" placeholder="Ievadiet izbraukšanas datumu">

<label for="RezervacijasStatuss" class="form-label"> Rezervācijas statuss </label>
    <input type= "text" class="form-control" value="{{$rezervacijas->RezervacijasStatuss}}" id="RezervacijasStatuss" name="RezervacijasStatuss" placeholder="Ievadiet rezervācijas statusu">



     <label for="DarbiniekaID" class="form-label"> Darbinieka ID </label>
    <input type= "number" class="form-control" value="{{$rezervacijas->DarbiniekaID}}" id="DarbiniekaID" name="DarbiniekaID" placeholder="Ievadiet darbinieka ID">



</div>

<button type="submit" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Saglabāt izmaiņas</button>
<a href="/data/rezervacijas" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Atcelt</a>

</div>
@endsection
</form>