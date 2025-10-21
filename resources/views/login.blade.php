@extends ('layouts.app')

@section('content')

<h1>Datu bāze  - LOGIN</h1>

<br>

<!-- autentifikācija -->

<h1>LOGIN</h1>
<div class="form-group">

<form method="POST" action="/loginp" class="container" style="max-width: 40%;">
  
  @csrf
  
  <label class="form-label" for="name">Login</label><br>
  <input class="form-control" type="text" id="name" name="name"><br>
  <label class="form-label" for="password">Parole:</label><br>
  <input class="form-control" type="password" id="password" name="password">
  <button type="submit" class="btn btn-primary mt-3">Ienākt</button>
</form>

</div>




<h1>Registr</h1>
<div class="form-group">

<form method="POST" action="/register" class="container" style="max-width: 40%;">
  
  @csrf
  
  <label class="form-label" for="name">Login</label><br>
  <input class="form-control" type="text" id="name" name="name"><br>
  <label class="form-label" for="password">Parole:</label><br>
  <input class="form-control" type="password" id="password" name="password">
  <button type="submit" class="btn btn-primary mt-3">Registrēties</button>
</form>

</div>

<a href="/data/allData" class="btn btn-success">Apskatīt visus datus</a>
@endsection



<!-- Sānu izvēlne -->
@section('scon')

<!-- <h1>Dati - sānu izvēlne</h1> -->

<div class="col mb-3" bis_skin_checked="1"> <h5>Sānu izvelne</h5> 
<ul class="nav flex-column"> 
    <li class="nav-item mb-2">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Jauns</a></li> 
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Drukāt</a></li> 
    </ul> 
</div>

@endsection
