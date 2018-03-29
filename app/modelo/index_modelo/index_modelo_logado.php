<?php
/**
Ultima alteração: 30/01/2018
**/
$menuup = new topmenu_autoeletrica;

$pagina = new page_site;
	$pagina->bodycontent = $menuup->html()."<br/><br/><br/><br/><br/>";
$pagina->render();
?>