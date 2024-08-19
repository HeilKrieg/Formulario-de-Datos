<div class="form">
	<h3 class="bajaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="bajaInput" action="../server/bajas.php" method="POST">
		<div class="grupoInputs">
			<label for="userName">Seleccione un nombre de usuario:</label>
			<div class="container-select">
				<?php
				include("../modelo/usuario.php");
				echo getUsuarioUsersNames();
				?>
				<div id="modal" class=""></div>
			</div>
		</div>

		<div class="btn-baja">
			<input type="submit" value="Eliminar"><br>
		</div>
	</form>
</div>