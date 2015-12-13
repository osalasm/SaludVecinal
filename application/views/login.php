<?php $this->load->view("cabecera")?>
	<h1>Login usuarios agendador</h1>
	<form action="login" method="POST">
		<table>
			<tr>
				<td>RUT</td>
				<td><input type="text" name="RUT" value="15333365"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="contrasena" value="1234"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Ingresar"></td>
			</tr>
			<tr>
				<td></td>
				<td><ul>
					<a href="#">Recordar contrasena</a>
				</ul></td>
			</tr>
		</table>
	</form>
	<h1><?php if(isset($mensaje)) echo $mensaje?></h1>
	
</body>
</html>
