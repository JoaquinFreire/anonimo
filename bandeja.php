
<?php
/* # Iniciar sesión para usar $_SESSION
session_start();
# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: login.php");
    # Y salimos del script
    exit();
} */
?> 
<?php include "includes/header.php"; ?>
 <h1>Mensajes</h1>

        <article>
            <p>De: (Aca va el nombre ura!)</p>
            <div>
                <p>Mensaje: </p>
                <p>Aca va el mensaje</p>
            </div>
        </article>

        <article>
            <p>De: (Aca va el nombre ura!)</p>
            <div>
                <p>Mensaje: </p>
                <p>Aca va el mensaje</p>
            </div>
        </article>


        <?php include "includes/footer.php";?>

</body>
</html>