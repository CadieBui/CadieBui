<?php

session_start();
session_unset();
if(!isset($_SESSION['userlogin']))
{
    header("Location: index.php");
}

if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION);
    header("Location: index.php");
}
session_destroy();
header('Location: index.php');

?>