<?php
/*
Data criação: 07/04/2018
Última alteração: 07/04/2018
Autor: Daniel J. Santos

*/
class inputsBase{
	public $tag;
	public $name;
	public $id;
	public $extras;
	public $tagMode = "double";
	public $addContent;

	public function __construct($tag){
		$this->tag = $tag;
	}
	public function render(){
		if ($this->tagMode =="double"){
		$this->addContent = '<'.$this->tag.'></'.$this->tag.'>';
		} else {
			$this->addContent = '<'.$this->tag.'/>';
		};
		echo $this->addcontent;
	}
	public function html(){
		if ($this->tagMode =="double"){
		$this->addContent = '<'.$this->tag.'></'.$this->tag.'>';
		} else {
			$this->addContent = '<'.$this->tag.'/>';
		};
		return $this->addcontent;
	}
}
?>