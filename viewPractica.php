<?php
    include('header.php');
?>
<?php
        if(!empty($_GET["id_practice"])){
            $id_practice = $_GET["id_practice"]." ";
            $title = $_GET["title"];
?>
            <section class="content">
            <h1>Lista de Notas</h1>
            <h2>Practica <?php echo $title; ?> </h2>
            <div>
                <table border="2px">
                    <tr>
                        <th>Estudiante</th>
                        <th>Nota</th>
                    </tr>
                    
                        <?php
                            include('conexion/conec.php');
                            $query = "SELECT `ratings`.*, `students`.`name`, `students`.`lastname`, `practices`.*
                            FROM `ratings` 
                                LEFT JOIN `students` ON `ratings`.`id_student` = `students`.`id` 
                                LEFT JOIN `practices` ON `ratings`.`id_practice` = `practices`.`id`
                            WHERE `practices`.`id` = $id_practice;";
                            $students = mysqli_query($conexion, $query) or die ("Error al SELECT:".mysqli_errno($conexion));
                            foreach($students as $student){
                                echo'
                                    <tr>
                                    <td>'.$student["name"].' '.$student["lastname"].'</td>
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
        }else{
            echo "no hay datos";
        }
        ?>




<?php
    include('footer.php');
?>