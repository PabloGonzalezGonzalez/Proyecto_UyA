<meta charset="UTF8">

<?php

    
    $Servidor = "localhost";
	$Usuario = "id6858673_menuses";
	$Clave = "lolitofdez";
	$BaseDatos = "id6858673_menus";

	$Conexion = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos) or die("NO HAY CONETCION CON EL SERVER");

    $Correo = $_POST['mail'];
    $Password = $_POST['pw'];
    
    $SQL = "SELECT * FROM Usuarios WHERE Correo = '$Correo' AND Contraseña= '$Password' ";
    $Result = $Conexion->query($SQL);
     	
    if($Result->num_rows > 0){
        
        echo "<script>location.href='../principal.html'</script>";
    }
    
    else{
        
        echo "<script>location.href='../inicio.html'</script>";
    }
?>