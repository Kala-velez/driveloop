<div class="container-fluid page cont__gral_public">

    <section class="card">
        <header class="head">
            <h1>Registro de vehículo</h1>
            <p>Por favor llene toda la información solicitada, se verificará en las próximas 48 horas.</p>
            <div class="rule"></div>
        </header>

        <form class="form" action="#" method="post">
            @csrf
            <!-- Columna izquierda -->
            <div class="col left">
                <div class="field">
                    <label for="clase">Tipo de vehículo</label>
                    <div class="select-wrap">
                        <select id="clase" name="clase" required>
                            <option value="" selected disabled>Tipo de vehículo</option>
                            @foreach ($tipoVeh as $tipoveh)
                                <option value="{{ $tipoveh->cod }}">{{ $tipoveh->des }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="marca">Marca</label>
                    <div class="select-wrap">
                        <select id="marca" name="marca" required>
                            <option value="" selected disabled>Seleccione la marca del vehiculo</option>
                            @foreach ($marcaVeh as $marcaveh)
                                <option value="{{ $marcaveh->cod }}">{{ $marcaveh->des }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="marca">Linea</label>
                    <div class="select-wrap">
                        <select id="linea" name="linea" required disabled>
                            <option value="" selected disabled>Seleccione primero una marca</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="marca">Tipo de conbustible</label>
                    <div class="select-wrap">
                        <select id="marca" name="marca" required>
                            <option value="" selected disabled>Seleccione el tipo de combustible</option>
                            @foreach ($tipoCombust as $tipocombust)
                                <option>{{ $tipocombust->des }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="content__inputs">
                    <div class="field input__color">
                        <label for="placa">Color</label>
                        <input id="placa" name="placa" type="text" placeholder="Color del vehiculo" required />
                    </div>

                    <div class="field">
                        <label for="placa">Modelo</label>
                        <input id="placa" name="placa" type="text" placeholder="Modelo" required />
                    </div>

                    <div class="field">
                        <label for="placa">Placa</label>
                        <input id="placa" name="placa" type="text" placeholder="Placa" required />
                    </div>

                    <div class="field">
                        <label for="placa">Cilindraje</label>
                        <input id="placa" name="placa" type="text" placeholder="Cilindraje" required />
                    </div>
                </div>
            </div>

            <!-- Columna derecha -->
            {{-- Esta parte alimenta la tabla pivot  --}}
            <div class="col right">
                <p class="section-title">Por favor seleccione los accesorios del vehículo.</p>

                <div class="checks">
                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="airbag" />
                        <span>Airbag</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="aire" />
                        <span>Aire acondicionado</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="bluetooth" />
                        <span>Bluetooth</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="usb" />
                        <span>Cargador USB</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="gps" />
                        <span>GPS</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="camara" />
                        <span>Cámara de reversa</span>
                    </label>

                    <label class="check">
                        <input type="checkbox" name="accesorios[]" value="sensor" />
                        <span>Sensor de parqueo</span>
                    </label>
                </div>

                <p class="section-title mt">Por favor seleccione la ubicación donde se encuentra el vehículo.</p>

                <div class="row2">
                    <div class="field">
                        <label for="depto">Departamento</label>
                        <div class="select-wrap">
                            <select id="depto" name="departamento" required>
                                <option value="" selected disabled>Seleccione</option>
                                <option>Valle del Cauca</option>
                                <option>Antioquia</option>
                                <option>Cundinamarca</option>
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <label for="muni">Municipio</label>
                        <div class="select-wrap">
                            <select id="muni" name="municipio" required>
                                <option value="" selected disabled>Seleccione</option>
                                <option>Cali</option>
                                <option>Medellín</option>
                                <option>Bogotá</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn" type="submit">Registrar vehículo</button>
            </div>
        </form>
    </section>
</div>
