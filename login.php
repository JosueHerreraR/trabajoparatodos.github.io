<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <link rel="icon" type="image/jpg" href="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de sección</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        
        <div class="container-form">
            <div class="form-register">
                <form action="controlador/controlador_validar.php" class="formulario" method="post">
                    <img src="img/QROO.webp" class="avatar" alt="Avatar Image">
                    <h2>Bienvenidos</h2>
                    <h3>Inicio de sesión</h3>
                        <?php
                            include "modelo/conexion.php";
                        ?>
                    <label class="label" for="usuario">Usuario</label>
                    <input name="usuario" id="usuario" class="controls" type="text" placeholder="Ingresa tu Usuario">
                    <label class="label" for="contraseña">Contraseña</label>
                    <input name="contraseña" id="input" class="controls" type="password" placeholder="Ingresa tu Contraseña">
                    <input class="submit-btn" type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </div>

    </body>
</html>
