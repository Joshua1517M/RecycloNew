@extends('layouts.app')

@section('content')
<div class="container">
<h1>Editar Usuario</h1>
    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('empleado.form', ['modo'=>'Actualizar'])
    </form>
</div>
@endsection