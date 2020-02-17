<?php
    include('header.php');
?>

        <section class="content">
            <div class="form">
                <form action="storeNota.php" method="POST">
                    <label>Estudiante
                    <select name="id_student" id="id_student">Seleccione un Estudiante
                        <?php
                            include('conexion/conec.php');
                            $query ="SELECT * FROM students";
                            $students = mysqli_query($conexion, $query) or die ("error al select".mysqli_errno($conexion));
                            foreach($students as $student){
                                echo '
                                    <option value="'.$student["id"].'">'.$student["name"].' '.$student["lastname"].'</option>
                                ';
                            }
                        ?>
                    </select>
                    </label>
                    <label>Practica
                    <select name="id_practice" id="id_practice">Seleccione una Practica
                        <?php
                            include('conexion/conec.php');
                            $query ="SELECT * FROM practices";
                            $practices = mysqli_query($conexion, $query) or die ("error al select".mysqli_errno($conexion));
                            foreach($practices as $practice){
                                echo '
                                    <option value="'.$practice["id"].'">'.$practice["number"].' - '.$practice["title"].'</option>
                                ';
                            }
                        ?>
                    </select>
                    </label>
                    <label>Calificacion <input type="number" name="nota" pattern="\d" maxlength="3" minlength="5"></label>
                    <button class="btnEnviar" type="submit">Registrar</button>
                </form>
                <aside>
                    <p>visitame en youtube</p>
                    <p>face123</p>
                </aside>
            </div>
        </section>

<?php
    include('footer.php');
?>