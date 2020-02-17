<?php
    include('header.php');
?>
        <section class="content">
            <div>
                <div class="form">
                    <form action="updateEstudiante.php" method="POST">
                        <?php
                            include('conexion/conec.php');
                            if(!empty($_GET["id"])){
                                $id=$_GET["id"];
                                $query = "SELECT * FROM students WHERE id=$id";
                                $students = mysqli_query($conexion, $query) or die("Error en el select:".mysqli_errno($conexion));
                                foreach($students as $student){
                                    echo'
                                    <input type="hidden" name="id" value="'.$student["id"].'"/>
                                    <label>Nombres<input type="text" name="name" value="'.$student["name"].'" autofocus/></label>
                                    <label>Apellidos<input type="text" name="lastname" value="'.$student["lastname"].'"
                                    /></label>
                                    <label>Registro Universitario<input type="number" name="ru" value="'.$student["ru"].'"
                                    /></label>
                                    <label>Carnet de Identidad<input type="number" name="ci" value="'.$student["ci"].'"
                                    /></label>
                                    <label>Correo Electronico<input type="email" name="email" value="'.$student["email"].'"
                                    /></label>
                                    <label>Pagina Web<input type="url" name="web" value="'.$student["web"].'"/></label>
                                    ';
                                }
                                
                            }else{
                                echo "no hay id";
                            }
                        ?>
                        <button class="btnEnviar" type="submit">Actualizar</button>
                    </form>
                </div>
                <aside>
                    <p>visitame en youtube</p>
                    <p>face123</p>
                </aside>
            </div>
        </section>
<?php
    include('footer.php');
?>