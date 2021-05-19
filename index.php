<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	

	if(isset($_GET['e'])){ 
		$id = $_GET['e'];
		$main->viewEdit($id);
	}else if(isset($_GET['d'])){ 
		$id = $_GET['d'];
		$main->delete($id);
	}else if(isset($_GET['i'])){
	    $main->viewInsert();
	}else{
		$main->index(); 
	}
?>