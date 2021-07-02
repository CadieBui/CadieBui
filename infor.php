<?php 

session_start();
require('server.php');
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
$curUser=$_SESSION['userlogin'];
$query="SELECT* FROM users WHERE userName='$curUser' ";
$result=$db->query($query);

while($row=$result->fetch(PDO::FETCH_ASSOC))
{
    $id=$row['id'];
    $username=$row['userName'];
    $sex=$row['sex'];
    $birthday=$row['birthday'];
    $hobby=$row['hobby'];
    $address=$row['address'];
    $sport=$row['sport'];
    $intro=$row['abouyou'];
    $email=$row['email'];
    $country=$row['country'];
    $image1=$row['image1'];
    $image2=$row['image2'];
    $image3=$row['image3'];
    $travel_preferences=$row['travel_preferences'];
}
if(isset($_POST['save']))
{
    $name = $_POST['username'];
	$sex = $_POST['sex'];
	$birthday= $_POST['birthday'];
    $address= $_POST['address'];
    $hobby= $_POST['hobby'];
    $sport= $_POST['sport'];
    $intro= $_POST['intro'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $travel_preferences=$_POST['travel_preferences'];
    $image1=$_FILES['image1']['name'];
    $image2=$_FILES['image2']['name'];
    $image3=$_FILES['image3']['name'];
   
    $imgdir1='upload/'.basename($_FILES['image1']['name']);
    $imgdir2='upload/'.basename($_FILES['image2']['name']);
    $imgdir3='upload/'.basename($_FILES['image3']['name']);
          
if(!empty($_POST['username'])&&!empty($_POST['sex'])&&!empty($_POST['address'])&&!empty($_POST['hobby'])&&!empty($_FILES['image1']['name'])
    &&!empty($_FILES['image2']['name'])&&!empty($_FILES['image3']['name'])&&!empty($_POST['country'])&&!empty($_POST['sport'])&&!empty($_POST['travel_preferences'])
    &&!empty($_POST['hobby']))
{
        $query="UPDATE users SET userName='".$name."',
         sex='".$sex."',
        address='".$address."',
        email='".$email."',country='".$country."',
        birthday='".$birthday."',travel_preferences='".$travel_preferences."',sport='".$sport."',hobby='".$hobby."',abouyou='".$intro."',
        image1='".$image1."',image2='".$image2."',image3='".$image3."'
        WHERE id='".$id."' ";
    
    $result=$db->query($query);
    if(file_exists("upload/".$_FILES['image1']['name']))
    {
        $filename1=$_FILES['image1']['name'];
        $_SESSION['status']="This picture's file has already exit";
        header("Location: infor.php");
    }
    else if(file_exists("upload/".$_FILES['image2']['name']))
    {
        $filename2=$_FILES['image2']['name'];
        $_SESSION['status']="This picture's file has already exit";
        header("Location: infor.php");
    }
    else if(file_exists("upload/".$_FILES['image3']['name']))
    {
        $filename3=$_FILES['image3']['name'];
        $_SESSION['status']="This picture's file has already exit";
        header("Location: infor.php");
    }
    else{
       
        if($result)
        {
            move_uploaded_file($_FILES['image1']['tmp_name'],$imgdir1);
            move_uploaded_file($_FILES['image2']['tmp_name'],$imgdir2);
            move_uploaded_file($_FILES['image3']['tmp_name'],$imgdir3);
            $_SESSION['status']="Edit success";
            header("Location: infor_done.php");

        }

        }
    }
else
{
$_SESSION['status']=" Please insert all information including new photo before save";
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/infor.js"></script>
    <link rel="stylesheet" href="css/infor.css">
    <link rel="stylesheet" href="css/croppie.css">
    <script src="js/croppie.js"></script>
    <script src="js/croppie.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="/tdk/scripts/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        #return {
            position: absolute;
            top: 20px;
            left: 13%;
        }

        #user_data,
        #infor_done {
            background-color: #DDE7C7;
        }


        body {
            width: 80%;
            margin: 0 auto;
        }

        #header {
            width: 100%;
            height: 166px;
            background-color: #3a827bf0;
        }


        #user_name {
            background-color: #e7f6d6d6;
            border-radius: 28px;
            width: 176px;
            border: #f4fafa;
            position: relative;
            margin: 0 auto;
            padding: 10px;
            top: 174px;
            text-align: center;

        }

        #user_img {
            height: 400px;
        }

        #user_data,
        #infor_done {
            background-color: #baddda;
        }

        #user_data>form,
        #infor_done>form {
            width: 80%;
            margin: 0 auto;
        }

        #user_data>form>div,
        #infor_done>form>div {
            padding: 10px;
        }

        #img1 {
            width: 29%;
            height: 44%;
            position: relative;
            top: 25%;
            left: 4%;
            border: 1px solid black;
            float: left;
        }

        #img2 {
            width: 13%;
            height: 20%;
            position: absolute;
            top: 38%;
            left: 45%;
            border: 1px solid black;
            float: left;
        }

        #img3 {
            width: 15%;
            height: 30%;
            position: absolute;
            top: 23%;
            left: 67%;
            border: 1px solid black;
            float: left;
        }



        form>div {
            border-left: 1px solid rgb(66, 66, 66);
        }


        #user_headshot {
            border-radius: 100%;
            position: absolute;
            width: 100px;
            height: 100px;
            top: 100px;
            display: block;
            text-align: center;
            object-fit: cover;
            margin: 0 auto;
        }


        #container {
            padding: 10px 20px;
            margin: 0 auto;
            justify-content: center;
            display: flex;
        }

        .form-holder {
            position: relative;
            padding-left: 26px;
            margin-bottom: 25px;
            /* margin-bottom: 21px; */
            margin-left: 230px;
            margin-right: 100px;
            margin-top: 25px;
        }

        #lb {
            top: 10px;
            position: absolute;
            left: -163px;
            font-style: Rockwell;
            font-family: Rockwell;
            font-size: 18px;
        }

        .avartar-picker label {
            cursor: pointer;
            display: inline-block;
            color: #72b8b2;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: bolder;
            font-family: RockWell;
            padding: 15px;
        }

        .avartar-picker {
            padding-left: 15px;
            margin-top: 15px;
            margin-left: 53px;
            margin-bottom: 1px;
        }

        #file-1 {
            padding: 25px;
            border: none;
        }

        .form-holder:before {
            display: none;
        }

        #savebtn {
            width: 100px;
            background-color: cadetblue;
            border-radius: 15px;
            left: 600px;
            position: relative;
            padding: 4px;
            cursor: pointer;
            margin-bottom: 111px;
        }

        #savebtn:hover {
            background-color: #e7f6d6d6;
        }
    </style>

