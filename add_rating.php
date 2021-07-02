<?php
session_start();
require_once('server.php');

if($_POST)
{
    $curuser=$_SESSION['userlogin'];
    $sql="SELECT*FROM users WHERE userName='$curuser'";
    $result=$db->query($sql);

    while($row=$result->fetch(PDO::FETCH_ASSOC))
    {
        $ratingid=$row['id'];
    }
    $id=$_POST['id'];
    $name=$_POST['name'];
    $rating=$_POST['rating'];

    $sql2="SELECT * FROM `rating` where `ratinguser`='$ratingid' AND `rid`='$id'";
    $result=$db->query($sql2);
    if($result->rowCount()>0)
    {
        echo 2;
    }
    else 
    {
        try{
            $query="INSERT INTO rating(ratinguser,rid,rname,ratingstar) VALUE(?,?,?,?)";
            $rlt=$db->prepare($query);
            $rlt->execute([$ratingid,$id,$name,$rating]);	
		    if($query)
            {
                echo 1;
            }
            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
   
    }
    
?>