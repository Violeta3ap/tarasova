<!-- @section('layouts.app')
@section('content')
@extends('layout.app')

@section('content') -->


<!--bloks kļūdam--> 
<!-- 
@if($errors->any() )
<div class ="alert alert-danger">
    <ul>
        @foreach($errors->all() as $kluda)
        <li> <h3>  {{$kluda}}</h3></li>
        @endforeach
    </ul>
    </div>
@endif -->



<!-- 
<form action="/ klienti/{{ $klienti->id }}/editSumbit" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt</h1>


    <div class="container" style= "max-width: 40%">
     -->
<!-- id pārsūtīšana 
<input type="hidden" value="{{ $klienti->id }}"  id="id" name="id">   -->

<!-- <div class= "mb-3">
    <label for="Vards" class="form-label"> Vārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Vards}}" id="Vards" name="Vards" placeholder="Ievadiet vārdu">

     <label for="Uzards" class="form-label"> Uzvārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Uzards}}" id="Uzards" name="Uzards" placeholder="Ievadiet uzvārdu">



     <label for="Epasts" class="form-label"> E-pasts </label>
    <input type= "text" class="form-control" value="{{$klienti->Epasts}}" id="Epasts" name="Epasts" placeholder="Ievadiet e-pastu">

     <label for="TelefonaNumurs" class="form-label"> Telefona numurs </label>
    <input type= "text" class="form-control" value="{{$klienti->TelefonaNumurs}}" id="TelefonaNumurs" name="TelefonaNumurs" placeholder="Ievadiet telefona numuru">




</div> -->
<!-- 
<button type="submit" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Saglabāt izmaiņas</button>
<a href="/data/klienti" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Atcelt</a>

</div>
@endsection
</form> -->



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




<form action="/data/klienti/{{ $klienti->id }}/edit" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt</h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $klienti->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="Vards" class="form-label"> Vārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Vards}}" id="Vards" name="Vards" placeholder="Ievadiet vārdu">

     <label for="Uzards" class="form-label"> Uzvārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Uzards}}" id="Uzards" name="Uzards" placeholder="Ievadiet uzvārdu">



</div>

<button type="submit" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Saglabāt izmaiņas</button>
<a href="/data/klienti" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Atcelt</a>

</div>
@endsection
</form>s
