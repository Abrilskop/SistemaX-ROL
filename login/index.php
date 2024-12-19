<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $con->real_escape_string(string: htmlentities(string: $_POST['usuario']));
    $pass = $con->real_escape_string(string: htmlentities(string: $_POST['contra']));
    $candado = "#"; // Definir el valor de $candado

    $str_u = strpos(haystack: $user, needle: $candado);
    $str_p = strpos(haystack: $pass, needle: $candado);

    if (is_int(value: $str_u)) {
        $user = '';
    } else {
        $usuario = $user;
    }

    if (is_int(value: $str_p)) {
        $pass = '';
    } else {
        $pass2 = sha1(string: $pass);
    }

    if ($user == null && $pass == null) {
        header(header: 'location:../extend/alerta.php?msj-El formato no es correcto&c=salir&p=salir&t-error');
    } else {
        $sel = $con->query(query: "SELECT nick, nombre, nivel, correo, foto, pass FROM usuario WHERE nick = '$user' AND pass = '$pass2' AND bloqueo = 1");
        $row = mysqli_num_rows(result: $sel);

        if ($row == 1) {
            if ($var = $sel->fetch_assoc()) {
                $nick = $var['nick'];
                $contra = $var['pass'];
                $nivel = $var['nivel'];
                $correo = $var['correo'];
                $foto = $var['foto'];
                $nombre = $var['nombre'];
            }
        
            if ($nick == $usuario && $contra == $pass2 && $nivel == 'ADMIN' || $nivel == 'ADMINISTRADOR' || $nivel == 'ASESOR' || $nivel == 'VENDEDOR') {
                $_SESSION["nick"] = $nick;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["correo"] = $correo;
                $_SESSION["foto"] = $foto;
                header(header: 'location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
            } elseif ($nick == $usuario && $contra == $pass2 && $nivel == 'ASESOR') {
                $_SESSION["nick"] = $nick;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["correo"] = $correo;
                $_SESSION["foto"] = $foto;
                header(header: 'location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
            } elseif ($nick == $usuario && $contra == $pass2 && $nivel == 'VENDEDOR') {
                $_SESSION["nick"] = $nick;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["nivel"] = $nivel;
                $_SESSION["correo"] = $correo;
                $_SESSION["foto"] = $foto;
                header(header: 'location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
            }else {
                header(header: 'location:../extend/alerta.php?msj=No tienes permiso&c=salir&p=salir&t=error');
            }
        } else {
            header(header: 'location:../extend/alerta.php?msj=Usuario o contraseña incorrecto&c=salir&p=salir&t=error');
        }
        
        // cierra method
        } 
    
} else {
    header(header: 'location:../extend/alerta.php?msj=Utiliza el formulario&c=salir&p=salir&t=error');
}
?>





