<?php
class veiculosForms{
	public $addContent;
	public function __construct(){

	}
	public function html(){
		$form = new formbootstrap;
		$form->action = "/grava/veiculos/";
		$form->method = "post";
		$form->fieldset = true;
		$form->legend = "Veículos";
		$form->extras = 'style="padding: 20px"';

		$placa = new inputAddOn;
		$placa->inputPlaceholder = "Placa";
		$placa->inputName = "placa";

		$proprietario1 = new inputBase("select");
		$proprietario1->inputPlaceholder = "Proprietário";
		$sql = 'select id, nome from clientes';
		$option = toSelect::querydata($sql, "id", "nome", "<option>Escolhao cliente</option>");
		$proprietario1->name = 'proprietario';
		$proprietario1->tagContent = $option;
		$proprietario1->class = "form-control";

		$modelo = new inputAddOn;
		$modelo->inputPlaceholder = "Modelo";
		$modelo->inputName = "modelo";

		$ano = new inputAddOn;
		$ano->inputPlaceholder = "Ano";
		$ano->inputName = "ano";

		$cadastra = new inputBase("submit");
		$cadastra->value="Cadastrar";
		$cadastra->id="cadprod";
		$cadastra->class = "btn btn-primary";
		$cadastra->extras = 'style="margin-top: 15px"';

		$form->formitens = [$placa, $proprietario1, $modelo, $ano, $cadastra];

		$this->addContent = $form->html();
		//sp_add_veiculos arg_placa varchar(9), arg_proprietario int(11), arg_modelo varchar(35), arg_ano year(4)

		return $this->addContent;
	}
}