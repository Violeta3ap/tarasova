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




<form action="/data/numuri{{ $numuri->id }}/editnumuri" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt</h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $numuri->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="Tips" class="form-label"> Tips </label>
    <input type= "text" class="form-control" value="{{$numuri->Tips}}" id="Tips" name="Tips" placeholder="Ievadiet tipu">

     <label for="CenaParNakti" class="form-label"> Cena par nakti </label>
    <input type= "text" class="form-control" value="{{$numuri->CenaParNakti}}" id="CenaParNakti" name="CenaParNakti" placeholder="Ievadiet cenu par nakti">



     <label for="Statuss" class="form-label"> Statuss </label>
    <input type= "text" class="form-control" value="{{$numuri->Statuss}}" id="Statuss" name="Statuss" placeholder="Ievadiet statusu">


</div>

<button type="submit" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Saglabāt izmaiņas</button>
<a href="/data/numuri" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Atcelt</a>
</div>
@endsection
</form>

