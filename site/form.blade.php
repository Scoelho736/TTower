@extends('site.master.layout')

@section('content')
<br>
<form class="row g-1  position-absolute top-100" style="height: 400px;width:950px;margin-top:40px;margin-left:30px">
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Apto</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-2">
    <label for="inputAddress" class="form-label">Andar</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-3">
    <label for="inputAddress2" class="form-label">Numero Apto</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-3">
    <label for="inputCity" class="form-label">Ramal</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>



@endsection
