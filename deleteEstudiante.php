<?php
    if(!empty($_GET["id"])){
        include('conexion/conec.php');
        $id=$_GET["id"];
        $query = "DELETE FROM students WHERE id=$id";
        mysqli_query($conexion, $query) or die("error al eliminar:".mysqli_errno($conexion));
        echo "<script>alert(\"Estudiante Eliminado\")</script>";
        echo "<script>location.href='estudiantes.php';</script>";
    }else{
        echo "NO existe ID";
    }

?>