@extends('home')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Curso</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo electronico</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profesores as $profesor)
            <tr class="">
                <td scope="row">{{$profesor->id}}</td>
                <td>{{$profesor->nombre}}</td>
                <td>{{$profesor->apellido}}</td>
                <td>{{$profesor->curso}}</td>
                <td>{{$profesor->edad}}</td>         
                <td>{{$profesor->telefono}}</td>
                <td>{{$profesor->email}}</td>
                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$profesor->id}}">
                Editar
                </button>
                
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$profesor->id}}">
                Borrar
                </button>
                </td>
            </tr>
            @include('profesores.info')
            @endforeach
            
        </tbody>
    </table>
</div>
@include('profesores.create')

@endsection