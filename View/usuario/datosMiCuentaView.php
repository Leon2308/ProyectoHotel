<?php
if ($numFilas > 0) {
    ?>
    <table class="tablaHabitaciones">
        <th class="tablahabitacionesTh">Nombre</th>
        
		<?php foreach ($data['datos'] as $user) {
		 if ($user->GetApellido2()!= ''){ 
		?>
		<th class="tablahabitacionesTh">Primer Apellido</th>
		<th class="tablahabitacionesTh">Segundo Apellido</th>
		<?php }else{ ?>
		<th class="tablahabitacionesTh">Apellido</th>
		<?php }} ?>
        <th class="tablahabitacionesTh">Cédula</th>
        <th class="tablahabitacionesTh">Usuario</th>
        <th class="tablahabitacionesTh">Modificar Datos</th>
        <th class="tablahabitacionesTh">Cambiar Clave</th>
        <?php
        foreach ($data['datos'] as $user) {
            ?>
            <tr>
                <td class="nombre">
                    <?= $user->GetNombre() ?>
                </td>
                <td class="apellido">
                    <?= $user->GetApellido1() ?>
                </td>
				<?php if ($user->GetApellido2()!= ''){ ?>
                <td class="apellido2">
                    <?= $user->GetApellido2() ?>
                </td>
				<?php } ?>
                <td class="dni">
                    <?= $user->getDni() ?>
                </td>
                <td class="usuario">
                    <?= $user->GetUsuario() ?>
                </td>
                <td>
                    <input type="submit" class="btnEnvio2NoMargin" id="cambiarDatos" value="Modificar" />
                </td>
                <td>
                    <input type="submit" class="btnEnvio2NoMargin" id="cambiarClave" value="Cambiar" />
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>

