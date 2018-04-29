<?php
/*
Data Criação: 22/04/2018

*/
class tableColContents{
	public $cols = [];
	public $colsTitle = [];
	public $resultSet;
	public function __construct(){
		//if (isset($this->$colsTitle) and isset($this->$cols)){}
	}
	public function html(){
		foreach ($this->cols as $chave => $valor) {
			echo '<tr><td>'.$chave.'</td><td>'.$valor.'</td>
                <td>News Cate</td>
                <td class="text-center"><a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>';
		};
		while ($data = $this->resultSet->fetch(PDO::FETCH_ASSOC)) {
			echo 
		}
	}
}
?>