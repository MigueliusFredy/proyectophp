<!-- Modal edit-->
<div class="modal fade" id="edit{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Alumno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('alumnos.update',$alumno->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="modal-body">
      <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input
                type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=""  value="{{$alumno->id}}"/>
        </div>
       <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$alumno->nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input
                type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="" value="{{$alumno->apellido}}"/>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input
                type="text" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="" value="{{$alumno->edad}}"/>
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input
                type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" aria-describedby="helpId" placeholder=""value="{{$alumno->fecha_nacimiento}}"/>
        </div>
         <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input
                type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="" value="{{$alumno->telefono}}"/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input
                type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" value="{{$alumno->email}}"/>
        </div> 

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="delete{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Alumno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('alumnos.destroy',$alumno->id)}}" method="post">
        @csrf
        @method('delete')
      <div class="modal-body">
        
            Estás seguro de eliminar al Alumno <strong>{{$alumno->nombre}}?</strong>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>