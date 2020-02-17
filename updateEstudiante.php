<?php

    include('conexion/conec.php');



    if(!empty($_POST['name'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $ru = $_POST['ru'];
        $ci = $_POST['ci'];
        $email = $_POST['email'];
        $web = $_POST['web'];

        $query = "UPDATE students
                 SET name='$name', lastname='$lastname', ru='$ru', ci='$ci', email='$email', web='$web'
                 WHERE id = $id";
        mysqli_query($conexion, $query)or die ("Problemas en el select".mysqli_errno($conexion));
        
        echo "<script> alert (\"Estudiante Actualizado\"); </script>";
        echo "<script>location.href='estudiantes.php';</script>";
    }else{
        echo "no";
    }

?>