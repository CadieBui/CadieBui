<?php
session_start();
require_once("server.php");


if(isset($_POST)) {
    try 
    {
    $nameid=$_POST['nameid'];
    $id=$_POST['id'];
    $place=$_POST['name'];
    $area=$_POST['areaid'];
    $city=$_POST['cityid'];
    $query="UPDATE `users` SET `place`='".$place."',`place_id`='".$nameid."',`city_id`='".$city."',`area_id`='".$area."' WHERE `id`='".$id."'";
    $result=$db->query($query);
    if($result)
    {
        echo "ok";
    }
} 
catch(PDOException $e) {
    echo $e->getMessage();
  }


}
?>