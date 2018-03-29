<?php
$pagina = new page_site;
	$card = new cardshow;
	$card->imagemlogin = PUBLICDIR ."images/avatar.jpg";
$pagina->headersinclude .= fontawesome(urlcss($_GET));
$pagina->bodycontent = $card->html();
$pagina->render();
?>