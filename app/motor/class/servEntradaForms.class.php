<?php
class servEntradaForms{
	public $addContent;
	public function __construct(){

	}
	public function html(){
		$form = new formbootstrap;
		$form->action = "/grava/servEntrada/";
		$form->method = "post";
		$form->fieldset = true;
		$form->legend = "Entrada de Serviços";
		$form->extras = 'style="padding: 20px"';

		$proprietario1 = new inputBase("select");
		$sql = 'select id, placa from veiculos';
		$option = toSelect::querydata($sql, "id", "placa", "<option>Escolha o Veículo</option>");
		$proprietario1->name = 'veiculo';
		$proprietario1->tagContent = $option;
		$proprietario1->class = "form-control";
// ------------------------------------------------------------- //
		$arranoes = new inputBase("checkbox");
		$arranoes->name = "arranhoes";
		$arranoes->value = "sim";
		$arranoes->tagContent = '<label class="label label-success">Arranhões : </label>';

		$arranoes_text = new inputBase;
		$arranoes_text->name = "arranhoes_text";
		$arranoes_text->placeHolder = "Arranhões onde";
		$arranoes_text->class = "form-control";
// ------------------------------------------------------------- //		
		$farois = new inputBase("checkbox");
		$farois->name = "farois";
		$farois->value = "sim";
		$farois->tagContent = '<label class="label label-success">Teste Fárois : </label>';

		$farois_text = new inputBase;
		$farois_text->name = "farois_text";
		$farois_text->placeHolder = "Fárois";
		$farois_text->class = "form-control";
// ------------------------------------------------------------- //
		$objetos = new inputBase("checkbox");
		$objetos->name = "objetos";
		$objetos->value = "sim";
		$objetos->tagContent = '<label class="label label-success">Objetos Pessoais : </label>';

		$objetos_text = new inputBase;
		$objetos_text->name = "objetos_text";
		$objetos_text->placeHolder = "Objetos Pessoais encontrados";
		$objetos_text->class = "form-control";
// ------------------------------------------------------------- //
		$vidros = new inputBase("checkbox");
		$vidros->name = "vidros";
		$vidros->value = "sim";
		$vidros->tagContent = '<label class="label label-success">Vidros : </label>';

		$vidros_text = new inputBase;
		$vidros_text->name = "vidros_text";
		$vidros_text->placeHolder = "Sobre os vidros";
		$vidros_text->class = "form-control";
// ------------------------------------------------------------- //
		$calibragem = new inputBase("checkbox");
		$calibragem->name = "calibragem";
		$calibragem->value = "sim";
		$calibragem->tagContent = '<label class="label label-success">Calibragem : </label>';

		$calibragem_text = new inputBase;
		$calibragem_text->name = "calibragem_text";
		$calibragem_text->placeHolder = "Sobre os vidros";
		$calibragem_text->class = "form-control";
// ------------------------------------------------------------- //
		$limpeza = new inputBase("checkbox");
		$limpeza->name = "limpeza";
		$limpeza->value = "sim";
		$limpeza->tagContent = '<label class="label label-success">Limpeza : </label>';

		$limpeza_text = new inputBase;
		$limpeza_text->name = "limpeza_text";
		$limpeza_text->placeHolder = "Limpeza";
		$limpeza_text->class = "form-control";
// ------------------------------------------------------------- //
		$orcamento = new inputAddOn;
		$orcamento->inputPlaceholder = "Orçamento";
		$orcamento->inputName = "orcamento";

		$descricao = new inputAddOn;
		$descricao->inputPlaceholder = "Descrição de Execução";
		$descricao->inputName = "descricao";

		$valor = new inputAddOn;
		$valor->inputPlaceholder = "Valor Total";
		$valor->inputName = "valor";

		$entrada = new inputAddOn;
		$entrada->inputPlaceholder = "Entrada";
		$entrada->inputName = "entrada";

/* ############################################################# */
		$cadastra = new inputBase("submit");
		$cadastra->value = "Cadastrar";
		$cadastra->class = "btn btn-primary";
		$cadastra->extras = 'style="margin-top: 15px"';

		$form->formitens = [$proprietario1, $arranoes, $arranoes_text, $farois, $farois_text, $objetos, $objetos_text, $vidros, $vidros_text, $calibragem, $calibragem_text, $limpeza, $limpeza_text, $orcamento, $descricao, $valor, $entrada, $cadastra];

		$this->addContent = $form->html();

		return $this->addContent;
	}
}