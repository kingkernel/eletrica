<?php
class clienteForms {
	public $cadIn;
	public $cadInAuth;

	public function __construct(){

	}
	public function cadastroIn(){
		// campos do formulário
			$nome = new inputAddOn;
				$nome->inputPlaceholder = "Nome do cliente";
				$nome->inputIcon = "glyphicon glyphicon-user";
				$nome->inputName = "acessor";

			$city = new inputAddOn;
				$city->inputPlaceholder = "Cidade";
				$city->inputIcon = "glyphicon glyphicon-globe";
				$city->inputName = "cidade";

			$bairro = new inputAddOn;
				$bairro->inputPlaceholder = "Bairro";
				$bairro->inputIcon = "glyphicon glyphicon-map-marker";
				$bairro->inputName = "bairro";

			$rua = new inputAddOn;
				$rua->inputPlaceholder = "Rua";
				$rua->inputIcon = "glyphicon glyphicon-road";
				$rua->inputName = "rua";

			$numero = new inputAddOn;
				$numero->inputPlaceholder = "Número";
				$numero->inputIcon = "glyphicon glyphicon-home";
				$numero->inputName = "numero";

			$email = new inputAddOn;
				$email->inputPlaceholder = "E-mail";
				$email->inputIcon = "glyphicon glyphicon-envelope";
				$email->inputName = "email";

			$fone1 = new inputAddOn;
				$fone1->inputPlaceholder = "Fone 1";
				$fone1->inputIcon = "glyphicon glyphicon-phone";
				$fone1->inputName = "fone1";

			$nasc = new inputAddOn;
				$nasc->inputPlaceholder = "Nascimento";
				$nasc->inputIcon = "glyphicon glyphicon-calendar";
				$nasc->inputName = "fone2";
				$nasc->inputExtras = 'data-provide="datepicker"';

			$zap = new input_checkbox;
				//$zap->inputPlaceholder = "Whatsapp";
				//$zap->inputIcon = "fa fa-whatsapp";
				$zap->name = "zap";
				$zap->value = "1";

			$cpf = new inputAddOn;
				$cpf->inputPlaceholder = "CPF ou CNPJ";
				$cpf->inputIcon = "fa fa-lock";
				$cpf->inputName = "cpf";

	//	$hidden1 = '<input type="hidden" name="licenca" value="'.$_SESSION["userinfo"]["idlicenca"].'">';
	//	$hidden2 = '<input type="hidden" name="iduser" value="'.$_SESSION["userinfo"]["id"].'">';
		$submit = '<input type="submit" value="cadastrar" class="btn btn-primary pull-right" style="margin:10px" id="cadAssessorBtn">';

			$this->cadIn[0] = $nome->html().$city->html().$bairro->html().$rua->html().$numero->html().$email->html().$fone1->html().$nasc->html().$cpf->html()./*$hidden1.$hidden2.*/$submit;
			$this->cadIn[1] = $zap->addcss;
			$this->cadIn[2] = '$(\'#id_'.$nasc->inputName.'\').datepicker({language: \'pt-BR\', format: "yyyy-mm-dd",});$("#id_'.$fone1->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$nasc->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$zap->name.'").mask(\'(99) 99999-9999\');$("#cadAssessorBtn").click(function(){/* variaveis */var nome = $("#id_'.$nome->inputName.'").val();var cidade = $("#id_'.$city->inputName.'").val();var bairro = $("#id_'.$bairro->inputName.'").val();var rua = $("#id_'.$rua->inputName.'").val();var numero = $("#id_'.$numero->inputName.'").val();var email = $("#id_'.$email->inputName.'").val();var fone1 = $("#id_'.$fone1->inputName.'").val();var fone2 = $("#id_'.$nasc->inputName.'").val();var zap = $("#id_'.$zap->name.'").val();var cpf = $("#id_cpf").val();var hidden1 = "'./*$_SESSION["userinfo"]["idlicenca"].*/'"; var iduser = "'./*$_SESSION["userinfo"]["id"].*/'";/* autenticação de campos *//* nome do eleitor */if(nome == ""||nome==null){alert("é preciso o nome do cliente");$("#id_'.$nome->inputName.'").addClass("white label-warning");$("#id_'.$nome->inputName.'").focus();return false;};/* cidade */if(cidade == ""|| cidade ==null){alert("Qual a cidade do cliente?");$("#id_'.$city->inputName.'").addClass("white label-warning");$("#id_'.$city->inputName.'").focus();return false;}; /* envio de dados */if($("#'.$zap->name.'").is(":checked")){zap="1";};$("#ajax").load("'.(urlcss($_GET)).'grava/assessor/",{eleitor:nome, cidade: cidade,bairro: bairro, rua: rua, numero:numero, email:email, fone1:fone1, fone2:fone2, zap:zap, licenca:hidden1, iduser:iduser, cpf:cpf});});';
			return $this->cadIn;
	}
	public function cadastroInAuth(){
		$this->cadInAuth;
		return $this->cadInAuth;
	}
	public function editaClientes($id){
		$sql = 'call sp_sel_clientes('.$id.')';
		$dados = retornadbinfo($sql);
		$query = $dados->fetch(PDO::FETCH_ASSOC);

		$form = new formbootstrap;
		$form->action = "update/cliente/".$id;

		// campos do formulário
			$nome = new inputAddOn;
				$nome->inputIcon = "glyphicon glyphicon-user";
				$nome->inputName = "acessor";
				$nome->inputValue = $query["nome"];

			$city = new inputAddOn;
				$city->inputPlaceholder = "Cidade";
				$city->inputIcon = "glyphicon glyphicon-globe";
				$city->inputName = "cidade";
				$city->inputValue = $query["cidade"];

			$bairro = new inputAddOn;
				$bairro->inputIcon = "glyphicon glyphicon-map-marker";
				$bairro->inputName = "bairro";
				$bairro->inputValue = $query["bairro"];

			$rua = new inputAddOn;
				$rua->inputIcon = "glyphicon glyphicon-road";
				$rua->inputName = "rua";
				$rua->inputValue = $query["endereco"];

			$email = new inputAddOn;
				$email->inputIcon = "glyphicon glyphicon-envelope";
				$email->inputName = "email";
				$email->inputValue = $query["email"];

			$fone1 = new inputAddOn;
				$fone1->inputValue = $query["fone1"];
				$fone1->inputIcon = "glyphicon glyphicon-phone";
				$fone1->inputName = "fone1";
				
			$nasc = new inputAddOn;
				$nasc->inputValue = $query["nascimento"];
				$nasc->inputIcon = "glyphicon glyphicon-calendar";
				$nasc->inputName = "fone2";
				$nasc->inputExtras = 'data-provide="datepicker"';

			$hidden1 = '<input type="hidden" name="iduser" value="'.$query["id"].'">';
			
			$submit = '<input type="submit" value="cadastrar" class="btn btn-primary pull-right" style="margin:10px" id="cadAssessorBtn">';

			$cpf = new inputAddOn;
				$cpf->inputValue = $query["cnpj_cpf"];
				$cpf->inputIcon = "fa fa-lock";
				$cpf->inputName = "cpf";
		$submit = '<input type="submit" value="cadastrar" class="btn btn-primary pull-right" style="margin:10px" id="cadAssessorBtn">';
			$this->cadIn[0] = $nome->html().$city->html().$bairro->html().$rua->html().$hidden1./*$numero->html().*/$email->html().$fone1->html().$nasc->html().$submit;/*.$zap-
			>html().$hidden1.$hidden2.*/ 
			return $this->cadIn;
		$form->formitens = [$nome, $city, $bairro, $rua, $hidden1, $email, $fone1, $nasc, $submit];
		return $form->html();
		/*

			$zap = new input_checkbox;
				//$zap->inputPlaceholder = "Whatsapp";
				//$zap->inputIcon = "fa fa-whatsapp";
				$zap->name = "zap";
				$zap->value = "1";


			//$submit;
			//$this->cadIn[1] = $zap->addcss;
			//$this->cadIn[2] = '$(\'#id_'.$nasc->inputName.'\').datepicker({language: \'pt-BR\', format: "yyyy-mm-dd",});$("#id_'.$fone1->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$nasc->inputName.'").mask(\'(99) 99999-9999\');$("#id_'.$zap->name.'").mask(\'(99) 99999-9999\');$("#cadAssessorBtn").click(function(){ 				var nome = $("#id_'.$nome->inputName.'").val();var cidade = $("#id_'.$city->inputName.'").val();var bairro = $("#id_'.$bairro->inputName.'").val();var rua = $("#id_'.$rua->inputName.'").val();var numero = $("#id_'.$numero->inputName.'").val();var email = $("#id_'.$email->inputName.'").val();var fone1 = $("#id_'.$fone1->inputName.'").val();var fone2 = $("#id_'.$nasc->inputName.'").val();var zap = $("#id_'.$zap->name.'").val();var hidden1 = "'./*$_SESSION["userinfo"]["idlicenca"].*/
				/*'"; var iduser = "'./*$_SESSION["userinfo"]["id"].*/
				/*'";/* autenticação de campos *//* nome do eleitor */
				/*if(nome == ""||nome==null){alert("é preciso o nome do cliente");$("#id_'.$nome->inputName.'").addClass("white label-warning");$("#id_'.$nome->inputName.'").focus();return false;};/* cidade */
				/*if(cidade == ""|| cidade ==null){alert("Qual a cidade do cliente?");$("#id_'.$city->inputName.'").addClass("white label-warning");$("#id_'.$city->inputName.'").focus();return false;};							if($("#'.$zap->name.'").is(":checked")){zap="1";};$("#ajax").load("'.(urlcss($_GET)).'update/cliente/",{eleitor:nome, cidade: cidade,bairro: bairro, rua: rua, numero:numero, email:email, fone1:fone1, fone2:fone2, zap:zap, licenca:hidden1, iduser:iduser});});';
			return $this->cadIn;
			*/
	}
	
}
?>