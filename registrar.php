<?php include "includes/header.php"; ?>
<h1>Cree su cuenta</h1>

<section>
    <form action="" method="">
        <div class="registro">
            <div class="labels">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="labels">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" id="usuario">
            </div>
            <div class="labels">
                <label for="apodo">Apodo:</label>
                <input type="text" name="apodo" id="apodo">
            </div>
            <div class="labels">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
            </div>

        </div>

        <div class="botones">
            <a href="">Ya tengo cuenta</a>
            <a href="">Crear cuenta</a>
        </div>
    </form>
</section>

<?php include "includes/footer.php"; ?>