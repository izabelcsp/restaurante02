<?php
    session_start();
    echo "usuario:". $_SESSION['usuarioNome'];

?>
<br>
<a href="sair.php">Sair</a>