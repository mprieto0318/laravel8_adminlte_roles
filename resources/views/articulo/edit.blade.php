@extends('adminlte::page')

@section('title', 'EDITAR REGISTRO')

@section('content_header')
    <h1>EDITAR REGISTRO</h1>
@stop

@section('content')
<form action="/articulos/{{$data->id}}" method="POST">
  <!-- La directiva "method" es para especificar que la peticion es una actualización  -->
  @method('PUT')

  <!-- La directiva "csrf" es obligatoria para enviar el formulario -->
  @csrf   

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{$data->codigo}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$data->descripcion}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$data->cantidad}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">precio</label>
    <input type="text" class="form-control" id="precio" name="precio" value="{{$data->precio}}">
  </div>

  <div class="mb-3">
    <a hre="/articulos" class="btn btn-secundary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
  </div>

  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop