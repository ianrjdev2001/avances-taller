<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        //GET
        function validarDatosGet()
        {
            var verificar_get = true;

            if(!document.getElementById("nombre_get_txt").value)
            {
                alert("No se ha ingresado su nombre");
                document.getElementById("nombre_get_txt").focus();
                verificar_get = false;
            }
            else if(!document.getElementById("password_get_txt").value)
            {
                alert("No se ha ingresado su contraseña");
                document.getElementById("password_get_txt").focus();
                verificar_get = false;
            }
            else if(!document.getElementById("sexo_rdn_M_get").checked &&
            !document.getElementById("sexo_rdn_F_get").checked)
            {
                alert("El sexo es requerido");
                document.getElementById("sexo_rdn_M_get").focus();
                verificar_get = false;
            }
            else if(document.getElementById("sexo_rdn_M_get").checked &&
            document.getElementById("sexo_rdn_F_get").checked)
            {
                alert("No se pueden tener mas de un sexo");
                document.getElementById("sexo_rdn_M").focus();
                verificar_get = false;
            }
            if(verificar_get)
            {
                document.getElementById("envia-get-frm").submit();
            }
            
       }
       //POST
       
       function validarDatosPost()
        {
            var verificar_post = true;

            if(!document.getElementById("nombre_post_txt").value)
            {
                alert("No se ha ingresado su nombre");
                document.getElementById("nombre_post_txt").focus();
                verificar_post = false;
            }
            else if(!document.getElementById("password_post_txt").value)
            {
                alert("No se ha ingresado su contraseña");
                document.getElementById("password_post_txt").focus();
                verificar_post = false;
            }
            else if(!document.getElementById("sexo_rdn_M_post").checked &&
            !document.getElementById("sexo_rdn_F_post").checked)
            {
                alert("El sexo es requerido");
                document.getElementById("sexo_rdn_M_post").focus();
                verificar_post = false;
            }
            else if(document.getElementById("sexo_rdn_M_post").checked &&
            document.getElementById("sexo_rdn_F_post").checked)
            {
                alert("No se pueden tener mas de un sexo");
                document.getElementById("sexo_rdn_M_post").focus();
                verificar_post = false;
            }
            if(verificar_post)
            {
                document.getElementById("envia-post-frm").submit();
            }
            
       }
       window.onload = function() 
       {
            document.getElementById("enviar_get").onclick = function(){validarDatosGet()} ;
            document.getElementById("enviar_post").onclick = function(){validarDatosPost()} ;
       }
    </script>
</head>
<body>
       <?php
       error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
       if($_GET["error"] == "si")
       {
         echo "<span style=\"color:#F00; font-size: 2em;\">VERIFICA TUS DATOS</span>";
       }
       ?>

    <hgroup><h1>Formulario enviado por el metodo GET</h1></hgroup>
    <form id = "envia-get-frm" action = "validar-datos.php" method = "get"
    enctype = "application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
            <input type = "text" id = "nombre_get_txt"/>
            <br /><br />
        <label>Ingresa tu Contraseña:</label>
            <input type = "password" id = "password_get_txt"/>
            <br /><br />
            <input type = "radio" id = "sexo_rdn_M_get" value = "M"/>
            Masculino
            <input type = "radio" id = "sexo_rdn_F_get" value = "F"/>
            Femenino
            <br /><br />
            <input type = "hidden" name = "enviar_hdn_get" value = "get"/>
            <input type = "button" id = "enviar_get" name = "enviar_btn" value = "Envia x GET"/>
    </form>

    <hgroup><h1>Formulario enviado por el metodo POST</h1></hgroup>
    <form id = "envia-post-frm" action = "validar-datos.php" method = "post"
     enctype = "application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
            <input type = "text" id = "nombre_post_txt"/>
            <br /><br />
        <label>Ingresa tu Contraseña:</label>
            <input type = "password" id = "password_post_txt"/>
            <br /><br />
            <input type = "radio" id = "sexo_rdn_M_post" value = "M"/>
            Masculino
            <input type = "radio" id = "sexo_rdn_F_post" value = "F"/>
            Femenino
            <br /><br />
        <input type = "hidden" name = "enviar_hdn" value = "post"/>
        <input type = "button" id = "enviar_post" name = "enviar_btn" value = "Envia x POST"/>
</form>  
</body>
</html>