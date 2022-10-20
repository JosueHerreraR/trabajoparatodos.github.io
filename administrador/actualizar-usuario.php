<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <title>Actualizar-Usuario</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>    
    <body>   
        
        <section class="hero" id="hero">
            <div class="container">
                <h1 class="head">ACTUALIZAR USUARIO</h1>
            </div>
        </section>

        <section>

            <div class="container-form">
                <div class="cont-form">
                    <h2>PREPARATORIA ...</h2>
                    <form action="actualizar-usuario.php" method="POST">
                        <input name="email" type="text" placeholder="Ingrese un correo electronico">
                        <input name="password" type="password" placeholder="Ingrese una Contraseña">
                        <input name="confirm_password" type="password" placeholder="Confirme su Contraseña">
                        <input class="boton" type="submit" value="Actualizar">
                    </form> 
                </div>
            </div>

        </section>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>     
    </body>
<html>