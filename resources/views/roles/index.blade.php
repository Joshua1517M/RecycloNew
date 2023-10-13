@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Roles</h1>

    @can('crear-rol')
    <a href="{{ url('/roles/create') }}" class="btn btn-primary mb-3">Nuevo Rol</a>
    @endcan

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Rol</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->name}}</td>
                <td>
                    <div class="d-grid gap-2 d-xl-block">
                        @can('editar-rol')
                        <a href="{{route('roles.edit', $role->id)}}" class="btn btn-success">Editar</a>
                        @endcan
                        @can('borrar-rol')
                        <form action="{{route('roles.destroy', $role->id)}}" class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" onclick="return confirm('¿Quieres borrar el rol?')"
                                class="btn btn-danger" value="Borrar">
                        </form>
                        @endcan
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination justify-content-end">
        {!! $roles->links() !!}
    </div>

</div>
@endsection
