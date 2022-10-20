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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar-Semestre</title>
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
                <h1 class="head">REGISTRAR INFORMACION</h1>
            </div>
        </section>

        <section>

            <div class="container-form">
                <div class="cont-form">
                    <h2>Formulario de Educación Media Superior</h2>
                    <form action="">
                        <label for="No"> No </label>
                        <input type="number">
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
                        <label for=""> EFICENCIA TERMINAL (ENGRESADOS) </label>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> BAJA TEMPORAL </label>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MOTIVO DE LA DESERCION </label>
                        <label for=""> CAMBIO ESTADO </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> SALUD </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> EMBARAZO </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> SITUACION ECONOMICA </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> OTROS </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> TOTAL </label>
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> REPROBADOS </label>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> CON VULNERABILIDAD </label>
                        <label for=""> SEMESTRE </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> HOMBRE </label>
                        <input type="text" value="Ingrese los datos"> 
                        <label for=""> MUJER </label>
                        <input type="text" value="Ingrese los datos">
                        <label for=""> CON VULNERABILIDAD ATENDIDOS </label>
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
