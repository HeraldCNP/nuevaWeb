<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema para AUXS</title>

    <link rel="stylesheet" href="css/style.css" />
    <script>
        function valid() {
            if (confirm("Realmente desea eliminar?")) {
                return true;
            }
            return false;
        }

        function validate() {

            valor = document.getElementById("name").value;
            console.log(valor);
            if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
                // alert('[ERROR] El campo debe ser texto');
                document.getElementById('alert').innerHTML = '<p>el campo Nombre debe estar lleno y contener solo letras</p>';
                return false;
            }

            valor = document.getElementById("ru").value;
            if (isNaN(valor) || valor == null || valor.length == 0) {
                // alert('[ERROR] El campo debe ser numero');
                document.getElementById('alert').innerHTML = '<p>el campo RU debe estar lleno y contener solo números</p>';
                
                return false;
            }
            return true;
        }
    </script>
</head>

<body>

    <div class="contenedor">
        <header>
            <h1 class="title">Auxiliatura</h1>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="estudiantes.php">Estudiantes</a></li>
                    <li><a href="practicas.php">Practicas</a></li>
                    <li><a href="#">Asistencia</a></li>
                    <li><a href="notas.php">Notas</a></li>
                </ul>
            </nav>
        </header>
        <hr />