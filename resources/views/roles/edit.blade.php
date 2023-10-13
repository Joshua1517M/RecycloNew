@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Roles</h1>

    <form action="{{ url('/roles/'.$roles->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('roles.form', ['modo'=>'Guardar'])
    </form>

</div>
@endsection
