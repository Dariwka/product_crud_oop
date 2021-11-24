<?php
 require_once('products.php');
 $sku = $_GET['sku'];
 
 $res = $database->delete($sku);
 if($res){
 	header('location: index.php');
 }else{
 	echo "Failed to Delete Record";
 }
?>