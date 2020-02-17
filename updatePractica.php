<?php
    if(!empty($_POST['title'])){
        include('conexion/conec.php');
        $id = $_POST['id'];
        $title = $_POST['title'];
        $number = $_POST['number']; 
        $credit = $_POST['credit'];

        $query = "UPDATE practices 
                SET title='$title', number='$number', credit='$credit' 
                WHERE id='$id' ";
        mysqli_query($conexion, $query) or die ("Error al actualizar:".mysqli_errno($conexion));

        echo "<script>alert(\"Practica Actualizada\")</script>";
        echo "<script>location.href='practicas.php';</script>";
    }else{
        echo "No hay datos";
    }
?>