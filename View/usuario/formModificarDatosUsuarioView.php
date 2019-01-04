<div>
    <div class="cuadroForm">
        <form action="modificarCliente.php" class="formCentrado" id="formModificar" method="post">
			<!-- <div class="form-group-Usuario"> -->
                <label class="labelFormDatosUsuario" for="labelOpciones"><small>Los datos con (*) son obligatorios. </br> La cédula no es modificable.</small></label>
            <!-- </div> -->
			
			<div class="form-group-Usuario">
                <label class="labelFormDatosUsuario" for="inputDni">Cédula:</label>
                <input type="text" name="dni" id="inputDni" class="form-control-usuario" value="" readonly>
            </div>
			
			<div class="form-group-Usuario">
                <label class="labelFormDatosUsuario" for="inputNobre"> (*)Nombre:</label>
                <input type="text" name="nombre" id="inputNombre" class="form-control-usuario" value="">
            </div>

            <div class="form-group-Usuario">
                <label class="labelFormDatosUsuario" for="inputApellido">(*)Primer Apellido:</label>
                <input type="text" name="apellido1" id="inputApellido" class="form-control-usuario" value="">
            </div>

            <div class="form-group-Usuario">
                <label class="labelFormDatosUsuario" for="inputApellido2">Segundo Apellido:</label>
                <input type="text" name="apellido2" id="inputApellido2" class="form-control-usuario" value="">
            </div>

            

        </form>
    </div>
</div>