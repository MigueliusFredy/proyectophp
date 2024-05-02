<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Profesor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('profesores.store')}}" method="post">
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
            <label for="apellido" class="form-label">Apellido</label>
            <input
                type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="curso" class="form-label">Curso</label>
            <input
                type="text" class="form-control" name="curso" id="curso" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input
                type="text" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder=""/>
        </div>
         <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input
                type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input
                type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder=""/>
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