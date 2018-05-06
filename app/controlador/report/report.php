<?php
class report{
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
	public function index(){
		$this->page->render();

	}
	public function clientes(){
		$sql = "call sp_all_clientes()";
		$query =  retornadbinfo($sql);
		//$dados = $query->fetch(PDO::FETCH_ASSOC);
		//print_r($dados); Array ( [id] => 4 [nome] => pirilanpo [endereco] => canal globo - a novela [cidade] => saracura [bairro] => [fone1] => (09) 09090-9090 [email] => isso@teste.com [whatsapp] => 0 [nascimento] => 2018-03-21 [cnpj_cpf] =>
		$tabela = '<div class="content" style="margin:20px"><table class="table table-striped custab"><thead><tr><th>Nome</th><th>Cidade</th><th>Bairro</th><th>Fone</th><th>Ações</th></tr></thead>';
		while ($dados = $query->fetch(PDO::FETCH_ASSOC)) {
			$tabela .= '<tr><td>'.$dados["nome"].'</td><td>'.$dados["cidade"].'</td><td>'.$dados["bairro"].'</td><td>'.$dados["fone1"].'</td><td><a class="btn btn-info btn-xs" href="/edita/cliente/'.$dados["id"].'"><span class="glyphicon glyphicon-edit"></span>Editar</a><a href="/deleta/cliente/'.$dados["id"].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>Apagar</a></td></tr>';
		};
		$tabela .="</table></div>";
		//$tabela = new tableButtonsEdit;
		$this->page->bodycontent .= $tabela;//->render();
		$this->page->render();
		
	}
}
?>