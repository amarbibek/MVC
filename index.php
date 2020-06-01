<?php
if(isset($_GET['controller']) && isset($_GET['action'])){
	 $controller=$_GET['controller'];
	 $action=$_GET['action'];
}
function call($controller,$action){
	include('/controller/'.$controller.'.php');
	switch($controller){
		case 'Layoutcontroller':
		$controller=new Layoutcontroller();
		break;
		case 'Admincontroller':
	    include('/model/crudmodel.php');
		$controller=new Admincontroller();
		break;
	}
	$controller->{$action}();
}
$controllers=array('Layoutcontroller'=>['home','contact'],'Admincontroller'=>['insert','newsinsert','viewnews','delete','edit','update']);
if(array_key_exists($controller,$controllers)){
	if(in_array($action,$controllers[$controller])){
		call($controller,$action);
	}else{
		echo "page not found";
	}
}else{
		echo "page not found";
	}
?>