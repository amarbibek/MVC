<?php
session_start();
class Admincontroller{
	public function insert(){
//		echo"this is login section";
include('/view/insert_news.php');
}
	public static function newsinsert(){
		//$crud=new Crud;
		//echo "jwehjehkwe";exit;
if(isset($_POST['submit'])){
$title=$_POST['title'];
$summary=$_POST['summary'];
$des=$_POST['des'];
$result=Crud::newsinsertmodel($title,$summary,$des);
if($result){
	echo "news inserted";
}
else{
	echo "fails";
}


}
}
	public static function viewnews(){
		$result=Crud::viewnewsmodel();
		
			 include('/view/newsview.php');
	}
	public static function delete(){
		$id=$_GET['id'];
		$result =Crud::deletemodel($id);
		if($result){
			//echo "deleted";
			 header('location:index.php?controller=Admincontroller&action=viewnews');
		}else{
			echo "failed";
		}
	} 
		public static function edit(){
		$id=$_GET['id'];
		//$_SESSION['id']=$id; //id has put into session to update the table data from update function
		$result =Crud::get_single_value($id);
		include('/view/edit.php');
	}
	public static function update(){
		if(isset($_POST['update'])){
		$title=$_POST['title'];
		$summary=$_POST['summary'];
		$id= $_POST['hidden'];  //we can use hidden type
		$des=$_POST['des'];
		
		//$id=$_SESSION['id'];//here we can use session also
		//echo $id;
		
		$result=Crud::updatemodel($id,$title,$summary,$des);
	if($result){
		 header('location:index.php?controller=Admincontroller&action=viewnews');
	}
	else{
		echo "fails";
	}


	}
}	
}

?>