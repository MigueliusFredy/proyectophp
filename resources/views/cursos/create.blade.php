<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('cursos.store')}}" method="post">
        @csrf
      <div class="modal-body">
      <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input
                type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=""/>
        </div>
       <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input
                type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input
                type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha de Finalizacion</label>
            <input
                type="date" class="form-control" name="fecha_fin" id="fecha_fin" aria-describedby="helpId" placeholder=""/>
        </div>
         <div class="mb-3">
            <label for="inicio" class="form-label">Hora de inicio</label>
            <input
                type="time" class="form-control" name="inicio" id="inicio" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="fin" class="form-label">Hora de Salida</label>
            <input
                type="time" class="form-control" name="fin" id="fin" aria-describedby="helpId" placeholder=""/>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
     </form>
    </div>
  </div>
</div>