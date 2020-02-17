<?php
    include('header.php');
?>

        <section class="content">
            <h1>Lista de Practicas</h1>
            <button><a href="createPractica.php">Crear Nuevo</a></button>
            <div>
                <table border="2px">
                    <tr>
                        <th>Titulo</th>
                        <th>Numero</th>
                        <th>Creditos</th>
                        <th>Acciones</th>
                    </tr>
                    
                        <?php
                            include('conexion/conec.php');
                            $query = "SELECT * FROM practices";
                            $practices = mysqli_query($conexion, $query) or die ("Error al SELECT:".mysqli_errno($conexion));
                            foreach($practices as $practice){
                                echo'
                                    <tr>
                                    <td>'.$practice["title"].'</td>
                                    <td>'.$practice["number"].'</td>
                                    <td>'.$practice["credit"].'</td>
                                    <td>
                                        <a href="deletePractica.php?id='.$practice["id"].'">Eliminar, </a>
                                        <a href="editarPractica.php?id='.$practice["id"].'">Editar</a>
                                    </td>
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