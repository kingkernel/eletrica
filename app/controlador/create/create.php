<?php
/*
Data criação: 16/01/2018
Última atualização: 30/01/2018
*/
class create {
	public $page;

	public function __construct(){
		auth::checkAuth();
		$menuup = new topmenu_autoeletrica;
		$menuup->estilo = "inverse";
		$pagina = new page_site;
		$pagina->bodycontent = $menuup->html();
		$this->page = $pagina;
		return $this;
	}
	public function cliente(){
		$form = new clienteForms;

		$this->page->bodycontent .= '<div class="container"><div class="row"><fieldset ><legend>Clientes </legend><form id="formAssessor" action="/grava/cliente/" method="post" onsubmit="javascript: return false;">'.$form->cadastroIn()[0].'</fieldset></div></div><div id="ajax">';

		$jsmaskurl = '<script src="'.urlcss($_GET).'public/js/jquery.mask.js"></script>';
		$jsNotify = '<script src="'.urlcss($_GET).'public/js/bootstrap-notify.min.js"></script>';
		$animateCss = '<link src="'.urlcss($_GET).'public/css/animate.min.css" rel="stylesheet">';
		$datepicker = '<script src="'.urlcss($_GET).'public/js/bootstrap-datepicker.min.js"></script>';
		$datepicker_br = '<script src="'.urlcss($_GET).'public/js/bootstrap-datepicker.pt-BR.min.js"></script>';

		$funcaoSuccess = 'function result0(){ $.notify({message: \'<span class="glyphicon glyphicon-ok"></span> <strong>Gravado com Sucesso!</strong><hr class="message-inner-separator"><p>A informação já se encontra online a todos usuários</p>\' },{ type: \'success\', delay: 2500,animate: {enter: \'animated fadeInDown\', exit: \'animated fadeOutUp\'}, allow_dismiss:true }); $("#formAssessor")[0].reset(); };';
		$funcaoError = 'function result1(){ $.notify({message: \'<span class="glyphicon glyphicon-hand-right"></span> <strong>Erro de gravação</strong><hr class="message-inner-separator"><p>Não foi possivel adicionar os Dados. Tente novamente <span class=""></p>\' },{ type: \'danger\', delay: 2500,animate: {enter: \'animated fadeInDown\', exit: \'animated fadeOutUp\'}, allow_dismiss:true }); $("#formAssessor")[0].reset(); };';
		
		$this->page->scriptsendpage = $form->cadastroIn()[2].$funcaoSuccess.$funcaoError;
		$this->page->headersinclude .= '<style>'.$form->cadastroIn()[1].'</style>'.fontawesome(urlcss($_GET)).$jsmaskurl.$animateCss.$jsNotify.$datepicker.$datepicker_br;
		$this->page->render();
	}
	public function caddata(){
		echo "bla bla bla";
	}
	public function produtos(){
		$form = new produtosForms;
		$jsmaskurl = '<script src="'.urlcss($_GET).'public/js/jquery.mask.js"></script>';
		
		$this->page->headersinclude .= $jsmaskurl;
		$js = '$(document).ready(function(){$("#id_preco").mask("999.99");$("#id_codprod").mask("999999999999999999999");$("#id_quant").mask("99999")});';
		
		$this->page->scriptsendpage .= $js;
		$this->page->bodycontent .= $form->html();

		$this->page->render();
	}
	public function servicos(){
		$form = new servicosForms;
		$jsmaskurl = '<script src="'.urlcss($_GET).'public/js/jquery.mask.js"></script>';
		$js = '$(document).ready(function(){$("#id_valserv").mask("9999.99");});';
		$this->page->bodycontent .=$form->html();
		$this->page->scriptsendpage .= $js;
		$this->page->headersinclude .= $jsmaskurl;
		$this->page->render();
	}
	public function funcionarios(){
		$form = new funcionariosForms;
		$this->page->bodycontent .= $form->html();
		$this->page->render();
	}
	public function veiculos(){
		$form = new veiculosForms;
		$this->page->bodycontent .= $form->html();
		$this->page->render();
	}
	public function serventrada(){
		$form = new servEntradaForms;
		$this->page->bodycontent .= $form->html();
		$this->page->render();
	}
}
?>