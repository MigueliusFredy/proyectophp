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
            <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo electronico</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr class="">
                <td scope="row">{{$alumno->id}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->edad}}</td>
                <td>{{$alumno->fecha_nacimiento}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>{{$alumno->email}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$alumno->id}}">
                Editar
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$alumno->id}}">
                Borrar
                </button>
                </td>
            </tr>
            @include('alumnos.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('alumnos.create')

@endsection