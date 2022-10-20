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
        <title>Busqueda-Usuarios</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>    
    <body>

        <section class="hero" id="hero">
            <div class="container">
                <h1 class="head">BUSQUEDA DE USUARIOS</h1>
            </div>
        </section>
        
        <section>
            <div class="container-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>INSTITUCION</th>
                            <th>USUARIO</th>
                            <th>CONTRASEÑA</th> 
                            <th>ACTUALIZAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td>CECYTECANCÚN</td>
                            <td>Lupita Perez Sosa</td>
                            <td>1234</td>
                            <td><a href="actualizar-usuario.php"> <button class="boton">Actualizar</button></a></td>
                            <td><a href="eliminar-usuario.php"> <button class="boton">Eliminar</button></a></td>    
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </section>
        
        <script src="../js/menu_responsive.js"></script>
        <script src="../js/header.js"></script>
    </body>
<html>