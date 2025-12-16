<div class="container-fluid page cont__gral_public">

    <section class="card">
        <header class="head">
            <h1>Registro de vehículo</h1>
            <p>Por favor llene toda la información solicitada, se verificará en las próximas 48 horas.</p>
            <div class="rule"></div>
        </header>

        <form class="form" action="#" method="post">
            <!-- Columna izquierda -->
            <div class="col left">
                <div class="field">
                    <label for="clase">Clase de vehículo</label>
                    <div class="select-wrap">
                        <select id="clase" name="clase" required>
                            <option value="" selected disabled>Seleccione</option>
                            <option>Automóvil</option>
                            <option>Moto</option>
                            <option>Camioneta</option>
                            <option>Camión</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="marca">Marca</label>
                    <div class="select-wrap">
                        <select id="marca" name="marca" required>
                            <option value="" selected disabled>Seleccione</option>
                            <option>Toyota</option>
                            <option>Chevrolet</option>
                            <option>Renault</option>
                            <option>Kia</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="modelo">Modelo</label>
                    <input id="modelo" name="modelo" type="text" placeholder="" required />
                </div>

                <div class="field">
                    <label for="placa">Placa</label>
                    <input id="placa" name="placa" type="text" placeholder="" required />
                </div>

                <div class="field">
                    <label for="color">Color</label>
                    <input id="color" name="color" type="text" placeholder="" required />
                </div>

                <div class="field">
                    <label for="combustible">Tipo de combustible</label>
                    <div class="select-wrap">
                        <select id="combustible" name="combustible" required>
                            <option value="" selected disabled>Seleccione</option>
                            <option>Gasolina</option>
                            <option>Diésel</option>
                            <option>Híbrido</option>
                            <option>Eléctrico</option>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label for="capacidad">Capacidad de pasajeros</label>
                    <div class="select-wrap">
                        <select id="capacidad" name="capacidad" required>
                            <option value="" selected disabled>Seleccione</option>
                            <option>2</option>
                            <option>4</option>
                            <option>5</option>
                            <option>7</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Columna derecha -->
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
