<?php
require "controller/InicioController.php";
$pagina = isset($_GET["página"]) ? $_GET["página"] : "index";
$iniciactrl -> new InicioController();


switch ($pagina) {
	case 'index':
		$iniciactrl -> Index();
		break;

	case 'login':
		$iniciactrl -> Login();
		break;
	
	case 'painel':
		$iniciactrl -> Painel();
		break;
}

?>