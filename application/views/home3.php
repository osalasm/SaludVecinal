<?php $this->load->view("cabecera")?>
	<h1><?php if(isset($nombre)) echo "Bienvenido"." ".$nombre ." ". $apellido?></h1>
	<table>
			<ul>
			<li><a href="#">Mi cuenta</a></li>
			<li><a href="#">Planificacion</a></li>
			<li><a href="#">Administracion</a></li>
			<li><a href="#">Salir</a></li>
		</ul>
	</table>
</body>
</html>
