<?php  
	include '../conexion/conexion.php';

	$nombre=$con->real_escape_string($_POST['nombre']);

	$sel=$con->query("SELECT idClientes FROM clientes WHERE Nombre='$nombre' ");
	$row=mysqli_num_rows($sel);
	if($row !=0)
	{
		echo"<label style='color:red;'>El nombre ya existe</label>";
	}
	else
	{
		echo"<label style='color:green;'>El nombre esta disponible</label>";
	}
	$con->close();	
?>