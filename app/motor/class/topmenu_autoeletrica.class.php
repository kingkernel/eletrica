<?php
/*
Data criação: 17/02/2018
Última alteração: 17/02/2018
*/
class topmenu_autoeletrica {
	public $nav;
	public function __construct(){	
	}
	public function html(){
		$nav = new topnav;
		$nav->estilo = "inverse";
		$nav->brand = " Auto Elétrica AJJR";
		$relatorio = new li_item;
			$relatorio->text = "Relatórios";
			$relatorio->link = "/report/";
			$relatorio->iconclass = "glyphicon glyphicon-list-alt";

		$caixa = new li_dropdown;
			$caixa->text = "Caixa" ;
			$caixa->iconclass = "fa fa-money";
			$caixa->link = "/messages/";
				$msg = new li_item;
				$msg->text = "Geral";
				$msg->link = "/messages/";

				$novamsg = new li_item;
				$novamsg->text = "Nova Mensagem";
				$novamsg->link = "/messages/neweditor/";
			
			$divider = new divider;

			$caixa->subitem = [$msg, $divider, $novamsg];

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
			$eleitor->link = "/create/produtos/";
			$tarefas = new li_item;
			$tarefas->text = "Serviços";
			$mecanicos = new li_item;
			$mecanicos->text = "Mecânicos";
			$mecanicos->link = "/create/mecanico/";

		$cadastro->subitem = [$assessor, $eleitor, $mecanicos, $tarefas];

	$nav->itensleft = [$cadastro, $relatorio, $caixa];
	$nav->itensright = [$use_info];
	$this->nav = $nav->html();
	return $this->nav;
	}
}
?>
