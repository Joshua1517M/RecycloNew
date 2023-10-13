@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Roles</h1>

    <form action="{{ url('/roles') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('roles.form', ['modo'=>'Guardar'])
    </form>

</div>
@endsection
