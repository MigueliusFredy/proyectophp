

<!-- Modal edit-->
<div class="modal fade" id="edit{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$usuario->name}}"/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input
                type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" value="{{$usuario->email}}"/>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input
                type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder=""value="{{$usuario->password}}"/>
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









<!-- Modal delete-->
<div class="modal fade" id="delete{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('usuarios.destroy',$usuario->id)}}" method="post">
        @csrf
        @method('delete')
      <div class="modal-body">
    
            Estás seguro de eliminar al Usuario <strong>{{$usuario->name}}?</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>