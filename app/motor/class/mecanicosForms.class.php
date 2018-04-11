<?php
class mecanicosForms{
	public $addContent;
	public function __construct(){

	}
	public function html(){
		$form = new formbootstrap;
		$form->action = "/grava/mecanicos/";
		$form->method = "post";
		$form->fieldset = true;
		$form->legend = "Funcionários";
		$form->extras = 'style="padding: 20px"';

		$nomeservico = new inputAddOn;
		$nomeservico->inputPlaceholder = "Nome Serviço";
		$nomeservico->inputName = "nomeserv";

		$valserv = new inputAddOn;
		$valserv->inputPlaceholder = "Valor";
		$valserv->inputName = "valserv";
		$valserv->id = 'id_'.$valserv->inputName;

		$cadastra = new inputBase("submit");
		$cadastra->value="Cadastrar";
		$cadastra->id="cadprod";
		$cadastra->class = "btn btn-primary";
		$cadastra->extras = 'style="margin-top: 15px"';

		$form->formitens = [$nomeservico, $valserv, $cadastra];

		$this->addContent = $form->html();
		//nome varchar(60), endereco varchar(75), cidade varchar(35), bairro varchar(35), funcao varchar(45),

		return $this->addContent;
	}
}