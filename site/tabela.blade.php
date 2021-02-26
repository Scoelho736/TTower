@extends('site.master.layout')
@section('content')
<br>
<table class="table-bordered  border border-secondary rounded
position-absolute top-100" style="width:1000px;margin-top:4px;margin-left:30px">
  <thead class=" bg-secondary text-center text-light" >
    <tr>
      <th scope="col" >ID</th>
      <th scope="col">Nome do Morador</th>
      <th scope="col">Bloco</th>
      <th scope="col">Apto</th>
      <th scope="col">Vaga de Garagem</th>
      <th scope="col">Qtd Moradores Apto</th>
      <th scope="col">Opcoes</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Saulo</td>
      <td>A</td>
      <td>10</td>
      <td>2</td>
      <td>4</td>
      <td>
        <button type="button" class="btn btn-primary btn-sm">Editar</button>
        <button type="button" class="btn btn-danger  btn-sm text-center" style="height: 30px">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Susane</td>
      <td>B</td>
      <td>11</td>
      <td>2</td>
      <td>2</td>
      <td>
        <button type="button" class="btn btn-primary btn-sm">Editar</button>
        <button type="button" class="btn btn-danger  btn-sm text-center" style="height: 30px">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>William</td>
      <td>C</td>
      <td>12</td>
      <td>3</td>
      <td>3</td>
      <td>
      <button type="button" class="btn btn-primary btn-sm">Editar</button>
      <button type="button" class="btn btn-danger  btn-sm text-center" style="height: 30px">Delete</button>

      </td>
    </tr>
  </tbody>
</table>
@endsection
