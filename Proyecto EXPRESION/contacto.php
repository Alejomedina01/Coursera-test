<div class="contacto">
	
	<form method="post">
		
		<input type="texto" placeholder="nombre" name="nombre">
		<input type="correo" placeholder="correo" name="correo">
		<textarea placeholder="mensaje" name="msj"></textarea>
		<input type="submit" name="Enviar">
	</form>
</div>

	<?php 
	include 'correo.php';
	 ?>