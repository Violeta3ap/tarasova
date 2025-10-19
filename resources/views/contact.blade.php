@extends ('layout.app')

@section('content')










<form action="/data/NewSubmit" method="post">
@csrf

<div class="text-center">
    <h1>Ziņas nosūtīšana</h1>
</div>


<div class="container" style= "max-width: 40%">


<div class= "mb-3">
    <label for="name" class="form-label"> Vārds, uzvārds </label>
    <input type= "text" class="form-control" id="name" name="name" placeholder="Ievadiet vārdu un uzvārdu">
</div> 


<div class= "mb-3">
<label for="email" class="form-label"> E-pasts </label>
<input type= "email" class="form-control" id="email" name="email" placeholder="Ievadiet e-pastu">
</div> 

<div class= "mb-3">
<label for="subject" class="form-label"> Tēma </label>
<textarea class="form-control" id="subject" name="subject" rows="3"> </textarea>
</div> 

<div class= "mb-3">
<label for="message" class="form-label"> Ziņojuma teksts </label>
<textarea class="form-control" id="message" name="message" rows="3"> </textarea>
</div> 
<button type="submit" class="btn" style="background-color: #e49ecf; color: black"> nosutīt</button>

</form>
@endsection
