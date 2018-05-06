<?php
class inputAddOn{
	/*
	Data edição: 24/04/2018
	*/
	public $somacontent;
	public $sideInput ="right"; 							// right || left: default "right"
	public $inputIcon = "glyphicon glyphicon-home";
	public $inputPlaceholder = 'Enter your placeholder';
	public $inputName = "";
	public $inputType = "text";
	public $inputExtras = '';
	public $inputValue = '';

	public function html(){
		$icone = '<span class="input-group-addon"><i class="'.$this->inputIcon.'" aria-hidden="true"></i></span>';
		$this->somacontent = '<div class="input-group">';
			if ($this->sideInput == "right"){$this->somacontent.= $icone;};
		$this->somacontent .= '<input type="'.$this->inputType.'" class="form-control" name="'.$this->inputName.'" id="id_'.$this->inputName.'"  placeholder="'.$this->inputPlaceholder.'" value="'.$this->inputValue.'" '.$this->inputExtras.'/>';
			if ($this->sideInput == "left"){$this->somacontent.= $icone;};
		$this->somacontent .= '</div>';
		return $this->somacontent;
	}
}
?>