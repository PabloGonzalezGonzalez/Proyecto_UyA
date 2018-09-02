<meta charset="UTF8">

<?php

    $Servidor = "localhost";
	$Usuario = "id6858673_menuses";
	$Clave = "lolitofdez";
	$BaseDatos = "id6858673_menus";

	$Conexion = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos);

	if($Conexion->connect_error) die("SE HA PRODUCIDO UN ERROR DE CONETCION CON LA BD" . $Conexion->connect_error);

	echo "";

	if($Conexion)
    {
		$Nombre = $_REQUEST["first_name"];
		$Mensaje = $_REQUEST["mensaje"];

		$SQL = "insert into Foro ";
		$SQL .= " (Nombre, Mensaje) values ";
		$SQL .= " ('$Nombre', '$Mensaje')";

		if(!mysqli_query($Conexion, $SQL))
			echo "ERROR" . mysqli_error($Conexion);

		else
			echo "";

		mysqli_close($Conexion);
	}

	else{

		die("LA CONECTION CON LA BASE DE DATOS HA SIDO ERRONEA");
	}
	
	echo "<script>location.href='../foro.php'</script>";
?>