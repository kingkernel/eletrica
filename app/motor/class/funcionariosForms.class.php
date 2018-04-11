<?php
class funcionariosForms{
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

		$nomefuncionario = new inputAddOn;
		$nomefuncionario->inputPlaceholder = "Nome";
		$nomefuncionario->inputName = "nome";

		$endereco = new inputAddOn;
		$endereco->inputPlaceholder = "Endereço";
		$endereco->inputName = "endereco";
		$endereco->id = 'id_'.$endereco->inputName;

		$cidade = new inputAddOn;
		$cidade->inputPlaceholder = "Cidade";
		$cidade->inputName = "cidade";
		$cidade->id = 'id_'.$cidade->inputName;

 		$bairro = new inputAddOn;
		$bairro->inputPlaceholder = "Bairro";
		$bairro->inputName = "bairro";
		$bairro->id = 'id_'.$bairro->inputName;

 		$funcao = new inputAddOn;
		$funcao->inputPlaceholder = "Cargo";
		$funcao->inputName = "funcao";
		$funcao->id = 'id_'.$funcao->inputName;

		$cadastra = new inputBase("submit");
		$cadastra->value="Cadastrar";
		$cadastra->id="cadprod";
		$cadastra->class = "btn btn-primary";
		$cadastra->extras = 'style="margin-top: 15px"';

		$form->formitens = [$nomefuncionario, $endereco, $cidade, $bairro, $funcao, $cadastra];

		$this->addContent = $form->html();
		//nome varchar(60), endereco varchar(75), cidade varchar(35), bairro varchar(35), funcao varchar(45),

		return $this->addContent;
	}
}