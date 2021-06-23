@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CODIGO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">PRECIO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $value)

    <tr>
      <th scope="row">{{ $value->id }}</th>
      <th scope="row">{{ $value->codigo }}</th>
      <th scope="row">{{ $value->descripcion }}</th>
      <th scope="row">{{ $value->cantidad }}</th>
      <th scope="row">{{ $value->precio }}</th>
      <th scope="row">

        <form action="{{ route('articulos.destroy', $value->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/articulos/{{$value->id}}/edit" class="btn btn-info">Editar</a>
            <button type="submit" class="btn btn-danger">Borrar</button>

        </form>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#articulos').DataTable({
        "lengthMenu": [[5,10,50,-1], [5,10,50,"Todos"]]
      });
  } );
  </script>
@stop