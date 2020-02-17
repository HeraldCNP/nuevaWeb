<?php
    include('header.php');
?>  
    <section class="content">
            <div>
                <div class="form">
                    <form action="updatePractica.php" method="POST">

                    <?php
                        include('conexion/conec.php');
                        if(!empty($_GET["id"])){
                            $id = $_GET["id"];
                            $query="SELECT * FROM practices WHERE id=$id";
                            $practices = mysqli_query($conexion, $query) or die("Error al select practicas:".mysqli_errno($conexion));
                            foreach($practices as $practice){

                                echo '
                                    <input type="hidden" name="id" value="'.$practice["id"].'">
                                    <label>Titulo<input type="text" name="title" value="'.$practice["title"].'" autofocus/></label>
                                    <label>Numero<input type="number" name="number" value="'.$practice["number"].'"/></label>
                                    <label>Creditos<input type="text" name="credit" value="'.$practice["credit"].'"/></label>
                                
                                ';
							
                            }
                        }else{
                            echo "error";
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