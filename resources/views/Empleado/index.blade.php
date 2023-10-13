@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>
    <a href="{{ url('/empleado/create') }}" class="btn btn-primary mb-3">Registrar Nuevo Usuario</a>
    @if(Session::has('mensaje'))
    <div class="alert alert-primary" role="alert">
        {{Session::get('mensaje')}}
    </div>
    @elseif(Session::has('eliminar'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('eliminar')}}
    </div>
    @endif
    <div class="container">
        <form class="d-flex" action="{{ route('empleado.index')}}" method="GET">
            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar Usuario"
                aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <div class="tabla">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Fotografia</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->id}}</td>
                        <td>
                            <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="rounded float-start img-fluid"
                                width="150" alt="">
                        </td>
                        <td>{{$empleado->Nombre1}}</td>
                        <td>{{$empleado->Nombre2}}</td>
                        <td>{{$empleado->Apellido1}}</td>
                        <td>{{$empleado->Apellido2}}</td>
                        <td>{{$empleado->Correo}}</td>
                        <td>
                            <div class="d-grid gap-2 d-xl-block">
                                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"
                                    class="btn btn-success">Editar</a>
                                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" onclick="return confirm('¿Quieres borrar al usuario?')"
                                        class="btn btn-danger" value="Borrar">
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $empleados->links() !!}
    </div>
</div>
@endsection