

@extends ('home')


@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="">


            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electronico</th>
                
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr class="">
                <td scope="row">{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$usuario->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$usuario->id}}">
                Borrar
                </button>
                </td>
            </tr>
            @include('usuarios.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('usuarios.create')

@endsection 