</head>

<script>
    $(document).ready(function () {
        var tooltips = $("[title]").tooltip({
            position: {
                my: "left top",
                at: "right+5 top-5",
                collision: "none"
            }
        });
    })
</script>

<body>


    <div id="header">
        <a href="infor_done.php"><img src="img/leftbtn.png" alt="" id="return"></a>
        <div id="container">
            <img id="user_headshot" src="<?php echo "upload/".$image1?>" alt="">
            <p id="user_name"><?php echo $username?></p>
        </div>



    </div>

    <div id="user_data">

        <form id="frm" action="" method="post" enctype="multipart/form-data">
            <section style="padding: 2px;">
                <div class="form-header">
                    <div class="avartar">
                        <a href="#">
                        </a>
                        <div class="avartar-picker">  
                            <div class="img1">
                                <input type="file" name="image1" class="img1" id="file-1" value="<?php echo $image1?>">

                            </div>
                            <div class="img2">
                                <input type="file" name="image2" class="img2" id="file-1" value="<?php echo $image2?>">

                            </div>
                            <div class="img3">
                                <input type="file" name="image3" class="img3" id="file-1" value="<?php echo $image3?>">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-holder active">
                    <label id="lb" for="">User Name</label>
                    <input name="username" title="Enter your name even if you don't want" type="text"
                        placeholder="User Name" class="form-control" id="username" value="<?php echo $username?>">
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Gender</label>
                    <select name="sex" id="sex" placeholder="Gender" class="form-control " value="<?php echo $sex?>">
                        <option class="dropdown-item" value="Male">Male</option>
                        <option class="dropdown-item"value="Female">Female</option>
                    </select>
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Birthday</label>
                    <input type="date" name="birthday" id="birthday" placeholder="Birthday" class="form-control"
                        value="<?php echo $birthday?>">
                </div>


                <div class="form-holder">
                    <label id="lb" for="">Email</label>
                    <input type="text" title=" Enter your email if you want" placeholder="Email" class="form-control"
                        name="email" id="email" value="<?php echo $email?>">
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Country</label>
                    <!-- <input type="password" placeholder="Create a password" class="form-control"> -->
                    <input type="text" name="country"
                        title="Let everyone know you are the special person from this country" placeholder="Country"
                        class="form-control" value="<?php echo $country?>">
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Address</label>
                    <!-- <input type="text" placeholder="Email" class="form-control"> -->
                    <select name="address" class="form-control" placeholder="Address" id="address"
                        value="<?php echo $address?>">
                        <option value="Keelung">基隆</option>
                        <option value="New_Taipei">新北</option>
                        <option value="Taipei">台北</option>
                        <option value="Taoyuan">桃園</option>
                        <option value="Hsinchu_County">
                            新竹(縣)</option>
                        <option value="Hsinchu_City">新竹(市)
                        </option>
                        <option value="Miaoli">苗栗</option>
                        <option value="Taichung">台中</option>
                        <option value="Changhua">彰化</option>
                        <option value="Nantou">南投</option>
                        <option value="Yunlin">雲林</option>
                        <option value="Chiayi_County">嘉義(縣)
                        </option>
                        <option value="Chiayi_City">嘉義(市)
                        </option>
                        <option value="Tainan">台南</option>
                        <option value="Kaohsiung">高雄</option>
                        <option value="Pingtung">屏東</option>
                        <option value="Yilan">宜蘭</option>
                        <option value="Hualien">花蓮</option>
                        <option value="Taitung">台東</option>
                        <option value="Penghu">澎湖</option>
                        <option value="Kinmen">金門</option>
                        <option value="Lienchiang">連江</option>
                        <option value="Green_Island">綠島
                        </option>
                        <option value="Orchid_Island">蘭嶼
                        </option>
                        <option value="Matsu">馬祖</option>
                    </select>
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Hobby</label>
                    <input type="text" class="form-control" title="Don't tell me that you don't have any hobby "
                        placeholder="Hobby" name="hobby" id="hobby" size="50%" value="<?php echo trim($hobby)?>">
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Travel preferences</label>
                    <select name="travel_preferences" class="form-control" placeholder="Travel preferences"
                        id="travel_preferences" value="<?php echo $travel_preferences?>">
                        <option value="Culinary delights">Culinary delights(美食)</option>
                        <option value="Well-known scenery">Well-known scenery(知名景點)</option>
                        <option value="Art tour">Art tour(文藝導覽)</option>
                        <option value="Hiking">Hiking(健行)</option>
                        <option value="Photography">Photography(拍照打卡)</option>
                    </select>
                </div>
                <div class="form-holder">
                    <label id="lb" for="">Favorite Sport</label>
                    <input type="text" class="form-control" title="Don't tell me that you don't play any sport, okay?"
                        name="sport" placeholder="Favorite Sport" id="sport" size="50%"
                        value="<?php echo trim($sport)?>">
                </div>

                <div class="form-holder">
                    <label id="lb" for="">Introduction</label>
                    <input type="text" class="form-control" name="intro" title="Tell me more about you shortly"
                        placeholder="Introduction" id="Self_intro" size="50%" value="<?php echo trim($intro)?>">
                  
                </div>
                <?php
if(isset($_SESSION['status']))
{
    ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> <?php echo $_SESSION['status'];?></strong>

                </div>

                <?php unset($_SESSION['status']);
}
?>
                <div>
                    <input name="save" type="submit" id="savebtn" value="Save">
                </div>
            </section>
        </form>
    </div>

</body>

</html>