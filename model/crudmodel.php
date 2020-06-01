<?php
class Crud{
public static $host="localhost";
public static $username="root";
public static $pass="";
public static $db="project";
protected static $con;
	public static function getconnection(){
		return self::$con=new mysqli(self::$host,self::$username,self::$pass,self::$db);
	}
	public static function newsinsertmodel($title,$summary,$des){
		
		$db=self::getconnection();
		$sql="insert into newinsert(title,summary,des) values('$title','$summary','$des')";
		return $db->query($sql);
	}
	
	
	public static function viewnewsmodel(){
		$db=self::getconnection();
		$sql="select * from newinsert";
		return $db->query($sql);
	}
	public static function deletemodel($id){
		$db=self::getconnection();
		$sql="delete from newinsert where id=$id";
		return $db->query($sql);
	}
	public function get_single_value($id){
		$db=self::getconnection();
		$sql="select * from newinsert where id=$id";
		return $db->query($sql);
	}
	public static function updatemodel($id,$title,$summary,$des){
		$db=self::getconnection();
		$sql="update newinsert set title='$title',summary='$summary',des='$des' where id='$id' ";
		return $db->query($sql);
	}

}