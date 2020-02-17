<?php
    include('header.php');
?>

        <section class="content">
            <h1>Lista de Notas</h1>
            <button><a href="createNota.php">Asignar Nueva Nota</a></button>
            <div>
                <table border="2px">
                    <tr>
                        <th>Estudiante</th>
                        <th>Practica</th>
                        <th>Nota</th>
                    </tr>
                    
                        <?php
                            include('conexion/conec.php');
                            $query = "SELECT `ratings`.*, `students`.`name`, `practices`.`title`, `practices`.`number`, `students`.`lastname`, `students`.`id`
                            FROM `ratings` 
                                LEFT JOIN `students` ON `ratings`.`id_student` = `students`.`id` 
                                LEFT JOIN `practices` ON `ratings`.`id_practice` = `practices`.`id`;";
                            $students = mysqli_query($conexion, $query) or die ("Error al SELECT:".mysqli_errno($conexion));
                            foreach($students as $student){
                                echo'
                                    <tr>
                                    <td><a href="viewEstudiante.php?id_student='.$student["id"].'&name='.$student["name"].'&lastname='.$student["lastname"].'">'.$student["name"].' '.$student["lastname"].'</a></td>
                                    <td><a href="viewPractica.php?id_practice='.$student["id_practice"].'&title='.$student["title"].'">'.$student["number"].' - '.$student["title"].'</a>
                                    </td>
                                    <td>'.$student["qualification"].'</td>
                                    </tr>    
                                ';
                            }

                        ?>
                    
                </table>
                <aside>
                    <p>visitame en youtube</p>
                    <p>face123</p>
                </aside>
            </div>
        </section>


<?php
    include('footer.php');
?>