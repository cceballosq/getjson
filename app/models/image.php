<?php

class image extends models
{ 
	public function getUserComputers($id=null){
		if ($id) {
			$sql= "SELECT * FROM image WHERE $id = name
			";
		}else{
			$sql = array('name' => 'no encontrado' );
/*
			$sql = "
			SELECT * FROM images ORDER BY image_id DESC 
		";*/
		}		
		return $this->findAllBySQL($sql);
	}


}


?>
