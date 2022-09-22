<?php
# Iniciar sesión (sí, aunque la vamos a destruir, primero se debe iniciar)
session_start();
# Eso va a eliminar todo lo que haya en $_SESSION
session_destroy();
# Finalmente lo redireccionamos al formulario
header("Location: login.php"); 
