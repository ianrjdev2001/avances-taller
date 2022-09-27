<script>
    window.onload = function()
    {
        var lista = document.getElementbyId("contacto-lista"); 
        lista.onchange = seleccionarContacto;
        function seleccionarContacto()
        {
            window.location = "?op=cambios&contacto_slc="+lista.value;
        }
    }
</script>
<form id="cambio-contacto" name="cambio_frm" action="php/modificar-contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambio de Contacto</legend>
        <div>
            <label for="contacto-lista">Contacto:</label>
            <select id="contacto-lista" class="cambio" name="contacto_slc" required>
                <option value="">- - -</option>
                <?php include("select-email.php"); ?>
            </select>
        </div>
    </fieldset>
</form>