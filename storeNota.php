<?php
include('conexion/conec.php');
    if(!empty($_POST["id_student"])){
        $id_student = $_POST["id_student"];
        $id_practice = $_POST["id_practice"];
        $nota = $_POST["nota"];

        $query = "INSERT INTO ratings VALUES(NULL, '$id_student', '$id_practice', '$nota', NULL)";
        mysqli_query($conexion, $query) or die ("error al insertar").mysqli_errno($conexion);

        echo'<script>alert(\"Nota insertada\")</script>';
        echo'<script>location.href="notas.php";</script>';

    }else{
        echo "no hay datos";
    }
?>