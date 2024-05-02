

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuarios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('usuarios.store')}}" method="post">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input
                type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder=""/>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input
                type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder=""/>
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