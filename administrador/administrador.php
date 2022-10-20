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
        <title>Administrador</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../css/estilos.css">
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
    
        <section class="content casillas">
            
            <h2 class="title">Administrador</h2>
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-users-cog"></i>
                    <h3>Administrar Usuarios</h3>
                    <form>
                        <button class="btn" onclick="javascript: form.action='administrar-usuario.php';"><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
                <div class="box">
                    <i class="fas fa-wrench"></i>
                    <h3>Menu del Administrador</h3>
                    <form>
                        <button class="btn" onclick="javascript: form.action='menu-administrador.php';"><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
            </div>
            
        </section>
    
        <footer>
            <div class="derechos">
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
            </div>  
        </footer>

    </body>
<html>
