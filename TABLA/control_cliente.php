    <!-- FORMULARIO CONTROL CLIENTE  -->
    <dialog id="modal_control_cliente">
        <div class="contenido1">
            <div class="container-controlc">
                <div class="info-containercc" id="InfoCont">
                    <!-- <div class="container-form"> -->
                    <div id="btn_cancelarCCliente" class="btn_cancelar">
                        <i class="fa-solid fa-circle-xmark ex"> </i>
                    </div>

                    <header>CONTROL CLIENTE</header>
                    <br />
                    <div class="container_detalle">
                        <div class="detalle_cliente">
                            <div class="detalle-input">
                                <label id="txtidC" for="txt_id">Id: </label>
                                <input type="text" name="txt_id" id="txt_id" readonly />
                                <label for="txt_nombresssD">Nombre: </label>
                                <input type="text" id="txt_nombreD" readonly />
                            </div>

                            <div class="detalle-input">
                                <label for="txt_correoD">Correo electrónico: </label>
                                <input type="text" id="txt_correoD" readonly />
                            </div>
                            <div class="detalle-input">
                                <label for="txt_edadD">Edad: </label>
                                <input type="text" id="txt_edadD" readonly />
                                <label for="txt_alturaD">Altura: </label>
                                <input type="text" id="txt_alturaD" readonly />
                            </div>
                        </div>
                        <div class="imageD">
                            <img class="image-containerD" src="img/fitness.png" alt="" />
                        </div>
                    </div>

                    <div class="form-medidas">
                        <form id="form_control_cliente" method="POST" action="ControlCliente">
                            <input type="text" name="txt_idRegControl" id="txt_idRegControl" readonly class="hide" />
                            <!-- PAGINA NO 1 DATOS GENERALES -->
                            <div class="pagina movPagCC">
                                <div class="gridpagina">
                                    <div class="titulo bloc3">
                                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                        Control Peso
                                    </div>
                                    <!-- Peso -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Peso <b class="error" id="peso-error"></b>
                                        </div>
                                        <span id="icoErrorCC" class="input-icon"><i class="fa fa-krw" aria-hidden="true"></i></span>
                                        <input type="number" name="txtPeso" id="txtPeso" placeholder="Peso" min="1" step="0.01" />

                                        <div class="medida">
                                            <select name="Mpeso" id="txtmedida">
                                                <option value="lb">lb</option>
                                                <option value="kg">kg</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Grasa campo -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Grasa Corporal<b class="error" id="grasa-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtGrasa" name="txtGrasac" placeholder="Grasa corporal" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida">
                                                <option value="0">%</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Agua -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Porcentaje Agua <b class="error" id="agua-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txt_aguaPorc" name="aguaP" placeholder="Porcentaje Agua" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida">
                                                <option value="0">%</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- Masa Muscular-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Masa Muscular<b class="error" id="masa-error"></b>
                                        </div>

                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtMasaM" name="masaM" placeholder="Masa Muscular" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida" name="MMuscular" id="MMuscular">
                                                <option value="lb">lb</option>
                                                <option value="kg">kg</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Valor Físico-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Valor Físico <b class="error" id="fisicoV-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtFisicoV" name="valorF" placeholder="Valor Físico" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida">
                                                <option value="0">%</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Metabolismo Basal -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Metabolismo Basal<b class="error" id="metabolismoB-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" name="metabolismoB" id="txtMetabolismoB" placeholder="Metabolismo Basal" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida">
                                                <option value="0">cal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Edad Metabolica-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Edad Metabolica <b class="error" id="edadMet-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtEdadMet" name="edadM" placeholder="Edad Metabolica" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida"></select>
                                        </div>
                                    </div>

                                    <!-- Masa Ósea-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Masa Ósea<b class="error" id="masaOs-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtMasaOsea" name="masaO" placeholder="Masa Ósea" min="1" step="0.01" />
                                        <div class="medida">
                                            <select name="Mmasao" id="txtmedida">
                                                <option value="lb">lb</option>
                                                <option value="kg">kg</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Grasa Visceral-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Grasa Visceral <b class="error" id="grasaVi-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa fa-percent" aria-hidden="true"></i>
                                        </div>
                                        <input type="number" id="txtGrasaVi" name="grasaV" placeholder="Grasa Visceral" min="1" step="0.01" />
                                        <div class="medida">
                                            <select id="txtmedida">
                                                <option value="0">%</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-medida bloc3">
                                    <button class="sigPagCC" name="btn_clientecc" id="btn_clientecc" >
                                        Siguiente
                                    </button>
                                </div>
                            </div>

                            <!-- PAGINA NO 2 MEDIDAS CORPORALES -->
                            <div class="pagina">
                                <div class="gridpagina">
                                    <div class="titulo bloc3">
                                        <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                        Control Medidas Corporales
                                    </div>

                                    <!-- Pectoral -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Pectoral <b class="error" id="pectoral-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="number" id="txtPectoral" name="txtPextoral" placeholder="Pectoral" min="1" step="0.01" />
                                        <div class="medida">
                                            <select name="pectoralM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Dorsal -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Dorsal <b class="error" id="dorsal-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="number" id="txtDorsal" name="txtDorsal" placeholder="Dorsal" min="1" step="0.01" />
                                        <div class="medida">
                                            <select name="dorsalM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Biceps-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Biceps
                                            <b class="error" id="biceps-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="text" id="txtBiceps" name="txtBiceps" placeholder="Biceps" />
                                        <div class="medida">
                                            <select name="bicepsM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Antebrazos-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Antebrazos
                                            <b class="error" id="antebrazos-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="text" id="txtAntebrazos" name="txtAntebrazos" placeholder="Antebrazos" />
                                        <div class="medida">
                                            <select name="antebrazosM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Cintura -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Cintura <b class="error" id="cintura-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="number" id="txtCintura" name="txrCintura" placeholder="Cintura" min="1" step="0.01" />
                                        <div class="medida">
                                            <select name="cinturaM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Cadera-->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Cadera<b class="error" id="cadera-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="number" id="txtCadera" name="txtCadera" placeholder="Cintura" min="1" step="0.01" />
                                        <div class="medida">
                                            <select name="caderaM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Muslo -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Muslo<b class="error" id="muslo-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="text" id="txtMuslo" name="txtMuslo" placeholder="Muslo" />
                                        <div class="medida">
                                            <select name="musloM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Pantorrilla -->
                                    <div class="campo-medida">
                                        <div class="label">
                                            Pantorrilla <b class="error" id="pantorrilla-error"></b>
                                        </div>
                                        <div id="icoErrorCC" class="input-icon">
                                            <i class="fa-solid fa-ruler"></i>
                                        </div>
                                        <input type="text" id="txtPantorrila" name="txtPantorrila" placeholder="Pantorrilla" />
                                        <div class="medida">
                                            <select name="pantM" id="txtmedida">
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="campo-medida btns bloc3">
                                        <button type="button" class="volver-pag1CC volver">
                                            Atras
                                        </button>
                                        <!--                                            class="finCC"-->
                                        <button type="submit" name="accion" id="btnControlC1" value="insertar_controlCliente">Aceptar</button>
                                    </div>
                                </div>
                            </div>

                            <!-- FIN FORM -->
                        </form>
                        <!-- </div> -->
                    </div>
                </div>

                <!-- imagen -->
                <div class="image-container">
                    <div class="logo">
                        <img src="img/LogoGym.png" alt="">
                        <div class="nombre-empresa">
                            <h3 style="letter-spacing: 4px; font-size: 24px;">LA FÁBRICA</h3>
                            <p style="font-size: 11px;">★ Gimnasio & Cross training ★</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="image2">
                        <img src="img/fun8.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </dialog>