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

		$relatorio1 = new li_dropdown;
		$relatorio1->text = "Relatórios";
		$relatorio1->iconclass = "glyphicon glyphicon-list-alt";
			$clientes = new li_item;
			$clientes->text = "Clientes";
			$clientes->link = "/report/clientes/";
		$relatorio1->subitem = [$clientes];

		$servico = new li_dropdown;
		$servico->text = "Serviços";
		$servico->iconclass = "glyphicon glyphicon-cog";
				$entrada = new li_item;
				$entrada->text = "Entrada de Serviço";
				$entrada->link = "/create/serventrada/";
				$saida = new li_item;
				$saida->text = "Finalizar serviço";
				$saida->link = "/servico/finalizar/";
				$agendamento = new li_item;
				$agendamento->text = "Agendamento";
				$agendamento->link = "/agendamento/criar/";
		$servico->subitem = [$entrada, $saida, $agendamento];


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
		$use_info->exitlink = "/auth/logout/";

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
			$tarefas->link = "/create/servicos/";
			$mecanicos = new li_item;
			$mecanicos->text = "Funcionários";
			$mecanicos->link = "/create/funcionarios/";
			$veiculos = new li_item;
			$veiculos->text = "Veículos";
			$veiculos->link = "/create/veiculos/";

		$cadastro->subitem = [$assessor, $eleitor, $mecanicos, $tarefas, $veiculos];

	$nav->itensleft = [$cadastro, $relatorio1, $servico, $caixa];
	$nav->itensright = [$use_info];
	$this->nav = $nav->html();
	return $this->nav;
	}
}
?>
