<?php
include("conexion.php");
$stmt = $conexion->prepare("SELECT idPreguntaCliente, DescripcionPregunta from preguntascliente where id_tipo_pregunta = 1 and idPreguntaCliente <= 10");
$stmt->execute();
$preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
include("conexion.php");
$query = "SELECT c.id_Cliente, r.idregistros, c.Nombres, c.Apellidos, c.NoDPI, c.No_telefono, c.Correo_electronico,TIMESTAMPDIFF(YEAR,c.Fecha_nacimiento,CURDATE()) AS edad ,c.Estatura, r.fecha_inicio from  registros as r inner join clientes as c on r.id_cliente = c.id_Cliente order by r.idregistros desc;";
$stmt1 = $conexion->prepare($query);
$stmt1->execute();
$tablas1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- FORMULARIO DATOS GENERALES CLIENTE -->
<dialog id="modal_datos_generales">
    <div class="container">
        <div class="info-container" id="InfoCont">
            <!-- <div class="container-form"> -->
            <div id="btn_cancelarDatosG" class="btn_cancelar">
                <i class="fa-solid fa-circle-xmark ex"> </i>
                <!-- <ion-icon name="close-circle-sharp" class="ex"></ion-icon> -->
                <!-- <ion-icon name="barbell-outline"></ion-icon> -->
            </div>
            <header>REGISTRO GENERAL</header>
            <br />
            <div class="progressbar">
                <div class="progressbar__option">
                    <p>Información general</p>
                </div>
                <div class="progressbar__option">
                    <p>Historial clínico</p>
                </div>
                <div class="progressbar__option">
                    <p>Historial clínico</p>
                </div>
                <div class="progressbar__option">
                    <p>Condición energía</p>
                </div>
            </div>

            <div class="form-principalDT">
                <form id="form_datosg" action="Registro" method="post">
                    <!-- PAGINA NO 1 DATOS GENERALES -->
                    <div class="pagina movPag">
                        <div class="gridpagina">
                            <div class="titulo bloc3">
                                <ion-icon name="person-sharp"></ion-icon> Datos Generales
                            </div>

                            <!-- Nombres -->
                            <div class="campo">
                                <div class="label">
                                    Nombres <b class="error" id="txtnombresCliente-error"></b>
                                </div>

                                <span id="icoError" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                <input type="text" id="txtnombresCliente" name="txtnombresCliente" placeholder="Nombres" />
                            </div>

                            <!-- Apellidos -->
                            <div class="campo">
                                <div class="label">
                                    Apellidos
                                    <b class="error" id="txtxapellidosCliente-error"></b>
                                </div>
                                <div id="icoError" class="input-icon"> <ion-icon name="text-sharp"></ion-icon></div>
                                <input type="text" name="txtApellidosCliente" id="txtxapellidoCliente" placeholder="Apellidos" />
                            </div>

                            <!-- Correo Electrónico -->
                            <div class="campo">
                                <div class="label">
                                    Correo Electrónico
                                    <b class="error" id="txtcorreoCliente-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="mail-outline"></ion-icon></span>
                                <input type="text" name="txtcorreoCliente" id="txtcorreoCliente" placeholder="Correo Electrónico" />
                            </div>
                            <!-- Fecha Nacimiento -->
                            <div class="campo">
                                <div class="label">
                                    Fecha Nacimiento
                                    <b class="error" id="txtfechaNacimiento-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                <input type="date" name="txtfechaNacimiento" id="txtfechaNacimiento" style="height: calc(100% - 2px)" />
                            </div>

                            <!-- NO DPI -->
                            <div class="campo">
                                <div class="label">
                                    CUI
                                    <b class="error" id="txtxcuic-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="text-sharp"></ion-icon></span>
                                <input type="text" name="txtxCUIC" id="txtxCUIC" placeholder="CUI" />
                            </div>

                            <!-- Sexo -->
                            <div class="campo">
                                <div class="label">
                                    Sexo<b class="error" id="sexo-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                <select name="txtsexo" id="txtsexo"  >
                                    <option value="-1" disabled selected>Seleccionar</option>
                                    <option value="0">Femenino</option>
                                    <option value="1">Masculino</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid3">
                            <!-- Teléfono -->
                            <div class="campo">
                                <div class="label">
                                    No. Teléfono
                                    <b class="error" id="txtTelefono-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="call-sharp"></ion-icon></span>
                                <input style="width:100%; height: 100%; padding: 0; margin: 0;  padding-left: 40px;  " type="tel" name="txtTelefono" id="txtTelefono" />
                                <input type="hidden" id="telC" name="telC" class="hide" />
                            </div>
                            <!-- Edad -->
                            <div class="campo">
                                <div class="label">
                                    Edad
                                    <b class="error" id="txtEdad-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="text-sharp"></ion-icon></span>
                                <input type="text" name="txtEdad" id="txtEdad" placeholder="Edad" readonly />
                            </div>

                            <!-- Estatura -->
                            <div class="campo">
                                <div class="label">
                                    Estatura
                                    <b class="error" id="txtEstatura-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"><ion-icon name="text-sharp"></ion-icon></span>
                                <input type="number" name="txtEstatura" id="txtEstatura" placeholder="Estatura" min="1" step="0.01" style="margin: 0; border-radius: 0;" />
                                <div class="medidaEstatura">
                                    <select name="estaturaSelect" id="estaturaSelect" style="height: 100%;">
                                        <option value="ft">ft</option>
                                        <option value="cm">cm</option>
                                    </select>
                                </div>
                            </div>
                            <!-- </div>
              
                          <div class="grid3"> -->
                            <div class="titulo bloc3"><ion-icon name="person-sharp"></ion-icon> Datos Emergencia</div>

                            <!-- Nombres -->
                            <div class="campo">
                                <div class="label">
                                    Nombres
                                    <b class="error" id="txtnombresEmergencia-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="text-sharp"></ion-icon></span>
                                <input type="text" name="txtnombresEmergencia" id="txtnombresEmergencia" placeholder="Nombres" />
                            </div>

                            <!-- Apellidos -->
                            <div class="campo">
                                <div class="label">
                                    Apellidos
                                    <b class="error" id="txtapellidosEmergencia-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="text-sharp"></ion-icon></span>
                                <input type="text" name="txtapellidosEmergencia" id="txtapellidosEmergencia" placeholder="Apellidos" />
                            </div>

                            <!-- Teléfono -->
                            <div class="campo">
                                <div class="label">
                                    No. Teléfono<b class="error" id="txttelefonoEmergencia-error"></b>
                                </div>
                                <span id="icoError" class="input-icon"> <ion-icon name="call-sharp"></ion-icon></span>
                                <input style="margin: 0; padding: 0; padding-left: 40px;   height: 100%; " type="tel" name="txttelefonoEmergencia" id="txttelefonoEmergencia" />
                                <input type="hidden" name="telE" id="telE" />
                            </div>
                        </div>
                        <div class="campo bloc3">
                            <button class="sigPag" name="btn_cliente" id="btn_siguienteDT" value="Insertar_Cliente" type="button">
                                Siguiente
                            </button>
                        </div>
                    </div>

                    <!-- PAGINA NO 2 HISTORIAL CLINICO 1   -->
                    <div class="pagina">
                        <div class="gridpagina">
                            <div class="titulo bloc3">
                                <ion-icon name="person-sharp"></ion-icon> Historial Clínico - Parte 1
                            </div>
                            <?php $contador = 0;

                            foreach ($preguntas as $pregunta) {
                                $contador++; ?>
                                <!-- Pregunta 1 -->
                                <div class="campo-pregunta">
                                    <div class="label">
                                        <?php echo $pregunta['idPreguntaCliente'] . ") " . $pregunta['DescripcionPregunta'] ?>
                                    </div>


                                    <input type="radio" name="radio<?php echo $contador ?> " value="si" id="si<?php echo $contador ?> " />
                                    <label class="lblPregunta" for="si<?php echo $contador ?> ">Si</label>



                                    <input type="text" name="id_Pregunta<?php echo $contador ?>" value="<?php echo $pregunta['idPreguntaCliente'] ?>" style="display:none;">

                                    <input type="radio" name="radio<?php echo $contador ?> " id="no<?php echo $contador ?>" value="no" checked="checked" />
                                    <label class="lblPregunta" for="no<?php echo $contador ?>">No</label>
                                </div>

                            <?php } ?>

                            <div class="campo btns bloc3">
                                <button class="volver-pag1 volver" type="button">Atras</button>
                                <button class="adelante-pag3 adelante" type="button">Siguiente</button>
                            </div>
                        </div>
                    </div>

                    <!-- PAGINA NO 3 HISTORIAL CLINICO 2 -->
                    <div class="pagina pagHistorial">
                        <div class="gridpagina">
                            <div class="titulo bloc3">
                                <ion-icon name="person-sharp"></ion-icon> Historial Clínico - Parte
                                2
                            </div>
                            <?php
                            include("conexion.php");
                            $stmt = $conexion->prepare("SELECT idPreguntaCliente, DescripcionPregunta from preguntascliente where id_tipo_pregunta = 1 and idPreguntaCliente >= 11");
                            $stmt->execute();
                            $preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            $contador = 10;
                            foreach ($preguntas as $pregunta) {
                                $contador++; ?>

                                <div class="campo-pregunta">
                                    <div class="label">
                                        <?php echo $pregunta['idPreguntaCliente'] . ") " . $pregunta['DescripcionPregunta'] ?>
                                    </div>


                                    <input type="radio" name="radio<?php echo $contador ?>" value="si" id="si<?php echo $contador ?>" />
                                    <label class="lblPregunta" for="si<?php echo $contador ?>">Si</label>



                                    <input type="text" name="id_Pregunta<?php echo $contador ?>" value="<?php echo $pregunta['idPreguntaCliente'] ?>" style="display:none;">
                                    <input type="radio" name="radio<?php echo $contador ?>" id="no<?php echo $contador ?>" value="no" checked="checked" />
                                    <label class="lblPregunta" for="no<?php echo $contador ?>">No</label>

                                </div>
                            <?php } ?>
                            <br />

                            <!-- Observaciones -->
                            <div class="campo-pregunta bloc3">
                                <div class="label">
                                    Observaciones<b class="error" id="numCel-error"></b>
                                </div>
                                <textarea id="observaciones" name="observacion1" rows="3"></textarea>
                            </div>

                            <div class="campo btns bloc3">
                                <button class="volver-pag2 volver" type="button">Atras</button>
                                <button class="adelante-pag4 adelante" type="button">Siguiente</button>
                            </div>
                        </div>
                    </div>

                    <!-- PAGINA NO 4 CONDICIONES DE ENERGIA -->
                    <div class="pagina">
                        <div class="gridpagina">
                            <div class="titulo bloc3">
                                <ion-icon name="person-sharp"></ion-icon> Condiciones de energía
                            </div>

                            <?php
                            include("conexion.php");
                            $stmt = $conexion->prepare("SELECT idPreguntaCliente,DescripcionPregunta from preguntascliente where id_tipo_pregunta = 2");
                            $stmt->execute();
                            $preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            $contador = 20;
                            foreach ($preguntas as $pregunta) {
                                $contador++;
                                if ($pregunta['idPreguntaCliente'] < 24) {
                                }

                            ?>

                                <div class="campo-pregunta ocultarC">
                                    <div class="label">
                                        <?php echo $pregunta['idPreguntaCliente'] . ") " . $pregunta['DescripcionPregunta'] ?>
                                    </div>
                                    <input type="radio" name="radio<?php echo $contador ?>" value="si" id="si<?php echo $contador ?>" />
                                    <label class="lblPregunta" for="si<?php echo $contador ?>">Si</label>

                                    <input type="text" name="id_Pregunta<?php echo $contador ?>" value="<?php echo $pregunta['idPreguntaCliente'] ?>" style="display:none;">
                                    <input type="radio" name="radio<?php echo $contador ?>" id="no<?php echo $contador ?>" value="no" checked="checked" />
                                    <label class="lblPregunta" for="no<?php echo $contador ?>">No</label>

                                </div>

                                <?php if ($pregunta['idPreguntaCliente'] > 23) { ?>
                                    <div class="campo-pregunta  ocultarC">
                                        <input type="text" name="id_Pregunta<? echo $contador ?>" value="" style="display:none;">

                                        <div class="label">
                                            <?php echo $pregunta['idPreguntaCliente'] . ") " . $pregunta['DescripcionPregunta'] ?>
                                        </div>
                                        <input type="text" class="inputPre" style="border: 1px solid #b8b8b8; border-radius: 5px; width:80%; margin-left: 5px; " name="radio<?php echo $contador ?>" />
                                    </div>
                            <?php
                                }
                            }
                            ?>


                            <div class="titulo bloc3">¿Cómo considera su nivel de?</div>
                            <!-- NIVELES DE ENERGIA -->
                            <div class="campo-estrella">
                                <div class="label">
                                    1) ¿Cómo considera su salud?
                                    <b class="error" id="numCel-error"></b>
                                </div>
                                <div class="star-rating">
                                    <!-- <p>Puntuación</p> -->
                                    <button type="button" id="star" class="star-salud" title="Muy Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-salud" title="Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-salud" title="Regular">&#9734;</button>
                                    <button type="button" id="star" class="star-salud" title="Buena">&#9734;</button>
                                    <button type="button" id="star" class="star-salud" title="Excelente">&#9734;</button>
                                    <br />
                                    <input type="text" name="star1" class="rating-salud" value="Elegir" readonly />
                                </div>
                            </div>
                            <!-- Condición fisica -->
                            <div class="campo-estrella">
                                <div class="label">
                                    2) ¿Cómo considera su condición física?
                                    <b class="error" id="numCel-error"></b>
                                </div>
                                <div class="star-rating">
                                    <!-- <p>Puntuación</p> -->
                                    <button type="button" id="star" class="star-fisico" title="Muy Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-fisico" title="Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-fisico" title="Regular">&#9734;</button>
                                    <button type="button" id="star" class="star-fisico" title="Buena">&#9734;</button>
                                    <button type="button" id="star" class="star-fisico" title="Excelente">&#9734;</button>
                                    <br />
                                    <input type="text" name="star2" class="rating-fisico" value="Elegir" readonly />
                                </div>
                            </div>

                            <!-- Condición nutricional -->
                            <div class="campo-estrella">
                                <div class="label">
                                    3) ¿Cómo considera su condición nutricional?
                                    <b class="error" id="numCel-error"></b>
                                </div>
                                <div class="star-rating">
                                    <!-- <p>Puntuación</p> -->
                                    <button type="button" id="star" class="star-nutricion" title="Muy Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-nutricion" title="Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-nutricion" title="Regular">&#9734;</button>
                                    <button type="button" id="star" class="star-nutricion" title="Buena">&#9734;</button>
                                    <button type="button" id="star" class="star-nutricion" title="Excelente">&#9734;</button>
                                    <br />
                                    <input type="text" name="star3" class="rating-nutricion" value="Elegir" readonly />
                                </div>
                            </div>

                            <!-- Condición Estres -->
                            <div class="campo-estrella">
                                <div class="label">
                                    4) ¿Cómo considera su condición de estrés?
                                    <b class="error" id="numCel-error"></b>
                                </div>
                                <div class="star-rating">
                                    <!-- <p>Puntuación</p> -->
                                    <button type="button" id="star" class="star-estres" title="Muy Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-estres" title="Mala">&#9734;</button>
                                    <button type="button" id="star" class="star-estres" title="Regular">&#9734;</button>
                                    <button type="button" id="star" class="star-estres" title="Buena">&#9734;</button>
                                    <button type="button" id="star" class="star-estres" title="Excelente">&#9734;</button>
                                    <br />
                                    <input type="text" name="star4" class="rating-estres" value="Elegir" readonly />
                                </div>
                            </div>

                            <div class="campo btns bloc3">
                                <button class="volver-pag3 volver">Atras</button>
                                <button type="submit" value="insertar_cliente" name="accion" class="Fin">
                                    Finalizar
                                </button>
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
</dialog>