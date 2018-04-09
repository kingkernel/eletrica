<?php
class produtosForms{
	public $addContent;
	public function __construct(){

	}
	public function html(){
		$nomeproduto = new inputAddOn;
		$nomeproduto->inputPlaceholder = "Nome Produto";

		$codproduto = new inputAddOn;
		$codproduto->inputPlaceholder = "cód. produto";

		$preco = new inputAddOn;
		$preco->inputPlaceholder = "Preço";

		$descricao = new inputAddOn;
		$descricao->inputPlaceholder = "Descrição";

		$quantidade = new inputAddOn;
		$quantidade->inputPlaceholder = "Quantidade estoque";

		$cadastra = new inputBase("textarea");

		$this->addContent = $nomeproduto->html().$codproduto->html().$preco->html().$descricao->html().$quantidade->html().$cadastra->html();

		return $this->addContent;
	}
}