<?php
    // A continuación se capturan los datos especificados del formulario
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $mensaje=$_POST['mensaje'];
    
    // Debes indicar tu correo electrónico, eliminando el ejemplo
    $to = "alu0100893601@ull.edu.es";
    
    // Puedes cambiar el asunto por defecto y que datos apareceran en el email que te llegue
    $subject = "Entrada del Formulario de Contacto";
    $message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Mensaje: " . $mensaje;
    
    // Puedes cambiar el nombre del remitente que aparecerá en tu bandeja de entrada, la página de sucesión y el mensaje que ve el usuario al final.
    $from = "Cafe-ULL";
    $headers = "From:" . $from . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
    if(@mail($to,$subject,$message,$headers))
    {
     echo "";
     
    }else{
     echo "Error! Please try again.";
    }
    
    echo "<script>location.href='../contacto.html'</script>";
?>