<?php

?>
<?php include "includes/header.php" ?>
<h1>Iniciar Sesión bien</h1>
<section>

    <form action="" method="POST">
        <div class="registro">
            <div class="labels">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario">
            </div>
            <div class="labels">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
            </div>

            <div class="labels">
            <a href="registrar.php" class="">No tengo cuenta</a>
            <input type="submit" value="Crear Cuenta">
            </div>
            
        </div>

    </form>
</section>
<?php include "includes/footer.php"; ?>