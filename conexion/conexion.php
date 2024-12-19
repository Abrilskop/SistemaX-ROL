<?php
	// Conexión a nuestra base de datos
	@session_start(); 
	$con = new mysqli("localhost:3307", "root", "", "sistemax");
	$con->set_charset("utf8");
?>
