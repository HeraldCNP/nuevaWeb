<?php

    include('conexion/conec.php');

    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $ru = $_POST['ru'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];
        $web = $_POST['web'];

        $query = "INSERT INTO students VALUES (NULL, '$name', '$lastname', '$ru', '$ci', '$email', '$web')";
        mysqli_query($conexion, $query)or die ("Problemas en el select".mysqli_errno($conexion));
        
        echo "<script> alert (\"Estudiante Registrado\"); </script>";
        echo "<script>location.href='estudiantes.php';</script>";
    }else{
        echo "no";
    }

?>