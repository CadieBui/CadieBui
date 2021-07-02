<?php
require_once('server.php');


if(isset($_POST)){

	$name = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$birthday= $_POST['birthday'];
    $country= $_POST['country'];
	
	if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['email'])&&!empty($_POST['birthday'])&&!empty($_POST['country']))
	{
		$sql = "INSERT INTO users (userName,password,birthday,email,country) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $password,$birthday,$email,$country]);
		if($result){
			
			echo 1;
			
		}else{
			echo 'There were erros while saving the data.';
		}
	}

		
}else{
	echo 'No data';
}
?>