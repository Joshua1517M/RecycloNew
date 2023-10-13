@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Usuario</h1>
    <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empleado.form', ['modo'=>'Guardar'])
    </form>
</div>
@endsection