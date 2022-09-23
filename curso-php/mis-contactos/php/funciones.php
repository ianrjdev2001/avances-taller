<?php 


function subir_imagen($tipo,$imagen,$email)
{

    if(strstr($tipo,"image"))
    {
        if(strstr($tipo,"jpge"))
        {
            $extension = ".jpg";
        }
        else if(strstr($tipo,"gif"))
        {
            $extension = ".gif";
        }
        else if(strstr($tipo,"png"))
        {
            $extension = ".png";
        }

        $tam_img = getimagesize($imagen);
        $ancho_img = $tam_img[0];
        $alto_img = $tam_img[1]; 
        $ancho_img_deseado = 420; 

        if($ancho_img > $ancho_img_deseado)
        {
            $nuevo_ancho_img = $ancho_img_deseado;
            $nuevo_alto_img = ($alto_img / $ancho_img) * $nuevo_ancho_img;

            $img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img); 

        }
        else
        {
            $destino = "../img/fotos/".$email.$expansion;
        }
    }
    else
    {
        return false;
    }
}

?>