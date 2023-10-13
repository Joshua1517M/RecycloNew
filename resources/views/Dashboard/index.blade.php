@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios y Roles</h1>

<div class="row">
    <div class="col-md-4 col-xl-4">

        <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h5>Usuarios</h5>
                @php
                use App\Models\User;
                $cant_usuarios = User::count();
                @endphp
                <h2 class="text-right"><i
                        class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                <p class="m-b-0 text-right"><a href="{{ url('/usuarios') }}" class="text-white">Ver más</a>
                </p>
            </div>
        </div>
    </div>
<!--esto es de la tarjeta contadora que redirecciona a usuarios {{ url('/usuarios') }}-->
    <div class="col-md-4 col-xl-4">
        <div class="card bg-c-green order-card">
            <div class="card-block">
                <h5>Roles</h5>
                @php
                use Spatie\Permission\Models\Role;
                $cant_roles = Role::count();
                @endphp
                <h2 class="text-right"><i
                        class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                <p class="m-b-0 text-right"><a href="{{ url('/roles') }}" class="text-white">Ver más</a></p>
            </div>
        </div>
    </div>
</div>
<!--esto es de la tarjeta contadora que redirecciona a roles {{ url('/roles') }}-->
</div>
@endsection
