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
		$this->page->bodycontent .= "clientes";
		$this->page->render();
		
	}
}
?>