function valid1() {
    
    var x=true;
    var msg = "Los campos marcados con '*' deben estar rellenos";
    var msg2 = "Debe aceptar los términos de uso";
    var expresion = /^[-\w.]+@{1}[-a-z0-9]+[.]{1}[a-z]{2,5}$/;
    
    //nombre
    if(document.getElementById("first_name").value == "" || document.getElementById("first_name").value==null){
        x=false;
        alert(msg);
        return x;
        
    }
    
    //apellidos
    else if(document.getElementById("last_name").value=="" || document.getElementById("last_name").value==null){
        x=false;
        alert(msg);
        return x;
       
    }

    //correo
    else if(document.getElementById("mail").value=="" || document.getElementById("mail").value==null){
        x=false;
        alert(msg);
        return x;
             
    }
    
    //contraseña
    else if(document.getElementById("pw").value=="" || document.getElementById("pw").value==null){
        x=false;
        alert(msg);
        return x;
                
    }
    
    //Condiciones
    else if(!document.getElementById("terms").checked){
        x=false;
        alert(msg2);
        return x;
    }
    
    else if(document.getElementById("first_name").length>30 || document.getElementById("last_name").length>30){
        x=false;
        alert("Los campos nombre y apellidos no deben superar los 30 caracteres respectivamente");
        return x;
    }
    
    else if(!expresion.test(document.getElementById("mail").value)){
        x=false;
        alert("El correo introducido no es válido, debe seguir el formato: xx@xx.xx");
        return x;
    }

    x=true;
    return x;
}