@extends('home')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha de inicio</th>
                <th scope="col">Fecha de fin </th>
                <th scope="col">Hora de Inicio</th>
                <th scope="col">Hora de Finalizacion</th>
                <th>Opciones</th>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
            <tr class="">
                <td scope="row">{{$curso->id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->descripcion}}</td>
                <td>{{$curso->fecha_inicio}}</td>
                <td>{{$curso->fecha_fin}}</td>
                <td>{{$curso->inicio}}</td>
                <td>{{$curso->fin}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$curso->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$curso->id}}">
                Borrar
                </button>
                </td>
            </tr>
            @include('cursos.info')
            @endforeach

        </tbody>
    </table>
</div>
@include('cursos.create')

@endsection