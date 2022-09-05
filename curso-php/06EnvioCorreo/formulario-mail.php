<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form
        {
            margin: 1em auto;
            text-align: center;
        }
        span
        {
            color: #F60;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <form name="mail_frm" action = "enviar-mail.php" method = "post" encytpe = "application/x-www-form-urlencoded">
    De: <input type = "text" name = "de_txt"/><br /> <br />
    Para: <input type = "text" name = "para_txt"/><br /> <br />
    Asunto: <input type = "text" name = "asunto_txt"/><br /> <br />
    Mensaje: <input type = "text" name = "mensaje_txt"/><br /> <br />
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if(isset($_GET["respuesta"]))
    {
        echo"<span>".$_GET["respuesta"]."</span>";
    }
    ?>
    </form>
</body>
</html>