<?php
class servico{
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

	}
	public function entrada(){
		
		$this->page->bodycontent .=  "entrada";
		$this->page->render();
	}
}
?>