<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <title>Menu de administración</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>    
    <body>   
        <header>
            <div class="img-logo">
                <img src="../img/QROO.webp" alt="">
                <img src="../img/seq-logo.png" alt="">
            </div>

            <div class="user">
                <button class="datos">
                    <?php
                        echo $_SESSION["usuario"];
                    ?>
                </button>
                <nav class="opciones">
                    <li><a href="../controlador/controlador_cerrar_session.php">Cerrar Sesión</a></li>
                </nav>
            </div>
        </header>

        <section class="hero" id="hero">
            <div class="container">
                <h1 class="head">MENU PRINCIPAL DE ADMINISTRACIÓN</h1>
            </div>
        </section>

        <section class="content casillas">
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-users-cog"></i>
                    <h3>Administrar Usuarios</h3>
                    <form action="administrar-usuario.php" method="POST">
                        <button class="btn"><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
                <div class="box">
                    <i class="fas fa-envelope-open"></i>
                    <h3>Reportes</h3>
                    <form action="reportes.php" method="POST"> 
                        <button class="btn" ><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
                <div class="box">
                    <i class="fas fa-inbox"></i>
                    <h3>Envio de correos</h3>
                    <form action="enviar-correo.php" method="POST">
                        <button class="btn"><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="derechos">
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
            </div>  
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="js/menu_responsive.js"></script>
        <script src="js/header.js"></script>

    </body>
<html>