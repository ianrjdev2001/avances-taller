<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos GET y POST</title>
</head>
<body>
    <hgroup><h1>Formulario enviado por el metodo GET</h1></hgroup>
    <form name = "envia-get-frm" action = "envia-datos.php" method = "get"
     enctype = "application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type = "text" name = "nombre_txt"/>
        <br /><br />
        <label>Ingresa tu Contraseña:</label>
        <input type = "password" name = "password_txt"/>
        <br /><br />
        <input type = "submit" name = "enviar_btn" value = "Envia-GET">
    </form>

    <hgroup><h1>Formulario enviado por el metodo POST</h1></hgroup>
    <form name = "envia-post-frm" action = "envia-datos.php" method = "post"
     enctype = "application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type = "text" name = "nombre_txt"/>
        <br /><br />
        <label>Ingresa tu Contraseña:</label>
        <input type = "password" name = "password_txt"/>
        <br /><br />
        <input type = "submit" name = "enviar_btn" value = "Envia-POST">
    </form>

</body>
</html>