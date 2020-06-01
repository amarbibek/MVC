<?php
class Layoutcontroller{
	public function home(){
	include('view/layout.php');
}


public function contact(){
	echo "this is contact section";
}
}

class Admincontroller{
	public function login(){
		echo"this is login section";
//	include('view/layout.php');
}
}

?>