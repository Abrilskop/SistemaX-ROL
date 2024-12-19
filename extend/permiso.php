<?php
    if ($_SESSION['nivel'] != 'ADMINISTRADOR' ) {
    header(header: "location:bloqueo.php");
}
?>