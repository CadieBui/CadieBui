<?php
session_start();
require_once('server.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=:username AND password=:password";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute(array('username'=>$_POST["username"],'password'=>$_POST["password"]));


if($result){
	
	$count=$stmtselect->rowCount();
	if( $count> 0){
		$_SESSION['userlogin'] =$_POST['username'] ;
		
        echo "1";
		
	}else{
		echo 'Username or Password is wrong';		
	}
}
else{
	echo 'There were errors while connecting to database.';
}

?>