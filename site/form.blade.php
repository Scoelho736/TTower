@extends('site.master.layout')

@section('content')
<br>
<form class="row g-1 bg-black-50 border border-secondary rounded
position-absolute top-100" style="height: 400px;width:900px;margin-top:40px;margin-left:30px">
  <div class="col-md-4" style="margin-top:40px;margin-left:70px">
    <label  class="form-label text-secondary">Nome Morador</label>
    <input  class="form-control" id="name">
  </div>
  <div class="col-md-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Bloco</label>
    <input class="form-control" id="bloco">
  </div>
  <div class="col-3"style="margin-top:40px">
    <label  class="form-label text-secondary">Apto</label>
    <input  class="form-control" id="apto" >
  </div>
  <div class="col-4"style="margin-top:-15px;margin-left:70px">
    <label class="form-label text-secondary">Vaga de Garagem</label>
    <input  class="form-control" id="garagem" >
  </div>
  <div class="col-md-3"style="margin-top:-15px">
    <label  class="form-label text-secondary">Qtd Moradores Apto</label>
    <input  class="form-control" id="qtdmoradores">
  </div>

  <div class="col-12"style="margin-top:-15px;margin-left:70px">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>



@endsection
