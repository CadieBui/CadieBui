<?php
session_start();
include "server.php";

if(isset($_POST))
{
	$curUser=$_SESSION['userlogin'];
	$sendid=$_POST['sendid'];
	$sendname=$_POST['sendname'];
	$sql='SELECT *FROM users WHERE userName="'.$curUser.'"';
	$rlt=$db->query($sql);
	while($row=$rlt->fetch(PDO::FETCH_ASSOC))
	{
		$curUserId=$row['id'];
	}
	$query='UPDATE users SET sendid="'.$sendid.'",sendmesname="'.$sendname.'" WHERE userName="'.$curUser.'" ';
	$result=$db->query($query);
	if($result)
	{
		echo 1;
		exit;
	}


}

?>