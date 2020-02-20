<?php
    include('header.php'); 
?>
        <section class="content">
            <div>
                <h1>Administrar Estudiantes</h1>
                <button><a href="createEstudiante.php">Crear Nuevo</a></button>
                
                <table border="2">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>RU</th>
                            <th>CI</th>
                            <th>Email</th>
                            <th>Web</th>
                            <th>Acciones</th>
                        </tr>      
                    </thead>
                    <tbody>
                        <?php
                            include('conexion/conec.php');
                            $query="SELECT * FROM students";
                            $students = mysqli_query($conexion, $query) or die ("Error base de datos:".mysqli_errno($conexion));

                            foreach($students as $student){
                                
                                echo"
                                <tr>
                                    <td>".$student['name']."</td>
                                    <td>".$student['lastname']."</td>
                                    <td>".$student['ru']."</td>
                                    <td>".$student['ci']."</td>
                                    <td>".$student['email']."</td>
                                    <td>".$student['web']."</td>
                                    <td>
                                        <a href='deleteEstudiante.php?id=".$student['id']."' onclick='return valid()'>Eliminar</a>,
                                        <a href='editarEstudiante.php?id=".$student['id']."'>Editar</a>,
                                    </td>
                                </tr>  
                                ";

                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

<?php
    include('footer.php');
?>