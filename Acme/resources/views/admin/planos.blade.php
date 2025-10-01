@extends('admin.layouts.main')

@section('contenido')
<div class="d-flex justify-content-between">
  <h1>Planos</h1>
  <div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Agregar Plano
    </button>
  </div>
</div>
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
  @if($errors->any())
    <div class="alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<div class="p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del plano</th>
      <th scope="col">Plano</th>
      <th scope="col">fecha de subida</th>
      <th scope="col">fecha de actualizacion</th>
      <th scope="col">Version del plano</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($planos as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name_plano}}</td>
        <td>{{$item->archivo_pdf}}</td>
        <td>{{$item->fecha_subida}}</td>
        <td>{{$item->fecha_actualizacion}}</td>
        <td>{{$item->version}}</td>
        
        <td><button class='btn btn-danger btnEliminar'
        data-id="{{ $item->id }}"
        data-toggle="modal" data-target="#modalDelete">
          <i class="fa fa-trash"></i>
        </button></td>
    </tr>
    @endforeach
   
  </tbody>
</table>

</div>
<!-- Modal add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregando Plano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <form action="/dashboard/planos" method="POST">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Nombre del Plano</label>
          <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
          <div class="form-group">
            <label for="name">Plano</label>
            <input value="{{ old('nickname') }}" name="plano"  type="text" class="form-control" id="nickname" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Fecha de subida</label>
            <input value="{{ old('email') }}" name="fecha_s" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="password">Fecha de actualizacion</label>
            <input value="{{ old('password') }}" name="fecha_a"  type="date" class="form-control" id="password" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="password1">Version del plano</label>
            <input name="version" type="number" class="form-control" id="password2" aria-describedby="emailHelp">
          </div>



        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <form action="/dashboard/users" method="POST">
        @csrf
      <div class="modal-body">
        <h2>¿Deseas eliminar el plano?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
   // alert("hola")
   $(document).ready(function(){
      $(".btnEliminar").on('click',function(event){
          var id=$(this).data('id')
          alert(id)
      });
   })
</script>
@endsection