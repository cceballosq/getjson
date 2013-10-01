<?php 
/**
* 
*/
class index_controller extends appcontroller
{
	
	function __construct(){
   		parent::__construct();
	} 
	public function index($id=null){
		$base = new image;
		$this->view->datos = $base->findAll();
		
		$this->render();
	}
	public function getUserData($id=null){
		$usrObj = new image();
		//echo ($id. "prueba");
      	$datos = $usrObj->getUserComputers($id=null);
      	print_r($datos);   
    	//echo json_encode($datos);
	}


}



 ?>