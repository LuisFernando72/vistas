<?php
include("conexion.php");
$query = "SELECT  * from modulos where idRol = 3;";
$stmt1 = $conexion->prepare($query);
$stmt1->execute();
$mod = $stmt1->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU FULL</title>
    <link rel="stylesheet" href="css/estilo_menu.css">
    <link rel="stylesheet" href="css/estilo_form_menu.css">
    <script src="lib/jQuery3.js"></script>
    <script src="lib/sweetalert2.min.js"></script>
    <script src="lib/all.min.js"></script>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="img/LogoGym.png" alt="" />
            </div>
            <div class="nombreEmpresa">
                <span class="logo_name">LA FÁBRICA</span>
                <p>&#9733;Gimnasio & Cross training&#9733;</p>
            </div>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <?php foreach ($mod as $modulo) { ?>
                    <li>
                        <a href="<?php echo $modulo['link'] ?>" target="myFrame">
                            <div class="<?php echo $modulo['classDiv'] ?>">
                                <i class="<?php echo $modulo['Icono'] ?>"></i>
                            </div>
                            <span class="link-name"><?php echo $modulo['nombre'] ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>

            <ul class="logout-mode">
                <li>
                    <a href="Modulos?modulo=inicio" target="myFrame">
                        <div class="icon-background conf-ico">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <span class="link-name">Inicio</span>
                    </a>
                </li>


                <li class="mode">
                    <a href="#">
                        <div class="icon-background conf-ico">
                            <i class="fa-sharp fa-solid fa-moon"></i>
                        </div>
                        <span class="link-name" style="font-size: 13px">Modo Oscuro</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <div class="sidebar-toggle">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
            <div class="search-box">
                <div class="bienvenid">
                    <i>
                        <h4 id="txtUsuario"></h4>
                    </i>
                </div>

            </div>

            <div class="profile">
                <img id="txtImagenPerfil" alt="" />
                <ul class="profile-link show">
                    <li>
                        <a href="#" id="btnCambiarFoto"><i class="fa-solid fa-user"></i>Cambiar foto </a>
                    </li>
                    <li>
                        <a href="#" id="btnCambiarPass"><i class="fa-solid fa-gear"></i>Nueva contraseña</a>
                    </li>

                    <div class="buttonCerrarSesion">
                        <form action="CerrarSesion" method="POST">
                            <button name="btnCerrarSesion" id="btnCerrarSesion">
                                <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión
                            </button>
                        </form>
                    </div>

                </ul>
            </div>
        </div>

        <!--            IFRAME CARGANDO MODULOS-->
        <div class="dash-content">
            <iframe name="myFrame" id="myFrame" frameborder="0"></iframe>
        </div>
    </section>

    <dialog id="modalCambiarFoto">
        <div class="container">
            <div class="form">
                <h2>Foto de perfil</h2>
                <form action="Usuario" method="post" id="formCambiarFotoPerfil" enctype="multipart/form-data">
                    <div class="imageContainer">
                        <input type="text" name="idusu" id="idusu" value="<%=IdUser01%>" class="hide">
                        <input type="text" name="txtNameimg" id="txtNameimg" class="hide">
                        <input class="inputFile" type="file" id="txtFoto" name="txtFoto" onchange="previsualizar(event);" accept=".png, .jpg" />
                        <div class="ver-imagen">
                            <img id="txtImagenUsuario" />
                        </div>
                    </div>
                    <div class="btns">
                        <div class="inputBox">
                            <button type="button" id="btnCancelarimg">Cancelar</button>
                        </div>
                        <div class="inputBox">
                            <button type="submit" id="btnAceptarimg" name="accion" value="CambiarFotoPerfil">Aceptar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
    <!-- form cambiarContraseña -->
    <dialog id="modalCambiarPasswd">
        <div class="container">
            <div class="form">
                <h2>Cambiar Contraseña</h2>
                <form id="frmModificarPass" method="post" action="Usuario">
                    <!-- CONTRASEÑA ACTUAL -->
                    <input type="text" name="txt_idUser" value="<%=IdUser01%>" class="hide">
                    <div class="inputBox">
                        <label for="">Contraseña Actual</label>
                        <input type="password" id="paswd_actual" name="paswd_actual" placeholder="Contraseña actual" autocomplete="on" />

                        <span class="hide" id="eye-hide1">
                            <i class="fa solid fa-eye-slash"></i>
                        </span>
                        <span class="show" id="eye-show1"><i class="fa light fa-eye ico"></i>
                        </span>
                    </div>
                    <!-- NUEVA CONTRASEÑA -->
                    <div class="inputBox">
                        <label for="">Contraseña nueva</label>
                        <input type="password" id="passwd1" name="passwd1" placeholder="Contraseña nueva" autocomplete="on" />
                        <p id="textError1" class="textError"></p>
                        <span class="hide" id="eye-hide2">
                            <i class="fa solid fa-eye-slash"></i>
                        </span>
                        <span class="show" id="eye-show2"><i class="fa light fa-eye ico"></i>
                        </span>
                    </div>
                    <!-- REPETIR CONTRASEÑA -->
                    <div class="inputBox">
                        <label for="">Repetir Contraseña</label>
                        <input type="password" id="passwd2" name="passwd2" placeholder="confirmar contraseña" autocomplete="on" />
                        <p id="textError2" class="textError"></p>
                        <span class="hide" id="eye-hide3">
                            <i class="fa solid fa-eye-slash"></i>
                        </span>
                        <span class="show" id="eye-show3"><i class="fa light fa-eye ico"></i>
                        </span>
                    </div>
                    <div class="btns">
                        <div class="inputBox ">
                            <button type="button" id="btnCancelar">Cancelar</button>
                        </div>

                        <div class="inputBox ">
                            <button type="submit" id="btnAceptar" name="accion" value="ModificarPass" disabled>Aceptar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dialog>
    <script src="js/main_menu.js"></script>
</body>

</html>