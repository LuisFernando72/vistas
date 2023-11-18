    <!--        FORMULARIO MODIFICAR CLIENTE-->
    <dialog id="ModalModificarCliente">

        <div class="containerModCliente">
            <div class="info-containerModCliente" id="InfoCont">
                <div id="btn_cancelarModCliente" title="Cerrar" class="btn_cancelarModCliente">
                    <i class="fa-solid fa-circle-xmark ex"> </i>
                </div>
                <header>ACTUALIZAR CLIENTE</header>
                <div class="form-principalMC">
                    <form id="operacionesCliente" action="Registro" method="post">
                        <div class="paginaMC movPag">
                            <div class="gridpaginaMC">
                                <div class="titulo bloc3">
                                    <ion-icon name="person-sharp"></ion-icon> Datos Generales
                                </div>
                                <!-- Nombres -->
                                <div class="campo">
                                    <div class="label">
                                        Nombres <b class="error" id="txtnombresM-error"></b>
                                    </div>
                                    <input type="text" id="txtidCliente" name="txtidCliente" class="hide" />

                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" id="txtnombresClienteM" name="txtnombresClienteM" placeholder="Nombres" />
                                </div>

                                <!-- Apellidos -->
                                <div class="campo">
                                    <div class="label">
                                        Apellidos
                                        <b class="error" id="txtxapellidosM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" name="txtApellidosClienteM" id="txtxapellidosClienteM" placeholder="Apellidos" />
                                </div>

                                <!-- Correo Electrónico -->
                                <div class="campo">
                                    <div class="label">
                                        Correo Electrónico
                                        <b class="error" id="txtcorreoM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input type="text" name="txtcorreoClienteM" id="txtcorreoClienteM" placeholder="Correo Electrónico" readonly />
                                </div>
                                <!-- Fecha Nacimiento -->
                                <div class="campo">
                                    <div class="label">
                                        Fecha Nacimiento
                                        <b class="error" id="txtfechaNacimientoM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input type="date" name="txtfechaNacimientoM" id="txtfechaNacimientoM" style="height:calc(100% - 2px);" />
                                </div>

                                <!-- NO DPI -->
                                <div class="campo">
                                    <div class="label">
                                        CUI
                                        <b class="error" id="txtxcuicM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" name="txtxCUICM" id="txtxCUICM" placeholder="CUI" />
                                </div>

                                <!-- Sexo -->
                                <div class="campo">
                                    <div class="label">
                                        Sexo<b class="error" id="sexoM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                    <select name="txtsexoM" id="txtsexoM">
                                        <option value="-1" disabled selected>Seleccionar</option>
                                        <option value="0">Femenino</option>
                                        <option value="1">Masculino</option>
                                        <option value="0">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid3">
                                <!-- Teléfono -->
                                <div class="campo">
                                    <div class="label">
                                        No. Teléfono
                                        <b class="error" id="txtTelefonoM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input style="padding-left: 42px; height:100%;" type="tel" name="txtTelefonoM" id="txtTelefonoM" />
                                    <input type="text" id="telC_mod" name="telC_mod" class="hide" />
                                </div>
                                <!-- Edad -->
                                <div class="campo">
                                    <div class="label">
                                        Edad
                                        <b class="error" id="txtEdadM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" name="txtEdadM" id="txtEdadM" placeholder="Edad" readonly />
                                </div>


                                <!-- Estatura -->
                                <div class="campo">
                                    <div class="label">
                                        Estatura
                                        <b class="error" id="txtEstaturaM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input type="text" name="txtEstaturaM" id="txtEstaturaM" placeholder="Estatura" min="1" step="0.01" />

                                </div>
                                <!-- </div>
                
                      <div class="grid3"> -->
                                <div class="titulo bloc3">Datos Emergencia</div>

                                <!-- Nombres -->
                                <div class="campo">
                                    <div class="label">
                                        Nombres
                                        <b class="error" id="txtnombresEM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" name="txtnombresEmergenciaM" id="txtnombresEmergenciaM" placeholder="Nombres" />
                                </div>

                                <!-- Apellidos -->
                                <div class="campo">
                                    <div class="label">
                                        Apellidos
                                        <b class="error" id="txtapellidosEM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input type="text" name="txtapellidosEmergenciaM" id="txtapellidosEmergenciaM" placeholder="Apellidos" />
                                </div>

                                <!-- Teléfono -->
                                <div class="campo">
                                    <div class="label">
                                        No. Teléfono<b class="error" id="txttelefonoEM-error"></b>
                                    </div>
                                    <span id="icoErrorMC" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                    <input style="padding-left: 42px; height:100%;" type="tel" name="txttelefonoEM" id="txttelefonoEM" />
                                    <input type="text" name="telEm_mod" id="telEm_mod" class="hide" />
                                </div>
                            </div>
                            <div class="campo bloc3">
                                <button class="finModificar" name="btn_modificarCliente" id="btn_modificarCliente" value="modificar_cliente" type="submit">
                                    Aceptar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </dialog>