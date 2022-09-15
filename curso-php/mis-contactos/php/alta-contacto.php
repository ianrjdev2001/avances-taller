<form id = "alta-contacto" name = "alta_frm " action = "php/agregar-contacto.php" method = "post" enctype = "multipart/form-data">
    <fieldset>
        <legend>Alta de Contacto</legend>
        <div>
            <label for = "email">Email:</label>
            <input type = "email" id = "email" class = "cambio" name = "name_txt" placeholder = "Escribe tu email" title = "Tu email" required/>
        </div>
        <div>
            <label for = "nombre">Nombre: </label>
            <input type = "text" id = "nombre" class = "cambio" name = "nombre_txt" placeholder = "Escribe tu nombre" title = "Tu nombre" required/>
        </div>
        <div>
            <label for = "m">Sexo: </label>
            <input type = "radio" id = "m" name = "sexo_rdo" title = "Tu sexo" value = "M" required/>
            &nbsp;<label for = "m">masculino</label>
            &nbsp;&nbsp;&nbsp;
            <input type = "radio" id = "f" name = "sexo_rdo" title = "Tu sexo" value = "F" required/>
            &nbsp;<label for = "f">femenino</label>
        </div>
        <div>
            <label for = "nacimiento">Fecha de Nacimiento: </label>
            <input type = "date" id = "nacimiento" class = "cambio" name = "nacimiento_txt" title= "Tu cumple" required/>
        </div>
        <div>
            <label for = "telefono">Telefono: </label>
            <input type = "number" id = "telefono" class = "cambio" name = "telefono_txt" placeholder = "Escribe tu telefono" title= "Tu telefono" required/>
        </div>
        <div>
            <label for = "pais">Pais: </label>
            <select id = "pais" class = "cambio" name = "pais_cls">
                    <option value = "">- - -</option>
                    <?php include("select-pais.php");?>
            </select>
        </div>
        <div>
            <label for = "foto">Foto: </label>
            <input type = "file" id = "foto" class = "foto_cls" name = "nacimiento_txt" title = "Sube tu foto" required/>
        </div>
        <div>
            <input type = "submit" id = "enviar-alta" class = "cambio" name = "enviar_btn" value = "agregar"/>
        </div>
        <?php include("php/mensajes.php");?>
    </fieldset>
</form>