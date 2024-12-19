<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $_SESSION['nick'];
    $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $con->real_escape_string(htmlentities($_POST['correo']));

    // Corregir la consulta SQL (falta una comilla en el valor de 'nombre')
    $up = $con->query("UPDATE usuario SET nombre='$nombre', correo='$correo' WHERE nick='$nick'");

    if ($up) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['correo'] = $correo;
        header('location:../extend/alerta.php?msj=Datos actualizados&c=pe&p=perfil&t=success');
    } else {
        header('location:../extend/alerta.php?msj=Datos no actualizados&c=pe&p=perfil&t=error');
    }

    $con->close();
} else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=CARPETA&p=PAGINA&t=TIPO');
}
?>
