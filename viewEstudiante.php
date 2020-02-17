<?php
    include('header.php');
?>
<?php
        if(!empty($_GET["id_student"])){
            $id_student = $_GET["id_student"];
            $name = $_GET["name"]." ";
            $lastname = $_GET["lastname"];
?>
            <section class="content">
            <h1>Lista de Notas</h1>
            <h2>Estudiante <?php echo $name, $lastname; ?> </h2>
            <div>
                <table border="2px">
                    <tr>
                        <th>Practica</th>
                        <th>Nota</th>
                    </tr>
                    
                        <?php
                            include('conexion/conec.php');

                            
                            $query = "SELECT `ratings`.*, `practices`.* FROM `ratings` LEFT JOIN `students` ON `ratings`.`id_student` = `students`.`id` LEFT JOIN `practices` ON `ratings`.`id_practice` = `practices`.`id` WHERE `students`.`id` = $id_student";
                            $students = mysqli_query($conexion, $query) or die ("Error al SELECT:".mysqli_errno($conexion));
                            foreach($students as $student){
                                echo'
                                    <tr>
                                    <td>'.$student["number"].' - '.$student["title"].'</td>
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