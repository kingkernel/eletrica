<?php
class produtosForms{
	public $addContent;
	public function __construct(){

	}
	public function html(){
		$form = new formbootstrap;
		$form->action = "/grava/produtos/";
		$form->method = "post";
		$form->fieldset = true;
		$form->legend = "Produtos";
		$form->extras = 'style="padding: 20px"';

		$nomeproduto = new inputAddOn;
		$nomeproduto->inputPlaceholder = "Nome Produto";
		$nomeproduto->inputName = "nomeprod";

		$codproduto = new inputAddOn;
		$codproduto->inputPlaceholder = "cód. produto";
		$codproduto->inputName = "codprod";
		$codproduto->id = 'id_'.$codproduto->inputName;

		$preco = new inputAddOn;
		$preco->inputPlaceholder = "Preço";
		$preco->inputName = "preco";
		$preco->id = 'id_'.$preco->inputName;

		$descricao = new inputAddOn;
		$descricao->inputPlaceholder = "Descrição";
		$descricao->inputName = "descri";

		$quantidade = new inputAddOn;
		$quantidade->inputPlaceholder = "Quantidade estoque";
		$quantidade->inputName = "quant";
		$quantidade->id = 'id_'.$quantidade->inputName;


		$cadastra = new inputBase("submit");
		$cadastra->value="Cadastrar";
		$cadastra->id="cadprod";
		$cadastra->class = "btn btn-primary";
		$cadastra->extras = 'style="margin-top: 15px"';

		$form->formitens = [$nomeproduto, $codproduto, $preco, $descricao, $quantidade, $cadastra];

		$this->addContent = $form->html();//$nomeproduto->html().$codproduto->html().$preco->html().$descricao->html().$quantidade->html().$cadastra->html();

		return $this->addContent;
	}
}