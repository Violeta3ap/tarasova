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




<form action="/ data/{{ $klienti->id }}/editSumbit" method="post">
    @csrf

      <div style="text-align: center;">
    <h1> Rediģēt ziņojumu</h1>


    <div class="container" style= "max-width: 40%">
    
<!--id pārsūtīšana--> 
<input type="hidden" value="{{ $klienti->id }}"  id="id" name="id">  

<div class= "mb-3">
    <label for="name" class="form-label"> Vārds </label>
    <input type= "text" class="form-control" value="{{$klienti->name}}" id="name" name="name" placeholder="Ievadiet vārdu">

     <label for="subject" class="form-label"> Tēma </label>
    <input type= "text" class="form-control" value="{{$klienti->subject}}" id="subject" name="subject" placeholder="Ievadiet Tēmu">


</div>

<div class= "mb-3">
    <label for="message" class="form-label"> Ziņojuma teksts </label>
    <textarea class="form-control"  id="message" name="message" rows="3" >{{$klienti->message}} </textarea>
</div>

<button type="submit" class="btn btn-primary">Saglabāt izmaiņas</button>
<a href="/data/klienti"  class="btn btn-danger">Atcelt</a>

</div>
@endsection
</form>

