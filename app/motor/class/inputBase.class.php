<?php
/*
Data criação: 07/04/2018
Última alteração: 09/04/2018
Autor: Daniel J. Santos
*/
class inputBase{
	public $type = 'text';
	public $name;
	public $id;
	public $extras;
	public $value;
	public $class;
	public $addContent;
	public $tagContent;
	public $placeHolder;

	public function __construct($type=""){
		$this->type = $type;
	}
	public function render(){
		switch ($this->type) {
			case 'select':
				$this->addContent = '<select class="'.$this->class.'" name="'.$this->name.'" '.$this->extras.' id="'.$this->id.'">'.$this->tagContent.'</select>';
				echo $this->addContent;
				break;
			case 'checkbox':
				$this->addContent = $this->tagContent . '<input type="checkbox" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'" '.$this->extras.' />';
				echo $this->addContent;
				break;
			case 'textarea':
				$this->addContent = '<textarea name="'.$this->name.'" id="'.$this->id.'" class="'.$this->class.'" value="'.$this->value.'"></textarea>';
				echo $this->addContent;
				break;
			case 'radio':
				$this->addContent = '<input type="radio" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'"/>';
				echo $this->addContent;
				break;
			case 'submit':
				$this->addContent = '<input type="submit" name="'.$this->name.'" id="'.$this->id.'" '.$this->extras.' value="'.$this->value.'" class="'.$this->class.'"/>';
				echo $this->addContent;
				break;
			case 'reset' :
				$this->addContent = '<input type="reset" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'"/>';
				echo $this->addContent;
				break;
			default:
				$this->addContent = '<input type="text" name="'.$this->name.'" id="'.$this->id.'" '.$this->extras.' class="'.$this->class.'" value="'.$this->value.'" placeholder="'.$this->placeHolder.'" />';
				echo $this->addContent;
				break;
		}
	}
	public function html(){
		switch ($this->type){
			case 'select':
				$this->addContent = '<select class="'.$this->class.'" name="'.$this->name.'" '.$this->extras.' id="'.$this->id.'">'.$this->tagContent.'</select>';
				return $this->addContent;
				break;
			case 'checkbox':
				$this->addContent = $this->tagContent . '<input type="checkbox" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'" '.$this->extras.' />';
			return $this->addContent;
			case 'textarea':
				$this->addContent = '<textarea name="'.$this->name.'" id="'.$this->id.'" class="'.$this->class.'" value="'.$this->value.'" cols="5" rows="6"></textarea>';
			return $this->addContent;
			case 'radio':
				$this->addContent = '<input type="radio" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'"/>';
				return $this->addContent;
				break;
			case 'submit':
				$this->addContent = '<input type="submit" name="'.$this->name.'" id="'.$this->id.'" '.$this->extras.' value="'.$this->value.'" class="'.$this->class.'"/>';
				return $this->addContent;
				break;
			case 'reset' :
				$this->addContent = '<input type="reset" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" class="'.$this->class.'"/>';
				return $this->addContent;
				break;
			default:
				$this->addContent = '<input type="text" name="'.$this->name.'" id="'.$this->id.'" '.$this->extras.' class="'.$this->class.'" value="'.$this->value.'" placeholder="'.$this->placeHolder.'" />';
				return $this->addContent;
				break;
		}
	}
	public function help(){
		include (PUBLICDIR.'help/'.getclass().'php');
		helpThis();
	}
}
?>