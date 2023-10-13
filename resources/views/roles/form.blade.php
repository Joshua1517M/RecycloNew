<div class="row g-3">

    <div class="col-mb-3">
        <label class="form-label" for="Rol">Nombre del Rol</label>
        <input class="form-control" type="text" name="name" value="{{ isset($roles->name)?$roles->name:'' }}"
            pattern="[A-Za-zzñÑáéíóúü0-9 ]{3,25}" required type="text">
    </div>
    <div class="col-mb-3">
        <label class="form-label" for="Rol">Permisos del Rol</label>
        @foreach($permission as $value)
        <div class="form-check">
            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                <label class="form-check-label" for="flexCheckDefault">{{ $value->name }}</label>
        </div>
        @endforeach
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/roles') }}" type="text" class="btn btn-success">Regresar</a>
    </div>

</div>