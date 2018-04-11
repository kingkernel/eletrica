<?php
class toSelect{
	public $extras;
	public function __construct(){
		
	}
	public function querydata($sql, $idcol, $textcol, $value1=""){
		$query = retornadbinfo($sql);
		$option = $value1;
		while ($data = $query->fetch(PDO::FETCH_ASSOC)){
			$option .= '<option value="'.$data[$idcol].'" >'.$data[$textcol].'</option>';
		};
		return $option;
	}
}
?>