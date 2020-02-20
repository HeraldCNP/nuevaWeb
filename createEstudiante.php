<?php
    include('header.php')
?>
        <section class="content">
            <div>
                <div class="form">
                    <form action="storeEstudiante.php" method="POST" onsubmit="return validate()">
                        <label>Nombres<input type="text" name="name" id="name" autofocus/></label>
                        <label>Apellidos<input type="text" name="lastname"
							/></label>
                        <label>Registro Universitario<input type="text" id="ru" name="ru"
							/></label>
                        <label>Carnet de Identidad<input type="number" name="ci"
							/></label>
                        <label>Correo Electronico<input type="email" name="email"
							/></label>
                        <label>Pagina Web<input type="url" name="web"/></label>

                        <div id="alert"></div>
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