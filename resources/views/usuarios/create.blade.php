@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Registrar Usuario</h1>
        <form action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('usuarios.form', ['modo'=>'Guardar'])
        </form>
    </div>

</div>
@endsection
