<?php
    if(!empty($_GET["id"])){
        include('conexion/conec.php');
        $id = $_GET["id"];
        $query = "DELETE FROM practices WHERE id=$id";
        mysqli_query($conexion, $query) or die ("Error al eliminar:".mysqli_errno($conexion));
        echo "<script>alert(\"Practica Eliminada\")</script>";
        echo "<script>location.href='practicas.php';</script>";
    }
?>