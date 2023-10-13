<div>
    <div class="row g-3">
    
        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
            {{ $error}}
            @endforeach
        </div>
        @endif
        <div class="row g-3">
            <div class="col col-mb-3 ">
                <label class="form-label" for="Nombre1">Primer Nombre</label>
                <input class="form-control" type="text" name="Nombre1"
                    value="{{ isset($empleado->Nombre1)?$empleado->Nombre1:'' }}" id="Nombre1"
                    pattern="[A-Za-zñÑáéíóúü ]{3,75}" required type="text">
            </div>
            <div class="col col-mb-3 ">
                <label class="form-label" for="Nombre2">Segundo Nombre</label>
                <input class="form-control" type="text" name="Nombre2"
                    value="{{ isset($empleado->Nombre2)?$empleado->Nombre2:'' }}" id="Nombre2"
                    pattern="[A-Za-zñÑáéíóúü ]{3,75}" required type="text">
            </div>
        </div>
        <div class="row g-3">
            <div class="col col-mb-3 ">
                <label class="form-label" for="Apellido1">Primer Apellidos</label>
                <input class="form-control" type="text" name="Apellido1"
                    value="{{ isset($empleado->Apellido1)?$empleado->Apellido1:'' }}" id="Apellido1"
                    pattern="[A-Za-zñÑáéíóúü ]{3,75}" required type="text">
            </div>
            <div class="col col-mb-3 ">
                <label class="form-label" for="Apellido2">Segundo Apellido</label>
                <input class="form-control" type="text" name="Apellido2"
                    value="{{ isset($empleado->Apellido2)?$empleado->Apellido2:'' }}" id="Apellido2"
                    pattern="[A-Za-zñÑáéíóúü ]{3,75}" required type="text">
            </div>
        </div>
        <div class="col-mb-3">
            <label class="form-label" for="Correo">Correo</label>
            <input class="form-control" required type="email" name="Correo"
                value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
        </div>
        <div class="col-mb-3">
            <div class="col-mb-3 pt-2">
                <label class="form-label" for="Foto">Foto</label>
                <input class="form-control" accept="image/png,image/jpeg" required type="file" name="Foto" value=""
                    id="Foto">
            </div>
            <div class="mb-3 p-2">
                @if(isset($empleado->Foto))
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="rounded float-start img-fluid" width="150"
                    alt="150">
                @endif
            </div>
        </div>
        <div class="mb-3">
            <input type="submit" value="{{ $modo }} datos" class="btn btn-primary" id="Enviar">
            <a href="{{ url('/empleado') }}" type="text" class="btn btn-success">Regresar</a>
        </div>
    </div>

</div>