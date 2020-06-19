<?php
// Initialize site configuration
require_once('includes/config.inc.php');

if ($_SERVER["REQUEST_METHOD"]='POST'){
	if(isset($_POST["correo"]) && isset($_POST["passw"])){
		$correoUsr=$_POST["correo"];
		$pwdUsr=$_POST["passw"];

		$usuario=Usuario::getByCorreoAndPass($correoUsr, $pwdUsr);
		
		if (count($usuario)>0) {
			/*Si existe el usuario
			 - Crear session "nombre"
			 - Ir al listado de libros
			 */
			redirect_to('indexLibros.php');
		}else{
			/*Si el usuario no existe
				- Volver al logueo 
			*/
			redirect_to('indexLogin.php?existe=0');
		}
		
	}
}
?>