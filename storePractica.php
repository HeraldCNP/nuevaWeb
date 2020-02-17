<?php
    if(!empty($_POST['title'])){
        include('conexion/conec.php');
        $title = $_POST['title'];
        $number = $_POST['number']; 
        $credit = $_POST['credit'];

        $query = "INSERT INTO practices VALUES(NULL, '$title', '$number', '$credit')";
        mysqli_query($conexion, $query) or die ("Error al insertar:".mysqli_errno($conexion));

        echo "<script>alert(\"Practica registrada\")</script>";
        echo "<script>location.href='practicas.php';</script>";
    }else{
        echo "No hay datos";
    }
?>