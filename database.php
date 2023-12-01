<?php
try{
	$con=new PDO("mysql:host=localhost;dbname=form_data","root","");
}catch(PDOExection, $e){
	echo $e->getMessage();
}
?>