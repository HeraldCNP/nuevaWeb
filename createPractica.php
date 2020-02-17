<?php
    include('header.php');
?>  
    <section class="content">
            <div>
                <div class="form">
                    <form action="storePractica.php" method="POST">
                        <label>Titulo<input type="text" name="title" autofocus/></label>
                        <label>Numero<input type="number" name="number"
							/></label>
                        <label>Creditos<input type="text" name="credit"
							/></label>
                        <button class="btnEnviar" type="submit">Registrar</button>
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