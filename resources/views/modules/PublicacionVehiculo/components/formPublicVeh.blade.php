<div class="container-fluid cont__gral_public">
    <div class="row">
        <p class="parrafos__pubVeh">
            Publica tu vehículo en DriveLoop y llega a cientos de conductores que buscan opciones confiables y seguras.
            Completa la información de tu vehículo y súbelo en pocos minutos.
        </p>
    </div>
    <div class="row fila__inputs_public">
        <h3 class="titulos__publ">Documentos del vehiculo</h3>
        {{-- <div class="col-md-3">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                    placeholder="" />
            </div>
        </div> --}}
        <div class="mb-3 col-md-3">
            <label for="" class="form-label">Tipo de documento</label>
            <select class="form-select form-select-md" name="" id="">
                <option>Seleccione Uno</option>
                @foreach ($documentosVeh as $coll)
                    <option value="{{ $coll->id }}">{{ $coll->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <div class="mb-3 input_form_public">
                <label for="" class="form-label">Numero de documento</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                    placeholder="" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3 input_form_public">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                    placeholder="" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3 input_form_public">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                    placeholder="" />
            </div>
        </div>
    </div>
</div>
