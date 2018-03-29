<?php
/*
Data criação: 17/02/2018
Última alteração: 17/02/2018
*/
class topmenu_campanha {
	public $nav;
	public function __construct(){	
	}
	public function html(){
		$nav = new topnav;
		$nav->brand = " Auto Eletrica";
		$relatorio = new li_item;
			$relatorio->text = "Relatórios";
			$relatorio->link = "/report/";
			$relatorio->iconclass = "glyphicon glyphicon-list-alt";

		$mapa = new li_item;
			$mapa->text = "Mapa" ;
			$mapa->iconclass = "glyphicon glyphicon-globe";
			$mapa->link = "/mapa/";

		$message = new li_dropdown;
			$message->text = "Caixa" ;
			$message->iconclass = "fa fa-money";
			$message->link = "/messages/";
				$msg = new li_item;
				$msg->text = "Geral";
				$msg->link = "/messages/";

				$novamsg = new li_item;
				$novamsg->text = "Nova Mensagem";
				$novamsg->link = "/messages/neweditor/";
			
			$divider = new divider;

			$message->subitem = [$msg, $divider, $novamsg];

		$use_info = new li_user_info;
		$use_info->nomedisplay = "usuario"; //$_SESSION["userinfo"]["nome"];
		//$use_info->exitlink = "/auth/logout/";

		$cadastro = new li_dropdown;
		$cadastro->text = "Cadastro";
		$cadastro->iconclass = "glyphicon glyphicon-plus-sign";
			$assessor = new li_item;
			$assessor->text = "Clientes";
			$assessor->link = "/create/cliente/";
			$eleitor = new li_item;
			$eleitor->text = "Produtos";
			$eleitor->link = "/create/eleitor/";
			$tarefas = new li_item;
			$tarefas->text = "Serviços";
		$cadastro->subitem = [$assessor, $eleitor, $tarefas];

	$nav->itensleft = [$cadastro, $relatorio, /*$mapa,*/ $message];
	$nav->itensright = [$use_info];
	$this->nav = $nav->html();
	return $this->nav;
	}
}
?>
