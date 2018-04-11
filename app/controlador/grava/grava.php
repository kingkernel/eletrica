<?php
class grava{
	public $page;
	public function __construct(){
		auth::checkAuth();
		$menuup = new topmenu_autoeletrica;
		$menuup->estilo = "inverse";
		$pagina = new page_site;
		$pagina->bodycontent = $menuup->html();
		$this->page = $pagina;
		return $this;
		//echo minimalheader(urlcss($_GET));
	}
	public function eleitor(){

		$eleitor = $_POST["eleitor"];
		$cidade = $_POST["cidade"];
		$bairro = $_POST["bairro"];
		$rua = $_POST["rua"] . " - ". $bairro;
		$numero = $_POST["numero"];
		$email = $_POST["email"];
		$fone1 = $_POST["fone1"];
		$fone2 = $_POST["fone2"];
		//$zap = $_POST["zap"];
		$licenca = $_POST["licenca"];
		$cadfor = $_POST["iduser"];
		$lider = $_POST["lider"];
		if($lider==""||$lider==null){$lider="0";};
		$sql = 'call sp_add_eleitores("'.$eleitor.'","'.$cidade.'","'.$bairro.'","'.$rua.'","'.$numero.'","'.$email.'","'.$fone1.'","'.$fone2.'","'.$zap.'","", '.$licenca.', '.$cadfor.', '.$lider.')';

		$sucesso = '<script>result0();</script>';
		$erro = '<script>result1();</script>';
		echo $sql;
		echo $query = fastquery_messages($sql, $erro, $sucesso);
	}
	public function assessor(){
		//print_r($_POST);
		$eleitor = $_POST["eleitor"];
		$cidade = $_POST["cidade"];
		$bairro = $_POST["bairro"];
		$rua = $_POST["rua"] . " - ". $bairro;
		$numero = $_POST["numero"];
		$email = $_POST["email"];
		$fone1 = $_POST["fone1"];
		$nasc = $_POST["fone2"];
		//$zap = $_POST["zap"];
		$licenca = $_POST["licenca"];
		$cadfor = $_POST["iduser"];
		$sql = 'call sp_clientes("'.$eleitor.'","'.$rua.'","'.$cidade.'","'.$fone1.'","'.$email.'","","'.$nasc.'")';

		$sucesso = '<script>result0();</script>';
		$erro = '<script>result1();</script>';
		echo $query = fastquery_messages($sql, $erro, $sucesso);

	}
	public function produtos(){
		if(empty($_POST["nomeprod"])){
			$nomeprod = "";
		} else {
			$nomeprod = $_POST["nomeprod"];
		};
		if(empty($_POST["codprod"])){
			$codprod = "";
		} else {
			$codprod = $_POST["codprod"];
		};
		if(empty($_POST["preco"])){
			$preco = "";
		} else {
			$preco = $_POST["preco"];
		};
		if(empty($_POST["quant"])){
			$quant = "";
		} else {
			$quant = $_POST["quant"];
		};
		if(empty($_POST["descri"])){
			$descri = "";
		} else {
			$descri = $_POST["descri"];
		};
		$sql = 'call sp_add_produtos("'.$nomeprod.'", "'.$codprod.'", '.$preco.', "'.$quant.'", "'.$descri.'")';
		$sucesso = '<div style="margin:20px"><p class="alert alert-success">Produto Cadastrado com Sucesso!</p></div>';
		$erro = '<div style="margin:20px"><p class="alert alert-danger">produto não cadastrado</p></div>';
		$query = fastquery_messages($sql, $erro, $sucesso);
		$this->page->bodycontent .=$query;
		$this->page->render();
	}
	public function servicos(){
		//print_r($_POST);
		//Array ( [nomeserv] => xzczx [valserv] => 7567.56 )
		if(empty($_POST["nomeserv"])){
			$nomeserv = "";
		} else {
			$nomeserv = $_POST["nomeserv"];
		};
		if(empty($_POST["valserv"])){
			$valserv = "";
		} else {
			$valserv = $_POST["valserv"];
		};
		$sql = 'call sp_add_servicos("'.$nomeserv.'", '.$valserv.')';
		$sucesso = '<div style="margin:20px"><p class="alert alert-success">Serviço Cadastrado com Sucesso!</p></div>';
		$erro = '<div style="margin:20px"><p class="alert alert-danger">Serviço não cadastrado</p></div>';
		$query = fastquery_messages($sql, $erro, $sucesso);
		$this->page->bodycontent .=$query;
		$this->page->render();
	}
	public function mecanicos(){
		//print_r($_POST);
		//Array ( [nome] => [endereco] => [cidade] => [bairro] => [funcao] => )
		if(empty($_POST["nome"])){
			$nome = "";
		} else {
			$nome = $_POST["nome"];
		};
		if(empty($_POST["endereco"])){
			$endereco = "";
		} else {
			$endereco = $_POST["endereco"];
		};
		if(empty($_POST["cidade"])){
			$cidade = "";
		} else {
			$cidade = $_POST["cidade"];
		};
		if(empty($_POST["bairro"])){
			$bairro = "";
		} else {
			$bairro = $_POST["bairro"];
		};
		if(empty($_POST["funcao"])){
			$funcao = "";
		} else {
			$funcao = $_POST["funcao"];
		};
		$sql = 'call sp_add_funcionarios("'.$nome.'", "'.$endereco.'", "'.$cidade.'", "'.$bairro.'", "'.$funcao.'")';
		$sucesso = '<div style="margin:20px"><p class="alert alert-success">Funcionários Cadastrado com Sucesso!</p></div>';
		$erro = '<div style="margin:20px"><p class="alert alert-danger">Funcionários não cadastrado</p></div>';
		$query = fastquery_messages($sql, $erro, $sucesso);
		$this->page->bodycontent .=$query;
		$this->page->render();
	}
	public function veiculos(){
		//print_r($_POST);  Array ( [placa] => dwedqew [proprietario] => adwqdwq [modelo] => qwdqw [ano] => qwdqw )
		if(empty($_POST["placa"])){
			$placa = "";
		} else {
			$placa = $_POST["placa"];
		};
		if(empty($_POST["proprietario"])){
			$proprietario = "";
		} else {
			$proprietario = $_POST["proprietario"];
		};
		if(empty($_POST["modelo"])){
			$modelo = "";
		} else {
			$modelo = $_POST["modelo"];
		};
		if(empty($_POST["ano"])){
			$ano = "";
		} else {
			$ano = $_POST["ano"];
		};
		$sql = 'call sp_add_veiculos("'.$placa.'", "'.$proprietario.'", "'.$modelo.'", "'.$ano.'")';
		$sucesso = '<div style="margin:20px"><p class="alert alert-success">Veículo Cadastrado com Sucesso!</p></div>';
		$erro = '<div style="margin:20px"><p class="alert alert-danger">Veículo não cadastrado</p></div>';
		$query = fastquery_messages($sql, $erro, $sucesso);
		$this->page->bodycontent .=$query;
		$this->page->render();
	}
	public function servEntrada(){
		if(empty($_POST["veiculo"])){
			$veiculo = "";
		} else {$veiculo = $_POST["veiculo"];};
		if(empty($_POST["arranhoes"])){
			$arranhoes = "";
		} else {$arranhoes = $_POST["arranhoes"];};
		if(empty($_POST["arranhoes_text"])){
			$arranhoes_text = "";
		} else {$arranhoes_text = $_POST["arranhoes_text"];};
		if(empty($_POST["farois"])){
			$farois = "";
		} else {$farois = $_POST["farois"];};
		if(empty($_POST["farois_text"])){
			$farois_text = "";
		} else {$farois_text = $_POST["farois_text"];};
		if(empty($_POST["objetos"])){
			$objetos = "";
		} else {$objetos = $_POST["objetos"];};
		if(empty($_POST["objetos_text"])){
			$objetos_text = "";
		} else {$objetos_text = $_POST["objetos_text"];};
		if(empty($_POST["vidros"])){
			$vidros = "";
		} else {$vidros = $_POST["vidros"];};
		if(empty($_POST["vidros_text"])){
			$vidros_text = "";
		} else {$vidros_text = $_POST["vidros_text"];};
		if(empty($_POST["calibragem"])){
			$calibragem = "";
		} else {$calibragem = $_POST["calibragem"];};
		if(empty($_POST["calibragem_text"])){
			$calibragem_text = "";
		} else {$calibragem_text = $_POST["calibragem_text"];};
		if(empty($_POST["limpeza"])){
			$limpeza = "";
		} else {$limpeza = $_POST["limpeza"];};
		if(empty($_POST["limpeza_text"])){
			$limpeza_text = "";
		} else {$limpeza_text = $_POST["limpeza_text"];};
		if(empty($_POST["orcamento"])){
			$orcamento = "";
		} else {$orcamento = $_POST["orcamento"];};
		if(empty($_POST["descricao"])){
			$descricao = "";
		} else {$descricao = $_POST["descricao"];};
		if(empty($_POST["valor"])){
			$valor = "";
		} else {$valor = $_POST["valor"];};
		if(empty($_POST["entrada"])){
			$entrada = "";
		} else {$entrada = $_POST["entrada"];};
		$sql = 'call sp_add_entradaserv("'.$arranhoes.'", "'.$arranhoes_text.'", "'.$farois.'", "'.$farois_text.'", "'.$objetos.'", "'.$objetos_text.'", "'.$vidros.'", "'.$vidros_text.'", "'.$calibragem.'", "'.$calibragem_text.'", "'.$limpeza.'", "'.$limpeza_text.'", "'.$orcamento.'", "'.$descricao.'", "'.$valor.'", "'.$entrada.'")';
		$sucesso = '<div style="margin:20px"><p class="alert alert-success">Veículo Cadastrado com Sucesso!</p></div>';
		$erro = '<div style="margin:20px"><p class="alert alert-danger">Veículo não cadastrado</p></div>';
		$query = fastquery_messages($sql, $erro, $sucesso);
		$this->page->bodycontent .=$query;
		$this->page->render();
	}
}
?>