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




<form action="/ data/{{ $klienti->id }}/edit" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt ziņojumu</h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $klienti->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="Vards" class="form-label"> Vārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Vards}}" id="Vards" name="Vards" placeholder="Ievadiet vārdu">

     <label for="Uzvards" class="form-label"> Uzvārds </label>
    <input type= "text" class="form-control" value="{{$klienti->Uzvards}}" id="Uzvards" name="Uzvards" placeholder="Ievadiet uzvārdu">


</div>



<button type="submit" class="btn btn-primary">Saglabāt izmaiņas</button>
<a href="/data/klienti"  class="btn btn-danger">Atcelt</a>

</div>
@endsection
</form>

