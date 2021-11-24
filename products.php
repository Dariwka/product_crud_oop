<?php

class Products{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'newproductdb');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function create($sku, $name, $price){
		$sql = "INSERT INTO `products` (sku, name, price) VALUES ('$sku', '$name', '$price')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

	public function read($id=null){
		$sql = "SELECT * FROM `products`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	// public function update($sku, $name, $price, $id){
	// 	$sql = "UPDATE `products` SET sku='$sku', name='$name', price='$price' WHERE id=$id";
	// 	$res = mysqli_query($this->connection, $sql);
	// 	if($res){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	public function delete($sku){
		$sql = "DELETE FROM `products` WHERE sku='". $sku ."'";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Products();

?>