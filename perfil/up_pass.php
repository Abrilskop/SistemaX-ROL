<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $_SESSION['nick'];
    $pass = $con->real_escape_string(string: htmlentities(string: $_POST['pass1']));
    
    // Corregir la función de hashing de la contraseña
    $pass = sha1(string: $pass); // Corregido de 'shal' a 'sha1'
    
    // Corregir la consulta SQL
    $up = $con->query(query: "UPDATE usuario SET pass='$pass' WHERE nick='$nick'");

    if ($up) {
        header(header: 'location:../extend/alerta.php?msj=Password actualizada&c=pe&p=perfil&t=success');
    } else {
        header(header: 'location:../extend/alerta.php?msj=La password no pudo ser actualizada&c=pe&p=perfil&t=error');
    }

    $con->close();
} else {
    header(header: 'location:../extend/alerta.php?msj=Utiliza el formulario&c=CARPETA&p=PAGINA&t=TIPO');
}
?>
