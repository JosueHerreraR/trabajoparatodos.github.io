<?php
    session_start();
?>

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
        <title> Actualizar-Semestre</title>
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
                <h1 class="head">ACTUALIZAR INFORMACION</h1>
            </div>
        </section>

        <section>

            <div class="container-form">
                <div class="cont-form">
                    <h2>Actualización de la Infraestructura</h2>
                    <form action="">
                        <label for="No"> No </label>
                        <input type="number" value="Ingrese los Números">
                        <label for=""> NOMBRE DE LA INSTITUCION EDUCATIVA </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MODALIDAD DE ESTUDIO </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> PERIODO DEL CICLO ESCOLAR </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> ALUMNOS REGISTRADOS EN PAENMS </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MATRICULA DE INICIAL </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MATRICULA DE TERMINO </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>EGRESADOS </h2> 
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>BAJA TEMPORAL</h2>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>MOTIVO DE LA DESERCION</h2>
                        <label for=""> CAMBIO DE ESTADO </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text"value="Ingrese los datos">
                        <h2>SALUD</h2>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>EMBARAZO</h2>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>SITUACION ECONOMICA</h2>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>OTROS</h2>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>TOTAL</h2>
                        <label for=""> HOMBRE </label>
                        <input type="text"value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>REPROBADOS </h2>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>CON VULNERABILIDAD</h2>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <h2>CON VULNERABILIDAD ATENDIDOS</h2>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <input class="boton" type="submit" value="Actualizar">
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

    </body>
</html>
