<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="./css/colores.css">
    <link rel="stylesheet" href="css/estilo_tabla_registro.css" />
    <link rel="stylesheet" href="css/estilo_form_registro.css" />
    <link rel="stylesheet" href="css/estilo_form_control.css" />
    <link rel="stylesheet" href="css/estilo_form_modificar.css">
    <link rel="stylesheet" href="css/estilo_verMedidas.css" />

    <!--        scripts pagina-->
    <script src="lib/sweetalert2.min.js"></script>
    <!--iconos -->
    <script src="lib/all.min.js"></script>
    <script src="lib/jQuery3.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</head>

<body>
    <?php include("./registro_usuario.php"); ?>
    <?php include("./control_cliente.php"); ?>
    <?php include("./modificar_cliente.php"); ?>
    <!-- CONTENEDOR VER FILAS -->
    <dialog id="modalControlMedida">
        <div class="containerControl">
            <div class="containerCMedida">
                <div class="form">
                    <form id="frmModif" method="post" action="usuarios">
                        <!-- Tabla CONTROL PESO -->
                        <div class="ContainerTablePeso">
                            <div class="headingf">
                                <h2>Control Peso</h2>
                            </div>

                            <div class="TablaCpeso">
                                <table id="tablePeso" class="tablePeso">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Peso</th>
                                            <th>Grasa corporal</th>
                                            <th>% agua</th>
                                            <th>M. muscular</th>
                                            <th>Valor fisico</th>
                                            <th>M. basal</th>
                                            <th>Edad metabolica</th>
                                            <th>Masa osea</th>
                                            <th>Grasa visceral</th>
                                            <th>Hora y fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody id="TablaControlPeso">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Tabla CONTROL PESO -->
                        <div class="ContainerTablePeso">
                            <div class="headingf">
                                <h2>Medidas Corporales</h2>
                            </div>
                            <div class="TablaCpeso">
                                <table id="tablePeso" class="tablePeso">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pectoral</th>
                                            <th>Dorsal</th>
                                            <th>Biceps</th>
                                            <th>Antebrazos</th>
                                            <th>Cintura</th>
                                            <th>Cadera</th>
                                            <th>Muslo</th>
                                            <th>Pantorrilla</th>
                                            <th>Hora y fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody id="TablaControlMedidas">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="btns">

                            <button type="button" id="btnCancelarMedida" name="accion" value="Cancelar Medida">
                                Cancelar
                            </button>



                            <button type="button" id="btnVaciarControl" name="accion" value="Vaciar Control">
                                Vaciar Control
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </dialog>


    <!-- TABLE CLIENTES  -->
    <div class="table-cliente">
        <table id="datatable">
            <thead>
                <tr>
                    <th> &#10004;</th>
                    <th>No</th>
                    <th>idCliente</th>
                    <th>idRegistro</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CUI</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Estatura</th>
                    <th>Fecha Inicio</th>

                </tr>
            </thead>
            <tbody>
                <?php $contador = 0;
                foreach ($tablas1 as $tabla1) {
                    $contador++; ?>
                    <tr>

                        <td><?php echo $contador ?></td>
                        <td><?php echo $tabla1['id_Cliente'] ?></td>
                        <td><?php echo $tabla1['idregistros'] ?></td>
                        <td><?php echo $tabla1['Nombres'] ?></td>
                        <td><?php echo $tabla1['Apellidos'] ?> </td>
                        <td><?php echo $tabla1['NoDPI'] ?> </td>
                        <td><?php echo $tabla1['No_telefono'] ?> </td>
                        <td><?php echo $tabla1['Correo_electronico'] ?> </td>
                        <td><?php echo $tabla1['edad'] ?> </td>
                        <td><?php echo $tabla1['Estatura'] ?> </td>
                        <td><?php echo $tabla1['fecha_inicio'] ?> </td>
                    </tr>


                <?php } ?>

            </tbody>

        </table>
    </div>

    <script src="js/main_table_registro.js"></script>

    <script src="./js/prueba.js"></script>

    <script src="js/main_registro.js"></script>


    <script src="./js/main_form_control.js"></script>
    <script src="js/main_form_modificar.js"></script>
    <script src="js/modificar.js"></script>

</body>

</html>