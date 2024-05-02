<!-- Modal  edit -->
<div class="modal fade" id="edit{{$curso->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('cursos.update',$curso->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input
                type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value="{{$curso->id}}"/>
        </div>
       <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$curso->nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input
                type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" value="{{$curso->descripcion}}"/>
        </div>
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input
                type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId" placeholder="" value="{{$curso->fecha_inicio}}"/>
        </div>
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha de Finalizacion</label>
            <input
                type="date" class="form-control" name="fecha_fin" id="fecha_fin" aria-describedby="helpId" placeholder="" value="{{$curso->fecha_fin}}"/>
        </div>
         <div class="mb-3">
            <label for="inicio" class="form-label">Hora de inicio</label>
            <input
                type="time" class="form-control" name="inicio" id="inicio" aria-describedby="helpId" placeholder="" value="{{$curso->inicio}}"/>
        </div>
        <div class="mb-3">
            <label for="fin" class="form-label">Hora de Salida</label>
            <input
                type="time" class="form-control" name="fin" id="fin" aria-describedby="helpId" placeholder="" value="{{$curso->fin}}"/>
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




<div class="modal fade" id="delete{{$curso->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('cursos.destroy',$curso->id)}}" method="post">
        @csrf
        @method('delete')
      <div class="modal-body">
        
            Estás seguro de eliminar el curso <strong>{{$curso->nombre}}?</strong>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>







