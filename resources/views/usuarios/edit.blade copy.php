@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Registrar Usuario</h1>
        <form action="{{ url('/usuarios/'.$usuarios->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            @include('usuarios.form', ['modo'=>'Guardar'])
        </form>
    </div>

</div>
@endsection
