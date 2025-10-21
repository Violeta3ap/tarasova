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




<form action="/ data/{{ $darnimieki->id }}/darbiniekiedit" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt </h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $darbinieki->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="Vards" class="form-label"> Vārds </label>
    <input type= "text" class="form-control" value="{{$darbinieki->Vards}}" id="Vards" name="Vards" placeholder="Ievadiet vārdu">

     <label for="Uzvards" class="form-label"> Uzvārds </label>
    <input type= "text" class="form-control" value="{{$darbinieki->Uzvards}}" id="Uzvards" name="Uzvards" placeholder="Ievadiet uzvārdu">


</div>


<button type="submit" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Saglabāt izmaiņas</button>
<a href="/data/darbinieki" class="btn" style="background-color: #fff; color: #000; border: 1px solid #000;">Atcelt</a>

</div>
@endsection
</form>

