<?php 
session_start();
require_once('server.php');
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

$query="SELECT* FROM users WHERE userName='".$curUser."' ";
$result=$db->query($query);
// $north=;
// $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);
// echo $place['pSight'];
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
    $place=$row['place'];
    
    // if(!empty($row['place']))
    // {
    //     header('location:home.php');
    // }

   
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Unlock your road</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="js/jQuery.SimpleCart.js"></script>
    <!-- <link rel="stylesheet" href="css/choice1.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="css/choice2.css" media="screen and (min-width:1100px) and (max-width:1300px)"> -->
    <!-- <link rel="stylesheet" href="css/choice3.css" media="screen and (min-width:500px) and (max-width:1099px)"> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/choice.js"></script>
    <style>
        body {
            position: relative;
        }

        .logo {
            position: sticky;
            width: 50px;
            height: 50px;
            /* margin: 25px; */
            margin-left: 29px;
            margin-top: 20px;
            display: inline-block;
        }

        #imglogo {
            /* position: sticky; */
            width: 50px;
            height: 50px;
            /* margin: 25px; */
        }

        #smileface {
            float: right;
            /* margin-right: 45px; */
            position: relative;
            right: 148px;
            cursor: pointer;
            top: 15px;
        }

        #next {
            position: relative;
            top: 10px;
            right: 20px;
            cursor: pointer;
            float: right;

        }

        #next:hover {
            border: none;
        }

        #skip {
            position: relative;
            top: 10px;
            left: 10px;
            cursor: pointer;
            float: left;
        }

        * {
            font-family: "微軟正黑體";
        }

        #container {
            margin: 0 auto;
        }

        #skip_next {
            position: fixed;
            width: 100%;
        }



        #blockL {
            clear: both;
            width: 20%;
            line-height: 50px;
            float: left;
        }

        #blockR {
            clear: both;
            float: right;
            width: 70%;
            /*background-image: url('');*/
        }

        #header1 h3,
        #header2 h3,
        #header3 h3,
        #header4 h3 {
            padding: 100px 0px 0px 30px;
            cursor: pointer;
        }

        #header2,
        #header3,
        #header4,
        .Dir,
        .attration {
            display: none;
        }

        .Transportation,
        .Dir {
            position: absolute;
            width: 100px;
            background-color: rgb(183, 228, 199);
            line-height: 100px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            transition: background-color 1s;
            cursor: pointer;
            
            padding: 5px;
        }

        .Dir {
            transition: border-radius 1s;
        }

        .Transportation {
            border-radius: 50%;
            top: 100px;
        }

        .Dir {
            top: 250px;
        }

        #walk {
            left: 40%;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 33px;
            padding-left: 15px;
        }

        #car {
            left: 60%;
        }

        #n {
            left: 20%;
        }

        #c {
            left: 35%;
        }

        #s {
            left: 50%;
        }

        #e {
            left: 65%;
        }

        #islands {
            left: 80%;
        }

        .Region {
            /*    clear: both;*/
            margin: 0 auto;
            position: absolute;
            display: none;

        }

        #Region_r1 {
            top: 360px;
        }

        #Region_r2 {
            top: 450px;
        }

        .col-md-2 {
            width: 97px;
            background-color: rgb(183, 228, 199);
            line-height: 23px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 97%;
            transition: border-radius 2s;
            display: inline-flex;
            border: 1px solid rgb(178 199 188);
        }

        .card {
            display: block;
            float: right;
            width: 25%;
        }

        .c4 {
            display: none;
        }

        .s {
            font-size: 20px;
            cursor: pointer;
        }

        .color_choice {
            background-color: rgb(0, 191, 125);
        }

        .border_fadein {
            border-radius: 40%;
            border: 3px solid rgb(0, 191, 125);
        }

        .star_mousedown {
            color: burlywood;
            font-size: 20px;
        }

        li {
            list-style: none;
            font-size: 14px;
        }

        .card-text {
            font-size: 15px;
        }

        .btn_attration {
            position: absolute;
            top: 700px;
            /*讓他們的位置永遠在最兩邊*/
            width: 100%;
            display: none;

        }

        .btn_next,
        .btn_previous {
            border-radius: 50%;
            height: 100px;
            width: 100px;
            cursor: pointer;
            background-color: rgba(183, 228, 199, 0.6);
            text-align: center;
            line-height: 90px;
            font-size: 50px;
        }

        .btn_next {
            float: right;
            right: 20px;
            position: absolute;
        }

        .btn_previous {
            float: left;
            margin: 0px 0px 0px 24px;
        }

        .intro_detail {
            margin: 0 auto;
            background-color: cadetblue;
            height: 550px;
            width: 800px;
            position: relative;
            top: 550px;
            display: none;
            box-shadow: 0px 0px 3px 3px rgba(0, 0, 0, 0.5);
        }

        .detail_img ul {
            position: relative;
            left: 15%;
        }

        .detail_img li {
            position: absolute;
            width: 100%;
        }

        .detail_img li img {
            width: 500px;
        }

        .detail_img ul li p {
            font-weight: bold;
            font-size: 20px;
            height: 50px;
        }

        .detail_img_link ul li a {
            text-indent: -9999px;
            text-decoration: none;
            border-radius: 7px;
            background-color: rgb(235, 255, 242);
            width: 14px;
            height: 14px;
        }

        .detail_img_link li {
            display: inline-flex;
        }

        /*輪播圖片連結*/
        .detail_img_link {
            height: 30px;
            position: absolute;
            top: 330px;
            left: 320px;
        }

        /*輪播圖片標題*/
        .detail_head {
            position: absolute;
            top: 300px;
            background-color: rgba(255, 255, 255, 0.6);
            width: 500px;
            text-align: center;
            padding: 5px;
        }

        .detail_txt {
            position: absolute;
            top: 350px;
            left: 18%;
            font-weight: bold;
        }

        .detail_txt a {
            color: aliceblue;
        }

        .detail_close {
            position: absolute;
            cursor: pointer;
            right: 0%;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: rgb(240, 248, 255);
            line-height: 40px;
            font-size: 30px;
        }

        .btn_detail {
            background-color: cadetblue;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .target {
            background-color: rgb(55, 181, 100);
        }

        .btn-outline-success {
            background-color: rgb(183, 228, 199);

            border: 4px solid white;
            border-radius: 18px;
            width: 80px;
            height: 40px;
            text-align: center;
            font-size: 14px;

            color: #52B788;
        }

        .btn-outline-success:hover {
            background-color: #52B788;
            border: 4px solid #52B788;

        }

        .bi-emoji-heart-eyes {
            color: #fedf30;

        }

        .bi-emoji-heart-eyes:hover {
            color: #52B788;
        }

        .btn-danger {
            height: 23px;
            font-size: 7px;
            position: absolute;
            height: 23px;
            font-size: 7px;
            right: 21px;
            right: 8px;
            color: #fff;
            background-color: #e9d526;
            border-color: #f6f3f3;
        }


        .cart-column {
            display: contents;
        }

        .btn-primary {
            color: #fff;
            background-color: #72c3bb;
            border-color: #91efe6;
        }

        .btn-primary:hover,
        .btn-primary:hover,
        .btn-primary:active {
            color: #fff;
            background-color: #72c3bb;
            border-color: #91efe6;
        }

        .cart-total-title {
            float: right;
            right: 107px;
            position: absolute;
        }

        .card-deck {
            /* display: table; */
            width: 94%;
            margin: 0, auto;
            margin: 0 auto;
            position: absolute;
            left: -84px;
            top: 566px;
            display: none;
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 1.2rem;
            background-color: #b9eae5;
            border-color: #f8fdfd;
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform;
            width: 25%;
            /* font-size: 26px; */
        }

        .swal-text {
            font-size: 25px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box;
        }

        #add-cart.btn:hover {
            color: burlywood;
        }

        .col-md-2:hover {
            cursor: pointer;
        }

    </style>

</head>

<body>
    <div id="container">

        <!--skip、next-->
        <div id="skip_next">

        </div>
        <div class="logo">
            <img src="img/web_logo.png" id="imglogo"></img>
        </div>
        <input type="button" class="btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter" id="next" value="Next">
    </div>
    <form action="" method="POST">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">你選擇的地點</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <section class="container content-section">

                        <!-- <div class="cart-row"> -->
                        <!-- <span class="cart-item cart-header cart-column">地點</span> -->
                        <!-- <span class="cart-price cart-header cart-column">PRICE</span> -->
                        <!-- <span class="cart-quantity cart-header cart-column">QUANTITY</span> -->
                        <!-- </div> -->
                        <div class="cart-items">
                        </div>
                        <!-- <div class="cart-total">
                                <span class="cart-total-number" style="float: right;">0</span>
                                <strong class="cart-total-title" style="float: right;">總共</strong>

                            </div> -->
                        <!-- <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button> -->
                    </section>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">重選
                        </button>
                        <!-- <button type="button" name="savebtn" class="btn btn-primary"></button> -->
                        <input type="button" name="savebtn" id="savebtn" class="btn btn-primary" value="儲存">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="blockR">
        <!--交通工具-->
        <div class='row'>
            <img class="Transportation" id="walk" src="car.png" alt="">
            <img class="Transportation" id="car" src="walk.png" alt="">
        </div>
        
        <!--區域-->
        <div class="row">
            <div class="Dir" id="n" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];
                             ?>
            </div>
            <div class="Dir" id="c" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="s" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="e" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
            <div class="Dir" id="islands" cid=' <?php $place=($db->query(('SELECT `pArea` FROM `place` WHERE `pArea`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pArea'];?>'>
                <?php $place=($db->query(('SELECT `pAreaName` FROM `place` WHERE `pArea`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pAreaName'];?>
            </div>
        </div>

        <!--地區-->
        <div class="row Region" id="Region_r1">
            <div class="col-md-2" id="p1" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'><?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND  `pCity`=1'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p2" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'>
                <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?>
            </div>
            <div class="col-md-2" id="p3" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
        </div>
        <div class="row Region" id="Region_r2">
            <div class="col-md-2" id="p4" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p5" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=5 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>
            <div class="col-md-2" id="p6" ctid=' <?php $place=($db->query(('SELECT `pCity` FROM `place` WHERE `pArea`=1 AND  `pCity`=6 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pCity'];?>'> <?php 
                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 '))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pCityName'];
                        ?></div>

        </div>

    </div>

    <!--景點-->
    <form action="" method="POST">
        <div class="card-deck attration">

            <div class="card" id="c4">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de4">相關資訊</a>
                    <small class="text-muted">是否想去
                        <input type="button" name="add-cart" cttid='<?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='★'></small>

                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card" id="c3">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de3">相關資訊</a>
                    <small class="text-muted">是否想去
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='★'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card" id="c2">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>">
                <div class="card-body">

                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de2">相關資訊</a>
                    <small class="text-muted">是否想去
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='★'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card " id="c1">
                <img class="card-img-top" src="<?php 
                        $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4'))->fetch(PDO::FETCH_ASSOC);
                        echo $place['pSightImg'];
                        ?>" alt="Card image cap">
                <div class="card-body">


                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <a class="btn_detail btn_de1">相關資訊</a>
                    <small class="text-muted">是否想去
                        <input type="button" name="add-cart" cttid=' <?php $place=($db->query(('SELECT `pSight` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);
                             echo $place['pSight'];?>' id="add-cart" class="btn" value='★'></small>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </form>
    <div class="btn_attration">
        <div class="btn_previous">←</div>
        <div class="btn_next">→</div>
    </div>

    <div class="intro_detail">
        <div class="detail_img">
            <ul>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191138_98.jpg">
                    <p class="detail_head"></p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191206_83.jpg">
                    <p class="detail_head">美美子霜淇淋</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191312_49.jpg">
                    <p class="detail_head">班比森林</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191406_15.jpg">
                    <p class="detail_head">美美子咖啡館</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191612_71.jpg">
                    <p class="detail_head">班比公園</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210318095257_40.jpg">
                    <p class="detail_head">班比選物</p>
                </li>
            </ul>
        </div>
        <div class="detail_img_link">
            <ul>
                <li><a href="" class="target">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
        </div>
        <div class="detail_txt">
            <p>斑比山丘入園門票$200，末滿6歲小朋友免費<br>請旅人注意，入園禁帶寵物、禁帶外食和禁止吸菸</p>
            <br>
            <a href="https://fullfenblog.tw/bambi-land/" target="_blank">參考連結</a>
        </div>
        <div class="detail_close">x</div>
    </div>

    <!--        <div class="intro_detail"></div>-->

    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        /*$("元素:not(.class名稱)")>>該元素除了有命名class名稱，的都會影響
            舉例:$("p:not(.intro)").css("background-color","yellow");
            >>除了<p class="intro"></p>裡的內容，其餘的p內容皆為黃色背景*/

        $(document).ready(function() {
            var added;
            var selected = false;
            $('#savebtn.btn.btn-primary').click(function() {
                console.log($('.cart-items').innerText);
                if (added != true) {
                    swal({
                        title: "Can't save?",
                        text: "你還沒選地點",
                        icon: "warning",
                        // buttons: true,
                        dangerMode: true,
                    })
                }
            });
            $('#add-cart.btn').click(function() {

                if (selected == false) {
                    swal({
                        title: "You've already choose place",
                        text: "你已經選完地點",
                        icon: "warning",
                        // buttons: true,
                        dangerMode: true,
                    })
                }

            });
            var $cid, $ctid, $cttid;
            $('body').delegate('.Dir', 'click', function(e) {
                e.preventDefault();
                $cid = $(this).attr('cid');
                // alert(cid);

                $('body').delegate('.col-md-2', 'click', function(e) {
                    e.preventDefault();
                    $ctid = $(this).attr('ctid');

                    $('body').delegate('#add-cart.btn', 'click', function(e) {
                        added = true;
                        e.preventDefault();
                        $cttid = $(this).attr('cttid');
                        swal({
                            title: "Are you sure?",
                            text: "你確定要選擇這個地點?",
                            // icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        }).then((willDelete) => {
                            if (willDelete) {
                                swal("你已經把地點加入進去，按Next進入主頁面", {
                                    icon: "success",
                                });
                                $('#next').css('background', 'red');

                                var $test = $('.cart-items')
                                console.log();
                                if ($test.children().length != 0) {
                                    swal({
                                        title: "You've already choose place",
                                        text: "你已經選完地點",
                                        icon: "warning",
                                        // buttons: true,
                                        dangerMode: true,
                                    })
                                    // console.log(2);
                                } else if ($test.children().length == 0) {
                                    sendplace($cid, $ctid, $cttid);

                                }
                            } else {
                                swal("再選吧");
                            }
                        });

                    })
                })
            })



            var $block = "n"; //紀錄按下區域
            var $transport = "car"; //紀錄交通方式為何
            var $left = '20%'; //紀錄上次選擇的區域位置
            var $place = 'p1'; //紀錄上次選擇的地區
            var $play_where = '宜蘭'; //紀錄上次選擇的確切地區
            $('#c4').hide();
            //選車
            $('#car').click(function() {
                $transport = "car";
            });
            //選走路
            $('#walk').click(function() {
                $transport = "walk";
            });

            //選交通工具後會發生的事
            $('.Transportation').click(function() {
                // console.log($('#p1').text);
                if ($transport == "car") {
                    console.log("car");
                    //選擇車後人消失
                    $("#walk").hide("slow");
                    //重新選擇交通工具
                    $('#header1 h3').click(function() {

                        $("#walk").fadeIn(1000);
                        $('#' + $transport).animate({
                            'left': '60%',
                            'top': '100px'
                        }, 1000, 'linear');
                    });
                } else {
                    console.log("walk");
                    $("#car").hide("slow");

                    //重新選擇交通工具
                    $('#header1 h3').click(function() {
                        $("#car").fadeIn(1000);
                        $('#' + $transport).animate({
                            'left': '40%',
                            'top': '100px'
                        }, 1000, 'linear');
                    });
                }

                //選擇區域出現
                $('#header2').slideDown(2000);
                //滑鼠移到該區域上變色
                $('.Dir').fadeIn(2000).hover(function() {
                    $(this).addClass('color_choice');
                }, function() {
                    $(this).removeClass('color_choice');
                });

                //所選交通工具移動到先前記錄中的位置
                $(this).animate({
                    'left': $left,
                    'top': '150px'
                }, 2500, 'linear');

                //移除上一個被選擇區域的特效、地區選擇出現
                $('.Dir').click(function() {
                    $('#' + $block).removeClass('border_fadein');
                    $('#header3').slideDown(2000);
                    $('.Region').fadeIn(2000);
                });

                //按下該區域，觸發地區裡的事件(交通工具移到點選區域、地區選項增減、地區文字改變)
                $('#n').click(function() {
                    $left = '20%';
                    //交通工具移到北區
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    //地區選項增減
                    if ($block == "e" || $block == "islands") {
                        // console.log("n");
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);
                        $('#p6').fadeIn(500);
                    } else if ($block == "c" || $block == "s") {
                        $('#p6').fadeIn(500);
                    }
                    $block = "n";
                    //地區文字改變
                    $name1 = ('<?php 
                                $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name6 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);
                    $('#p6').text($name6);

                });
                $('#c').click(function() {
                    $left = '35%';
                    //交通工具移到中區
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    if ($block == "e" || $block == "islands") {
                        console.log('c');
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);
                    } else if ($block == "n") {
                        $('#p6').fadeOut(500);
                    }
                    $block = "c";
                    $name1 = ('<?php 
                                $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');

                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);

                });
                $('#s').click(function() {
                    $left = '50%';
                    //交通工具移到南區
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    if ($block == "e" || $block == "islands") {
                        console.log("s");
                        $('#p3').fadeIn(500);
                        $('#p4').fadeIn(500);
                        $('#p5').fadeIn(500);

                    } else if ($block == "n") {
                        $('#p6').fadeOut(500);
                    }
                    $block = "s";
                    //地區文字改變
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name3 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name4 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name5 = ('<?php 
                                    $place = ($db 
                                    -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');

                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').text($name3);
                    $('#p4').text($name4);
                    $('#p5').text($name5);
                });
                $('#e').click(function() {
                    $left = '65%';
                    //交通工具移到離島
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    $block = "e";
                    //地區文字改變
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');


                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').fadeOut(500);
                    $('#p4').fadeOut(500);
                    $('#p5').fadeOut(500);
                    $('#p6').fadeOut(500);
                });
                $('#islands').click(function() {
                    $left = '80%';
                    $('#' + $transport).animate({
                        'left': $left
                    }, 1000, 'linear');
                    $block = "islands";
                    //地區文字改變
                    $name1 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 ' )) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');
                    $name2 = ('<?php 
                                    $place = ($db -> query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 ')) 
                                    ->fetch(PDO::FETCH_ASSOC); 
                                    echo $place['pCityName']; 
                                    ?> ');


                    $('#p1').text($name1);
                    $('#p2').text($name2);
                    $('#p3').fadeOut(500);
                    $('#p4').fadeOut(500);
                    $('#p5').fadeOut(500);
                    $('#p6').fadeOut(500);
                });

                //選擇區域後，地區會跟著位移到該區域下面；選擇景點出現

                $('.Dir').click(function() {
                    $(this).addClass('border_fadein');
                    $('.Region').animate({
                        'left': $left
                    }, 1000, 'linear').click(function() {
                        $('#header4').slideDown(2000);
                        $('.attration').fadeIn(2000);
                        $('.btn_attration').slideDown(2000);
                    });
                });
                /*點擊.Region添加href屬性連結到景點大div*/

                //滑鼠移動到交通工具上會左右晃動
            }).hover(function() {
                $(this).animate({
                    'left': '-=2%'
                }, 500, 'linear').animate({
                    'left': '+=2%'
                }, 500, 'linear').addClass('color_choice');
            }, function() {
                $(this).removeClass('color_choice');
            });
            //選交通工具後會發生的事_結束

            //選擇該地區的特效
            $('.col-md-2').click(function(e) {
                $('#' + $place).removeClass('border_fadein');
                $(this).addClass('border_fadein');
            });

            //選擇該地區後...
            var $play_title = ' ';
            var $Brief_description = " ";
            var $play_title2 = ' ';
            var $Brief_description2 = " ";
            var $play_title3 = " ";
            var $Brief_description3 = " ";
            var $play_title4 = " ";
            var $Brief_description4 = " ";
            var $play_title5 = " ";
            var $Brief_description5 = " ";
            var $play_title6 = " ";
            var $Brief_description6 = " ";
            $name = '';
            var $old_img;
            var $new_img;
            var $old_img2;
            var $new_img2;
            var $old_img3;
            var $new_img3;
            var $new_img4, $new_img5, $new_img6;
            var like = false;
            var $go_to;

            $('#p1').click(function() {
                $place = 'p1';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;


                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=2'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="<?php 
                                             $place=($db->query('SELECT `pSightImg` FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4'))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightImg'];
                                            ?>">`
                    );
                } else if ($block == 'e') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;

                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/hualian/feicuigu/1_QxywYShoj8YBjH7wKuP8rw.jpeg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/hualian/liyutan/play_on_liyutan.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/hualian/qixingtan/1592752528-3383462225.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/hualian/yunshanshui/1406466766-1697929898.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Miaoli/Houlong_Crossing_Tunnel/%E5%BE%8C%E9%BE%8D%E9%81%8E%E6%B8%AF%E9%9A%A7%E9%81%93.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Miaoli/NanZhuang_Old_Street/%E5%8D%97%E5%BA%84%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E6%9C%A8%E9%9B%95.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%9C%92.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E8%80%81%E8%A1%97.jpg">`
                    );

                } else if ($block == 'islands') {
                    $play_where = ('<?php 
                                        $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 '))->fetch(PDO::FETCH_ASSOC);
                                         echo $place['pCityName'];
                                        ?>');
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=1 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Quemoy/p1/p1_1.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Quemoy/p2/p2_3.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Quemoy/p3/p3_1.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Quemoy/p4/p4_3.jpg">`
                    );

                }
            });

            $('#p2').click(function() {
                $place = 'p2';
                $('.card-deck').fadeIn(1000);
                if ($block == 'e') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=4 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')

                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=4 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')


                    $Brief_description4 = $decs4;
                    $play_title = $name1 + '<span style="color: burlywood">★★★</span>★';
                    $Brief_description = $decs1;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taitung/Dulan_sugar_factory/20180904161820_24.jpg">`
                    )

                } else if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Keelung/Heping_Island_Park/20190718185546_33.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Keelung/Lover_Lake_Park/20200914141839_100.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Keelung/Marine_Science_Technology_Museum/20190731184338_61.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Keelung/TidelandPark/20200417130140_40.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Taichung/Fengjia_Night_Market/%E6%98%8E%E5%80%AB%E8%9B%8B%E9%A4%85.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Taichung/Dajia_Jenn_Lann_Temple/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E5%8F%A4%E5%A0%A1.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Tainan/Ch_Mei_Museum/%E5%A5%87%E7%BE%8E%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Tainan/Chigu_Salt_Mountain/%E9%B9%BD%E5%B1%B1%E5%85%A8%E6%99%AF.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Tainan/Wanpi_World_Safari_Zoo/%E9%95%B7%E9%A0%B8%E9%B9%BF.jpg">`
                    );

                } else if ($block == 'islands') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=5 AND `pCity`=2 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(`<img class="card-img-top" src="place/Matsu/p1/p1_3.jpg">`);
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(`<img class="card-img-top" src="place/Matsu/p2/p2_3.jpg">`);
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(`<img class="card-img-top" src="place/Matsu/p3/p3_4.jpg">`);
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(`<img class="card-img-top" src="place/Matsu/p4/p4_1.jpg">`);

                }
            });
            $('#p3').click(function() {
                $place = 'p3';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/taipei/Restaurant_with_view_on_roof/20200416131716_52.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/taipei/True_Love_Peach_Blossom/20210503090103_6.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Keelung/Heping_Island_Park/20190718185546_33.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192123_60.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Changhua/Changhua_RailwayRoundHouse/%E5%BD%B0%E5%8C%96%E6%89%87%E5%BD%A2%E8%BB%8A%E5%BA%AB.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=3 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E5%BD%A9%E8%99%B9%E6%95%99%E5%A0%82.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B9%96.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Kaohsiung/ThePier2ArtCenter/%E9%AB%98%E9%9B%84%E5%A4%A7%E6%B8%AF%E6%A9%8B.jpg">`
                    );

                }
            });
            $('#p4').click(function() {
                $place = 'p4';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170018_37.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/newTP/Bitan/20210319111207_78.jpg">`);
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/newTP/Yehliu_Ocean_World/20210122134628_16.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/newTP/Yunxian_Paradise/20210113232340_84.jpg">`
                    );
                    $new_img5 = $(
                        `<img class="card-img-top" src="place/newTP/Shen'ao_Rail_Bike/20181225235552_79.jpg">`
                    );
                    $new_img6 = $(
                        `<img class="card-img-top" src="place/newTP/Wang_Wang_Digua_Garden_Industry_Story_House/20210505194726_6.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Nantou/Cingjing_Farm/%E6%B8%85%E5%A2%83%E8%BE%B2%E5%A0%B4.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF1.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Nantou/Jiji_Railway_Station/%E9%9B%86%E9%9B%86%E7%81%AB%E8%BB%8A%E7%AB%99.jpg ">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=4 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Pingtung/LiuduiHakkaCulturalPark/%E5%85%AD%E5%A0%86%E5%AE%A2%E5%AE%B6%E6%96%87%E5%8C%96%E5%9C%92%E5%8D%80.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Pingtung/LiuqiuIsland/%E5%B0%8F%E7%90%89%E7%90%83.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E9%AF%A8%E9%AD%9A%E8%A6%AA%E6%B0%B4%E5%BB%A3%E5%A0%B4.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Pingtung/ParadiseDeer/%E6%A2%85%E8%8A%B1%E9%B9%BF.jpg">`
                    );

                }

            });
            $('#p5').click(function() {
                $place = 'p5';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;

                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Taoyuan/GOGOBOX/20180426152949_90.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Taoyuan/Lixiao_Story_Forest/1532139328-806275860_l.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Taoyuan/Luoyusong_Avenue/20171226212410_20.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Taoyuan/MaruyamaCoffee/20190625103419_81.jpg">`
                    );

                } else if ($block == 'c') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=2 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Yunlin/Five_Years_Chitose_Park/%E4%BA%94%E5%B9%B4%E5%8D%83%E6%AD%B2%E5%85%AC%E5%9C%92.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Yunlin/Yanping_Old_Street/%E5%BB%B6%E5%B9%B3%E8%80%81%E8%A1%97.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8%E9%96%80%E5%8F%A3.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Yunlin/Yunlin_Palm_Puppets_Museum/%E6%88%B2%E5%81%B6.jpg">`
                    );

                } else if ($block == 's') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=3 AND `pCity`=5 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    //圖
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Penghu/AimenBeach/%E9%9A%98%E9%96%80%E6%B2%99%E7%81%98.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Penghu/PenghuGreatBridge/%E6%BE%8E%E6%B9%96%E8%B7%A8%E6%B5%B7%E5%A4%A7%E6%A9%8B.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Penghu/PenghuTianhougong/%E6%BE%8E%E6%B9%96%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92.jpg">`
                    );

                }
            });
            $('#p6').click(function() {
                $place = 'p6';
                $('.card-deck').fadeIn(1000);
                if ($block == 'n') {
                    $play_where = ('<?php 
                                         $place=($db->query('SELECT `pCityName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 '))->fetch(PDO::FETCH_ASSOC);
                                        echo $place['pCityName'];
                                    ?>')
                    $name1 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name2 = ('<?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name3 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $name4 = (' <?php 
                                             $place=($db->query('SELECT `pSightName` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightName'];
                                    ?>')
                    $decs1 = (' <?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=1  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs2 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=2  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs3 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=3  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $decs4 = ('<?php 
                                             $place=($db->query('SELECT `pSightDecs` FROM `place` WHERE `pArea`=1 AND `pCity`=6 AND `pSight`=4  '))->fetch(PDO::FETCH_ASSOC);
                                             echo $place['pSightDecs'];
                                    ?>')
                    $play_title = $name1 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description = $decs1;

                    $play_title2 = $name2 +
                        '<span style="color: burlywood">★★★</span>.4★ ';
                    $Brief_description2 = $decs2;

                    $play_title3 = $name3 +
                        "<span style='color:burlywood'>★★★</span>.4★";
                    $Brief_description3 = $decs3;

                    $play_title4 = $name4 +
                        "<span style='color:burlywood'>★★★</span>.2★";
                    $Brief_description4 = $decs4;
                    $old_img = $('#c1 img');
                    $new_img = $(
                        `<img class="card-img-top" src="place/Hsinchu/HexingStation/20210212222805_90.jpg">`
                    );
                    $old_img2 = $('#c2 img');
                    $new_img2 = $(
                        `<img class="card-img-top" src="place/Hsinchu/MagicHouse/657147b1-e5dc-11ea-87bf-6c5baca0fb28.jpg">`
                    );
                    $old_img3 = $('#c3 img');
                    $new_img3 = $(
                        `<img class="card-img-top" src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151254_55.jpg">`
                    );
                    $old_img4 = $('#c4 img');
                    $new_img4 = $(
                        `<img class="card-img-top" src="place/Hsinchu/WatermelonManor/20171108175641_58.jpg">`
                    );

                }
            });

            $('.Region>.col-md-2').click(function() {
                $('#c1>.card-body>h5').html($play_title);
                $('#c1>.card-body>p').html($Brief_description);

                $('#c2>.card-body>h5').html($play_title2);
                $('#c2>.card-body>p').html($Brief_description2);

                $('#c3>.card-body>h5').html($play_title3);
                $('#c3>.card-body>p').html($Brief_description3);

                $('#c4>.card-body>h5').html($play_title4);
                $('#c4>.card-body>p').html($Brief_description4);

                $('#c1').prepend($new_img);
                $old_img.hide().remove();
                $new_img.slideUp(500).slideDown(1000);
                $('#c2').prepend($new_img2);
                $old_img2.hide().remove();
                $new_img2.slideUp(500).slideDown(1000);
                $('#c3').prepend($new_img3);
                $old_img3.hide().remove();
                $new_img3.slideUp(500).slideDown(1000);
                $('#c4').prepend($new_img4);
                $old_img4.hide().remove();
                $new_img4.slideUp(500).slideDown(1000);
            });

            $('.btn_next').click(function() {
                $('#c1').hide();
                $('#c4').fadeIn(500);
            });
            $('.btn_previous').click(function() {
                $('#c4').hide();
                $('#c1').fadeIn(500);
            });

            var $de_old_img;
            var $de_p;
            var $de_new_img;
            var $de_src;

            $('.btn_de1').click(function() {
                console.log($play_where);
                if ($play_where == '宜蘭') {
                    $de_new_img = $(`<li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191138_98.jpg">
                    <p class="detail_head"></p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191206_83.jpg">
                    <p class="detail_head">美美子霜淇淋</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191312_49.jpg">
                    <p class="detail_head">班比森林</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191406_15.jpg">
                    <p class="detail_head">美美子咖啡館</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210317191612_71.jpg">
                    <p class="detail_head">班比公園</p>
                </li>
                <li>
                    <img src="place/yilan/ban_chi_be_chi/20210318095257_40.jpg">
                    <p class="detail_head">班比選物</p>
                </li>`);
                    $de_src = 'https://fullfenblog.tw/bambi-land/';
                    $de_p = '斑比山丘<br>地址：宜蘭縣冬山鄉下湖路285號<br>營業時間：10:00 ~ 17:00<br>入園門票$200，末滿6歲小朋友免費請旅人注意，<br>入園禁帶寵物、禁帶外食和禁止吸菸';
                } else if ($play_where == '基隆') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Heping_Island_Park/20190718190028_70.jpg">
                        <p class="detail_head">天使向海步道</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185755_47.jpg">
                        <p class="detail_head">等嶼亭</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185729_61.jpg">
                        <p class="detail_head">琉球漁民慰靈碑</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185732_53.jpg">
                        <p class="detail_head">環山步道</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185636_32.jpg">
                        <p class="detail_head">阿拉寶灣導覽區</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Heping_Island_Park/20190718185920_60.jpg">
                        <p class="detail_head">遊客中心</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/heping-island-park/';
                    $de_p = '和平島公園<br>地址：基隆市中正區平一路360號<br>和平島公園入園門票為$80元<br>基隆市民優待門票為$60元<br>5月~10月 8:00 ~ 17:00<br>11月~4月 8:00 ~ 18:00';
                }else if ($play_where == '台北') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131406_97.jpg">
                        <p class="detail_head">戶外坐區</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131716_52.jpg">
                        <p class="detail_head">夜景</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131726_74.jpg">
                        <p class="detail_head">夜景</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20593439659_9af2990cdc_b.jpg">
                        <p class="detail_head">室內包箱 </p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/proxy.png">
                        <p class="detail_head">水池觀景區</p>
                    </li>
                    <li>
                        <img src="place/taipei/Restaurant_with_view_on_roof/20200416131626_43.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/the-top/';
                    $de_p = '屋頂上景觀餐廳佔地寬敞。走進餐廳時，會發現滿滿的坐位區。<br>有戶外坐區、玻璃屋觀景區和室內的包廂<br>室內包箱基消$3000，若沒有預約包廂，一般基消是$350/人<br>餐點屬於中高價位($300~$1000以上，飲品甜點大約$180~$350)<br>水池觀景區: 水池沙發區佈景格外迷人，抱枕都用不同色系';
                }else if ($play_where == '新北') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170024_82.jpg">
                        <p class="detail_head">漁港風光</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20200526173255_95.jpg">
                        <p class="detail_head">龜吼漁港螃蟹主題公園</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170110_96.jpg">
                        <p class="detail_head">漁夫市集</p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20200526173248_66.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506165900_51.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Fishing_Port_Crab_Theme_Park/20210506170055_60.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://snowhy.tw/guihou-crab-park/';
                    $de_p = '龜吼漁港螃蟹主題公園，以萬里蟹為主題設置的海景公園。<br>位於新北市萬里區，鄰龜吼漁港坐擁美麗的龜吼海岸線。<br>公園內有許多巨型螃蟹裝置藝術，是大啖海鮮之餘的打卡景點。<br>';
                }else if ($play_where == '桃園') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/GOGOBOX/1532139346-2015489310_l.jpg">
                        <p class="detail_head">GOGOBOX餐車</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/1532139369-154119487_l.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/1532147277-3815843822_l.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152942_30.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152949_90.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/GOGOBOX/20180426152954_89.jpg">
                        <p class="detail_head">糖霜鬆餅、草莓牛奶</p>
                    </li>`);
                    $de_src = 'https://as660707.pixnet.net/blog/post/463603736-taoyuan-gogobox';
                    $de_p = 'GOGOBOX快餐車以輕食、飲品為主，另外還有提供冷泡茶<br>價位不高，一個人的消費大約150~200元左右<br>糖霜鬆餅跟草莓牛奶，用木盒裝，非常有野餐的味道<br>座位布置的都很復古，走著美式雅痞風格<br>室內座位不多，簡單的擺上桌椅並以乾燥花點綴';
                }else if ($play_where == '新竹') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/HexingStation/20180223190833_73.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20180223190836_19.jpg">
                        <p class="detail_head">愛情車廂</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222754_5.jpg">
                        <p class="detail_head">蒸汽小火車</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222934_42.jpg">
                        <p class="detail_head">合興車站館內手作藝品和飾品</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/20210212222937_33.jpg">
                        <p class="detail_head">復古文青木造房舍</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/HexingStation/img_6340.jpg">
                        <p class="detail_head">時光郵局</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2014-09-17-161/';
                    $de_p = '新竹內灣合興車站是假期旅人玩樂的聚會地，來內灣玩，都一定會路過<br>木造房舍是打卡熱點，復古文青風，站在任一角落，拍起來都好好看。<br>合興車站館內販售許多手作藝品和飾品<br>車站戶外的大廣場，是放鬆的休閒空間。不僅綠意盎然，還有蒸汽小火車體驗。<br>愛情車廂: 車廂裡販售許多特色古錐的小禮品<br>時光郵局: 充滿復古懷舊的味道。熟悉的時光牆，時鐘上的時間都不同';
                }else if ($play_where == '苗栗') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/%E9%A3%9B%E7%89%9B%E7%89%A7%E5%A0%B4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/0cde750c29726dc76895db2118cd6c2f.jpg">
                        <p class="detail_head">雅緻閤家套房</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d1596c1b4ade00fa93861a9143b7950a.jpg">
                        <p class="detail_head">樂活(飛牛)餐廳</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d4386e7901184f4b9358020c6be223e4.jpg">
                        <p class="detail_head">擠牛奶體驗</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Flying_Cow_Ranch/d44a74ca5d2d1cf95c311c32d4054d3e.jpg">
                        <p class="detail_head">DIY彩繪肥牛</p>
                    </li>`);
                    $de_src = 'https://www.flyingcow.com.tw/';
                    $de_p = '飛牛牧場擁有一片碧綠的大草原，旅人可以在草原裡盡情的奔跑玩樂，<br>除了欣賞牛群之外，還能近距離與小兔子、小鴨和羊群互動。<br>透過三生(生活、生產、生態)一體與三育(培育、保育、教育 )並重的發展策略，<br>永續經營寓教於樂的休閒事業，提供客人身、心、靈全方位的休閒體驗。';
                }else if ($play_where == '台中') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Wuling_Farm/7DB480A6-C1CF-45BD-A79C-54EEBE82B047_e.jpg">
                        <p class="detail_head">北谷園區雪山登山口</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/F618791C-93C0-4DB1-A2EA-B0DD0D62E576_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E6%AD%A6%E9%99%B5%E8%BE%B2%E5%A0%B4%E6%A5%93%E8%91%89%E5%AD%A3.jpg">
                        <p class="detail_head">楓葉季</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E7%B9%A1%E7%90%83%E8%8A%B1.jpg">
                        <p class="detail_head">繡球花</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Wuling_Farm/%E8%90%BD%E7%BE%BD%E6%9D%BE.jpg">
                        <p class="detail_head">落雨松</p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery8.html';
                    $de_p = '武陵農場是台灣知名的高山農場，四季皆有不同的景色，<br>包含最熱門的武陵農場櫻花季、楓葉、落羽松、繡球花等，<br>是不少台灣人的渡假勝地。';
                }else if ($play_where == '彰化') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_143416.jpg">
                        <p class="detail_head">八卦山大佛</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_143631.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_144051.jpg">
                        <p class="detail_head">天空步道</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/20210219_144711.jpg">
                        <p class="detail_head">天空步道</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">
                        <p class="detail_head">八卦山大佛</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Baguashan_Great_Buddha_Scenic_Area/%E5%85%AB%E5%8D%A6%E5%B1%B1%E5%A4%A7%E4%BD%9B%E9%A2%A8%E6%99%AF%E5%8D%80%E5%A4%A9%E7%A9%BA%E6%AD%A5%E9%81%93.jpg">
                        <p class="detail_head">天空步道</p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery1.html';
                    $de_p = '法相莊嚴肅穆－八卦山大佛-彰化最具代表性的地標，<br>走上參佛大道，兩側陳列著三十二尊石雕觀音，法相各個肅穆莊嚴，<br>大道的盡頭是九龍池廣場，抬頭可瞻仰二十二公尺高的釋迦牟尼大佛，往下可遠眺彰化平原景緻。';
                }else if ($play_where == '南投') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Cingjing_Farm/06ffcaa69066744f92578a870395ce5e.jpg">
                        <p class="detail_head">羊毛氈體驗</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/62739ae1d5957224e65b81242194765a.jpg">
                        <p class="detail_head">一日牧羊人體驗</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/6a622198921b868213dc8e101e9a6258.jpg">
                        <p class="detail_head">一日牧羊人體驗</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/96a75f3283a6467c640330431a8662da.jpg">
                        <p class="detail_head">一日牧羊人體驗</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/%E6%B8%85%E5%A2%83%E8%BE%B2%E5%A0%B4.jpg">
                        <p class="detail_head">清境農場</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Cingjing_Farm/%E7%B6%BF%E7%BE%8A%E5%A4%A7%E5%9F%8E%E5%A0%A1.jpg">
                        <p class="detail_head">綿羊大城堡</p>
                    </li> `);
                    $de_src = 'https://event.chingjing.com.tw/';
                    $de_p = '南投仁愛以清境農場為知名的熱門景點。<br>羊綿綿脫衣秀更成為旅人們熱愛觀賞的節目之一，<br>近年完成的綿羊大城堡更是亮眼吸睛。';
                }else if ($play_where == '雲林') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/1539070954-95f4f85da1fbda70a61df6cc67155eec.jpg">
                        <p class="detail_head">五年千歲公園</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/%E9%BE%8D.jpg">
                        <p class="detail_head">九龍船</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/1595228267-61c6e757f6ebcde2597f6332d813d968.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/20180323011331_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/34-2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Five_Years_Chitose_Park/%E4%BA%94%E5%B9%B4%E5%8D%83%E6%AD%B2%E5%85%AC%E5%9C%92.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://bunnyann.com/blog-pos-9/';
                    $de_p = '全台首座面積最大的寺廟主題公園<br>園區佔地超大，充滿特色的奇山異石<br>唯美高山石林的庭院景觀，搭配四周美景關卡<br>沿著步道可邊散步邊賞景，全區共73個特色景觀';
                }else if ($play_where == '嘉義') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/03_%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%8D%80.jpg">
                        <p class="detail_head">五年千歲公園</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/52ced3c0-e1b4-11e9-abf3-7facc46df45b.jpg">
                        <p class="detail_head">九龍船</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/article-6028c890dff54.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/pic_250_15.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E5%9C%8B%E5%AE%B6%E6%A3%AE%E6%9E%97%E9%81%8A%E6%A8%82%E5%9C%92.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Alishan_Forest_Recreation_Area/%E9%98%BF%E9%87%8C%E5%B1%B1%E7%A5%9E%E6%9C%A8%E9%81%BA%E8%B7%A1.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.ali-nsa.net/zh-tw';
                    $de_p = '阿里山的美，除了我們印象中的日出、鐵道之外，<br>還有層巒疊翠的山林綠意，變幻莫測的流雲、飛瀑，<br>層次分明的茶園風光及原鄉人文采風等你體驗。';
                }else if ($play_where == '台南') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%8A%8D%E7%8D%85%E5%AD%B8%E5%A0%82.jpg">
                        <p class="detail_head">劍獅學堂</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%A4%95%E9%81%8A-%E5%87%BA%E5%BC%B5%E6%89%80.jpg">
                        <p class="detail_head">夕遊－出張所</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E5%8F%A4%E5%A0%A1.jpg">
                        <p class="detail_head">安平古堡</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">安平老街</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E5%AE%89%E5%B9%B3%E8%80%81%E8%A1%97%E5%BA%97%E5%AE%B6.jpg">
                        <p class="detail_head">安平老街店家</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Anping_Old_Street/%E9%A5%92%E5%AF%8C%E6%99%82%E4%BB%A3%E6%84%9F%E7%9A%84%E7%B4%85%E7%A3%9A%E7%89%86.jpg">
                        <p class="detail_head">饒富時代感的紅磚牆</p>
                    </li> `);
                    $de_src = 'https://www.twtainan.net/zh-tw/attractions/detail/812';
                    $de_p = '台灣最古老的街道，由荷蘭人所建，<br>兩側攤位和商店林立，並有宛如迷宮的巷弄交織其中。<br>周邊還有安平古堡、夕遊-出張所等景點可去。';
                }else if ($play_where == '高雄') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/Cijin/article-5ba06f673d986.jpg">
                        <p class="detail_head">劍獅學堂</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E5%BD%A9%E8%99%B9%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head">旗津彩虹教堂</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E6%B5%B7%E6%B0%B4%E6%B5%B4%E5%A0%B4.jpg">
                        <p class="detail_head">旗津海水浴場</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">旗津老街</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E6%97%97%E6%B4%A5%E8%B1%90%E6%94%B6%E5%BB%A3%E5%A0%B4%E5%85%A5%E5%8F%A3%E6%84%8F%E8%B1%A1.jpg">
                        <p class="detail_head">旗津廣場</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Cijin/%E9%AB%98%E9%9B%84%E7%87%88%E5%A1%94.jpg">
                        <p class="detail_head">高雄燈塔</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00075';
                    $de_p = '原本旗津島是一個沙洲半島，原本與台灣本島相連，<br>1967年因高雄港第二港口的興建而被截斷。<br>原為漁業生活為主的旗津，由於海像變差，現在的旗津人，<br>都不太從事海上活動，反倒是慢慢走向觀光，<br>有許多年輕人都會在老街上擺起攤位。';
                }else if ($play_where == '屏東') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144307_61.jpg">
                        <p class="detail_head">大傘架聚落</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144325_32.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144350_86.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144403_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144409_94.jpg">
                        <p class="detail_head">木炭藝術館</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuduiHakkaCulturalPark/20191209144853_2.jpg">
                        <p class="detail_head">六堆客家文化園區</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/liuduihakka/';
                    $de_p = '堆客家文化館主要展示台灣的客家文化風情。壯觀的建築，<br>以群聚的大傘架作為文化館的設計，而每一個傘架建裡，<br>也規畫著不同的主題活動。';
                }else if ($play_where == '澎湖') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/AimenBeach/f_img1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/f_img5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/AimenBeach/%E9%9A%98%E9%96%80%E6%B2%99%E7%81%98.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.beachcastle.com.tw/f.html';
                    $de_p = '隘門沙灘應該是澎湖最特別的沙灘，由珊瑚與貝殼碎屑組成。<br>而這個澎湖最特別的景點曾經消失與再現！這片沙灘會再現，<br>是因為曾經的隘門村村長非常懷念這片沙灘，因此與兒子一起築起攔沙網，<br>攔截東北季風刮來的風沙，逐漸堆積而成，<br>進而成為受夏日遊客青睞的美麗沙灘，更成為水上活動玩家的好去處。';
                }else if ($play_where == '花蓮') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/feicuigu/1405352087-1576214676_l.jpg">
                        <p class="detail_head">溯溪體驗: 約3小時</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/1_QxywYShoj8YBjH7wKuP8rw.jpeg">
                        <p class="detail_head">子母瀑布</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/7824FD35-6EFE-4F06-B558-115440480700_e.jpg">
                        <p class="detail_head">翡翠谷瀑布</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/A3D3B792-B52E-406B-AA2B-480B391BF21F_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/%E8%8A%B1%E8%93%AE%E7%BF%A1%E7%BF%A0%E8%B0%B7%E6%BA%AF%E6%BA%AA6%E6%B2%99%E8%9B%99%E6%BA%AF%E6%BA%AA.jpg">
                        <p class="detail_head">翡翠谷第一深潭</p>
                    </li>
                    <li>
                        <img src="place/hualian/feicuigu/hualien-emerald-valley-05.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.bosomgirl.com/2017/08/emeraldvalley.html';
                    $de_p = ' ';
                }else if ($play_where == '台東') {
                    $de_new_img = $(`<li>
                        <img src="place/Taitung/Dulan_sugar_factory/091e8bd9fac68b9c7c4c857af0ec7654.jpg">
                        <p class="detail_head">夢幻湖</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161820_24.jpg">
                        <p class="detail_head">台11手遊市集</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161852_7.jpg">
                        <p class="detail_head">都蘭小房子</p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161903_41.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/6da95a306b9a3502591134eb876c7e7f.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taitung/Dulan_sugar_factory/20180904161852_7.jpg">
                        <p class="detail_head">都蘭小房子</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/2014-06-17-365/';
                    $de_p = '都蘭糖廠藝術村<br>地址：台東縣東河鄉都蘭村61號<br>營業時間：週六、週日10:00~17:00';
                }else if ($play_where == '金門') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p1/p1_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p1/p1_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/517';
                    $de_p = '化村內有著名小吃店及住宿點。<br>站在整齊的古厝間是相當熱門的拍照視角。<br>金門最具代表、保存最完整的聚落。<br>這18棟屋邸全都依山面海，格局、型式、排列工整一致，整齊劃一，<br>配合彩繪、石雕、磚雕、交陶裝飾，展現傳統建築的工藝技術';
                }else if ($play_where == '馬祖') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p1/p1_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p1/p1_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://okgo.tw/newsview.html?id=10121';
                    $de_p = '馬祖「芹壁」有「馬祖地中海」之稱，馬祖閩東建築最具代表<br>的聚落，保存完整。政府的修繕下，<br>利用古厝經營民宿和咖啡簡餐店，讓芹壁呈現出多樣化的風貌。<br>聚落屋舍多由當地的黃色花崗岩或大陸青石築成的石頭屋，<br>依山勢呈階梯狀排列，形成錯落有致的聚落形式';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //第二個景點卡片
            $('.btn_de2').click(function() {
                console.log($play_where);
                if ($play_where == '宜蘭') {
                    $de_new_img = $(`<li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211424_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211457_27.jpg">
                        <p class="detail_head">採蔥體驗</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211549_58.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211613_1.jpg">
                        <p class="detail_head">洗蔥體驗</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211641_60.jpg">
                        <p class="detail_head">蔥派DIY</p>
                    </li>
                    <li>
                        <img src="place/yilan/Xingbao_Onion_Experience_Farm/20200710211708_61.jpg">
                        <p class="detail_head">森林教室</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/sinbow-shallot/';
                    $de_p = '星寶蔥體驗農場<br>地址：宜蘭縣三星鄉東興路7-5號<br>營業時間：9:00 ~ 17:00<br>100元/人：蔥派DIY<br>150元/人：蔥派DIY＋拔蔥洗蔥體驗<br>200元/人：蔥派DIY＋拔蔥洗蔥體驗+帶蔥回家';
                } else if ($play_where == '基隆') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141710_35.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141740_82.jpg">
                        <p class="detail_head">老火車頭</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141932_66.jpg">
                        <p class="detail_head">情人湖吊橋</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914142011_52.jpg">
                        <p class="detail_head">老鷹眼</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914142023_22.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Keelung/Lover_Lake_Park/20200914141839_100.jpg">
                        <p class="detail_head"></p>
                    </li>
                                    `);
                    $de_src = 'https://fullfenblog.tw/lover-lake/';
                    $de_p = '情人湖公園<br>地址：基隆市安樂區基金一路208巷底大武崙山山腰<br>營業時間：免門票 24小時開放';
                }else if ($play_where == '台北') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090241_99.jpg">
                        <p class="detail_head">草地樹林</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090156_1.jpg">
                        <p class="detail_head">草地樹林裡的粉色的風車小屋</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090245_87.jpg">
                        <p class="detail_head">彩虹階梯</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090308_90.jpg">
                        <p class="detail_head">粉紅小屋－室內攝影棚</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090336_89.jpg">
                        <p class="detail_head">地中海小希臘</p>
                    </li>
                    <li>
                        <img src="place/taipei/True_Love_Peach_Blossom/20210503090638_28.jpg">
                        <p class="detail_head">真愛桃花源庭園餐廳</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/dearlove/';
                    $de_p = '真愛桃花源位在陽明山上，原來是婚紗基地，目前轉型為複合式餐廳<br>入園門票為$200/人，可全額折抵消費，下午16:00後，特價$100/人<br>晚餐打九折，入園門票也可折抵消費<br>粉紅小屋是室內攝影棚，佈景華麗，有貴族宮殿的感覺<br>真愛桃花源有多人合菜可選擇，包含四人餐、六人餐、或是十人的桌菜<br>整體價格落在$270~$1480之間';
                }else if ($play_where == '新北') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Bitan/20210319110650_50.jpg">
                        <p class="detail_head">踩天鵝體驗</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319110756_43.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319111133_74.jpg">
                        <p class="detail_head">和美山登山步道</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210320042709_32.jpg">
                        <p class="detail_head">邱比特藝術大街</p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319110750_72.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/newTP/Bitan/20210319111249_57.jpg">
                        <p class="detail_head">新店路美食街</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/bitan/';
                    $de_p = '來碧潭絕不可錯過踩天鵝，遼闊的湖面上，是數不盡的天鵝船<br>腳踏船有2人~6人座，$300~$700元，<br>電動船有2人~4人座，$400~$600元。<br>碧潭吊橋橫跨新店溪，漫步碧潭吊橋可欣賞潭景風光。<br>和美山登山步道可通往碧亭咖啡館，飽覽碧潭的潭景之美。<br>碧潭吊橋旁的新店路有超多在地美食，例如：牛肉河粉、米粉湯。';
                }else if ($play_where == '桃園') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/1200px-%E5%A3%A2%E5%B0%8F%E6%95%85%E4%BA%8B%E6%A3%AE%E6%9E%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/1614083534-2052279534-g_l.jpg">
                        <p class="detail_head">儒林所</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030173844_50.jpg">
                        <p class="detail_head">沐樂居</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030173904_88.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030174637_69.jpg">
                        <p class="detail_head">伴手禮</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Lixiao_Story_Forest/20191030175136_55.jpg">
                        <p class="detail_head">拍照打卡</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/zhongli-forest/';
                    $de_p = '壢小故事森林的建築已有102年歷史，<br>是中壢區第二座日式建築故事館<br>行程:吃冰(雙併日式宿舍(沐樂居))<br>->休息(單棟日式宿舍(儒林所))<br> ->拍照打卡->買伴手禮->吃飯';
                }else if ($play_where == '新竹') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/MagicHouse/20200827092310_56.jpg">
                        <p class="detail_head">二樓用餐區</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092324_54.jpg">
                        <p class="detail_head">季節限定金針花海</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092509_21.jpg">
                        <p class="detail_head">戶外觀景台</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/657147b1-e5dc-11ea-87bf-6c5baca0fb28.jpg">
                        <p class="detail_head">魔法女屋的餐廳</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092232_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/MagicHouse/20200827092514_14.jpg">
                        <p class="detail_head">小朋友遊戲區</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/magic-witch/';
                    $de_p = '魔法女屋門票$100，可全額折消費<br>季節限定金針花海:一整片的花海佔地不大，但花卉綻放相當亮眼。<br>金針花海旁的玻璃屋，就是魔法女屋的餐廳<br>用餐空間寬敞，採光明亮，餐點整體價格落在$150~$480<br>入館用餐，每人低消$150/人，另外會酌收10%的服務費。<br>二樓用餐區還有規劃戶外觀景台。走出陽台，可觀望山景。';
                }else if ($play_where == '苗栗') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100703.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100714.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100719.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100720.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/2020100722.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Houlong_Crossing_Tunnel/%E5%BE%8C%E9%BE%8D%E9%81%8E%E6%B8%AF%E9%9A%A7%E9%81%93.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://yoke918.com/oldtunnel/';
                    $de_p = '後龍過港隧道主打夢幻黃金鐵路自行車隧道，漫步好走的鐵路步道，<br>欣賞浮誇版的隧道燈火，不時還有海風微微吹撫，適合騎腳踏車來追海風喔！';
                }else if ($play_where == '台中') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Fengjia_Night_Market/C3388791-4DE1-4F05-92F7-5D995C6054F8_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/D570E630-C9B5-46A9-837C-135C76746CCC_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E5%8C%97%E5%9B%9E%E6%9C%A8%E7%93%9C%E7%89%9B%E5%A5%B6.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E6%97%A5%E8%88%B9%E7%AB%A0%E9%AD%9A%E5%B0%8F%E4%B8%B8%E5%AD%90.jpg">
                        <p class="detail_head">日船小丸子</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E6%98%8E%E5%80%AB%E8%9B%8B%E9%A4%85.jpg">
                        <p class="detail_head">明倫蛋餅</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Fengjia_Night_Market/%E9%80%A2%E7%94%B2%E5%A4%9C%E5%B8%82.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery103309.html';
                    $de_p = '台中「逢甲夜市」有台灣最美味夜市美譽，也是全台規模最大的夜市。<br>第一次來「逢甲夜市」，從文華路與福興路口開始、到逢甲大學<br>側門結束，知名小吃都在馬路兩側，很好找也不會迷路，肚子還有<br>餘力可再進攻福星路、逢甲路巷弄等。';
                }else if ($play_where == '彰化') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2016122617222462656.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2017081516185043363.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2018091910150565657.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2019072511320931941.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/%E5%BD%B0%E5%8C%96%E6%89%87%E5%BD%A2%E8%BB%8A%E5%BA%AB.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Changhua_RailwayRoundHouse/2018091910150565657.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://tourism.chcg.gov.tw/AttractionsContent.aspx?id=29&chk=e51a4fad-7be7-43fd-9a61-56939757426f';
                    $de_p = '這個古蹟位於彰化市民生地下道上方，是全國僅存的扇形火車庫，<br>蒸汽機車火車頭完成懷舊之旅後，進駐彰化扇形車庫，使得這裡更具有歷史及文化意義。';
                }else if ($play_where == '南投') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/18%E5%BA%A6C%E5%B7%A7%E5%85%8B%E5%8A%9B%E5%B7%A5%E6%88%BF1.jpg">
                        <p class="detail_head">18度C巧克力工房(巧克力)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235340_80.jpg">
                        <p class="detail_head">18度C巧克力工房園區(餐廳)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235412_75.jpg">
                        <p class="detail_head">18度C巧克力工房(鯛魚燒)</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/20190908235508_24.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Feeling18/%E9%AF%9B%E9%AD%9A%E7%87%92.jpg">
                        <p class="detail_head">18度C巧克力工房(鯛魚燒)</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/feeling18/';
                    $de_p = '18度C巧克力工房位在埔里大街上，以生巧克力、義式冰淇淋等等有名。';
                }else if ($play_where == '雲林') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Yanping_Old_Street/14-12.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/20180323011331_70.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/20201014111323-eca3b18d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/%E5%BB%B6%E5%B9%B3%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yanping_Old_Street/%E6%9D%B1%E5%B8%82%E5%A0%B4%E4%B8%80%E9%9A%8501.jpg">
                        <p class="detail_head">東市場一隅</p>
                    </li> `);
                    $de_src = 'https://travelblog.tw/xiluo-old-street/';
                    $de_p = '延平老街保留了舊時傳統巴洛克式設計的建築及牌坊，<br>老街上充滿濃濃的古典美，會有種回到過去的錯覺。';
                }else if ($play_where == '嘉義') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/5993fcae595df.jpg">
                        <p class="detail_head">高跟鞋教堂夜景</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/chiayi06-%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/images.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E5%94%AF%E7%BE%8E%E5%A4%A2%E5%B9%BB.jpg">
                        <p class="detail_head">高跟鞋教堂夜景</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%E9%AB%98%E8%B7%9F%E9%9E%8B%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Crystal_High_Heel_Shaped_Church/%EF%BC%88%E5%9C%96%EF%BC%8F%E9%9B%B2%E7%AE%A1%E8%99%95%E6%8F%90%E4%BE%9B%EF%BC%89-1.jpg">
                        <p class="detail_head">高跟鞋教堂夜景</p>
                    </li> `);
                    $de_src = 'https://swcoast-nsa.travel/zh-tw/attraction/details/493';
                    $de_p = '玻璃高跟鞋象徵「每個小女孩都曾夢想有雙漂亮的高跟鞋，<br>伴著自己走出美麗優雅的人生。」高跟鞋教堂於2016年6月<br>獲得金氏世界紀錄，現為全世界最大的高跟鞋造型建築物。';
                }else if ($play_where == '台南') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0100.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/20151020104658970.jpg">
                        <p class="detail_head">館內展覽</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0179.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/DSC_0218.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/line_140264819378887.jpg">
                        <p class="detail_head">奇美博物館前</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Ch_Mei_Museum/%E5%A5%87%E7%BE%8E%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.chimeimuseum.org/';
                    $de_p = '台南奇美博物館，被稱為南台灣最美的小歐洲，<br>園區佔地寬廣，奇美博物館戶外都能免費參觀，<br>有奧林匹亞草原、繆思廣場和阿波羅噴泉。';
                }else if ($play_where == '高雄') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3.jpg">
                        <p class="detail_head">愛河</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E5%8B%9E%E5%B7%A5%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head">勞工博物館</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E6%84%9B%E6%B2%B3%E6%97%A5%E6%99%AF.jpg">
                        <p class="detail_head">愛河日景</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E7%8E%AB%E7%91%B0%E8%81%96%E6%AF%8D%E8%81%96%E6%AE%BF%E4%B8%BB%E6%95%99%E5%BA%A7%E5%A0%82.jpg">
                        <p class="detail_head">玫瑰聖母聖殿主教堂</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E8%B2%A2%E5%A4%9A%E6%8B%89%E8%88%B9.jpg">
                        <p class="detail_head">貢多拉船</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/LoveRiver/%E9%AB%98%E9%9B%84%E5%B8%82%E9%9B%BB%E5%BD%B1%E9%A4%A8.jpg">
                        <p class="detail_head">高雄市電影館</p>
                    </li>`);
                    $de_src = 'https://khh.travel/zh-tw/attractions/detail/232';
                    $de_p = '愛河是高雄著名觀光景點，唯美的河道風光，總讓人流連忘返。<br>一定要體驗充滿異國風情的貢多拉船或愛之船，<br>享受在船上浪漫遊船，彷彿置身在威尼斯。<br>愛河晝夜景色都很美，周圍還有不少好玩景點。';
                }else if ($play_where == '屏東') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-142249-13.jpg">
                        <p class="detail_head">美人洞：尋找隱藏的十三景</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150505-49.jpg">
                        <p class="detail_head">烏鬼洞：沿著步道找尋海龜覓食的蹤影</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150439-55.jpg">
                        <p class="detail_head">山豬溝生態步道：彷彿走進雨林之中</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150324-16.jpg">
                        <p class="detail_head">龍蝦洞：龍蝦不在家的網美打卡聖地</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150254-98.jpg">
                        <p class="detail_head">白燈塔</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/LiuqiuIsland/2021-03-26-150234-54.jpg">
                        <p class="detail_head">花瓶岩：小琉球最經典的花椰菜地標</p>
                    </li> `);
                    $de_src = 'https://journey.tw/love-liuqiu/';
                    $de_p = '小琉球是屏東的唯一離島，玩小琉球就是要搭船。<br>來訪旅人，可由東港買票搭船抵達小琉球，再租島上機車，<br>到達小琉球各地名勝景點。<br>基本上來東港碼頭就可以現場購票啦!';
                }else if ($play_where == '澎湖') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/PenghuGreatBridge/8EBA1926-74A1-4A79-8E48-49D6DF3727FE_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/b631_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/b631_6.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/DE9ECB72-2CBA-4BA4-A3EB-969945544A0A_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/F5D5D403-7589-432A-9A51-92BABAADFD0E_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuGreatBridge/%E6%BE%8E%E6%B9%96%E8%B7%A8%E6%B5%B7%E5%A4%A7%E6%A9%8B.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery172.html';
                    $de_p = '連接白沙、西嶼兩島的跨海大橋，橫跨波濤洶湧的吼門水道，<br>全長2,494公尺，兩端建有半圓形拱門，<br>漫步橋面，可觀壯闊海景，心情非常愉悅。';
                }else if ($play_where == '花蓮') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/liyutan/1196664273_l.jpg">
                        <p class="detail_head">DIY樹皮貓頭鷹</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/1196665069_l.jpg">
                        <p class="detail_head">鯉魚潭樹屋餐廳</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/play_on_liyutan.jpg">
                        <p class="detail_head">划船遊湖</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/%E5%9C%A8%E7%92%B0%E6%BD%AD%E8%87%AA%E8%A1%8C%E8%BB%8A%E9%81%93%E4%B8%8A%E6%95%A3%E6%AD%A5%E5%81%A5%E8%A1%8C.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/%E6%B3%A2%E5%85%89%E7%80%B2%E7%81%A9%E7%9A%84%E9%AF%89%E9%AD%9A%E6%BD%AD.jpg">
                        <p class="detail_head">約5公里的環潭自行車道</p>
                    </li>
                    <li>
                        <img src="place/hualian/liyutan/play_on_liyutan.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://blog.xuite.net/cafemom2013/twblog/585371383';
                    $de_p = '門票資訊：園區免費，水上活動需收費<br>1.單排二人座腳踏船(每艘/1小時) $300<br>2.雙排四人座腳踏船(每艘/1小時) $600<br>3.雙排四人座電力腳踏船(每艘/1小時) $800<br>4.觀光船6-10人(每艘/環潭一圈) 每人$100';
                }else if ($play_where == '金門') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p2/p2_1.jpg">
                        <p class="detail_head">觀景涼亭</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_2.jpg">
                        <p class="detail_head">沙溪堡</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_3.jpg">
                        <p class="detail_head">觀景涼亭</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_5.jpg">
                        <p class="detail_head">軍事坑道</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p2/p2_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/1530';
                    $de_p = '小金門最適合看夕陽的地點，設置了觀景涼亭，依海風順著步道走向涼亭，<br>彷彿被看不見的盡頭的藍海包擁，攝影好手們不能錯過的金門美景之一！<br>沙溪堡位置特殊，可眺望大膽、二膽、檳榔嶼及廈門。<br>如同大小金門各個軍事據點，營區裡碉堡、彈藥庫、坑道一應俱全';
                }else if ($play_where == '馬祖') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p2/p2_1.jpg">
                        <p class="detail_head">矗立在山頭的東莒島燈塔園區</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_2.jpg">
                        <p class="detail_head">燈塔小屋</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_3.jpg">
                        <p class="detail_head">搭塔夜景</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_5.jpg">
                        <p class="detail_head">塔高約19.5公尺，花崗石所建</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p2/p2_6.jpg">
                        <p class="detail_head">東莒島燈塔展示廳</p>
                    </li>`);
                    $de_src = 'https://journey.tw/juguang-lighthouse/';
                    $de_p = '島上唯一的燈塔，有著潔白的塔身，台灣第一座用花崗岩建造的燈塔。<br>燈塔內可遠眺福正沙灘與犀牛嶼，天氣好的時候看出去的風景真的超美！<br>燈塔旁邊是馬祖三大聚落的「福正聚落」。<br>建立了超過百年，是目前臺灣古蹟中離臺灣最遠的二級古蹟。';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //第三個景點卡片
            $('.btn_de3').click(function() {
                console.log($play_where);
                if ($play_where == '宜蘭') {
                    $de_new_img = $(`
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091557_67.jpg">
                        <p class="detail_head">時雨亭</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091610_53.jpg">
                        <p class="detail_head">明池(陰天)</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20201207083117_62.jpg">
                        <p class="detail_head">明池(晴天)</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20201207083127_71.jpg">
                        <p class="detail_head">池中亭</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091750_70.jpg">
                        <p class="detail_head">童話森林步道</p>
                    </li>
                    <li>
                        <img src="place/yilan/Mingchi_Forest_Amusement_Park/20200407091808_63.jpg">
                        <p class="detail_head">森林教室</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/lealeamingchih/';
                    $de_p = '明池森林遊樂園<br>假日$120 平日$90<br>地址：宜蘭縣大同鄉英士村明池山莊1號<br>營業時間：8:00 ~ 16:30';
                } else if ($play_where == '基隆') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184307_1.jpg">
                        <p class="detail_head">水產廳</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184338_61.jpg">
                        <p class="detail_head">船舶與海洋工程廳</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184428_35.jpg">
                        <p class="detail_head">海洋科學廳</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184455_2.jpg">
                        <p class="detail_head">海洋文化廳</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184559_59.jpg">
                        <p class="detail_head">深海展示廳</p>
                    </li>
                    <li>
                        <img src="place/Keelung/Marine_Science_Technology_Museum/20190731184541_4.jpg">
                        <p class="detail_head">海洋環境廳</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/nmmst/';
                    $de_p = '海洋科技博物館<br>地址：基隆市中正區北寧路367號<br>營業時間：週一 ~ 週五 9:00 ~ 17:00<br>主題館門票$200/人、海洋劇場門票$120/人';
                }else if ($play_where == '台北') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Dashangyuan/1591284409-445839078_l.jpg">
                        <p class="detail_head">繡球花田</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/1589780726-4105531226_n.jpg">
                        <p class="detail_head">美軍俱樂部</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173037_87.jpg">
                        <p class="detail_head">繡球星光大道</p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173045_77.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/20200518173124_29.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Dashangyuan/2021041134.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/grand-garden/';
                    $de_p = '大賞園<br>地址：台北市北投區竹子湖路67-7號<br>營業時間：7:30 ~ 18:00<br>大賞園繡球花6月開';
                }else if ($play_where == '新北') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134418_35.jpg">
                        <p class="detail_head">海洋劇場</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122161047_67.jpg">
                        <p class="detail_head">高空跳水表演</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134449_26.jpg">
                        <p class="detail_head">海獅表演</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134519_74.jpg">
                        <p class="detail_head">海豚親親</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134537_20.jpg">
                        <p class="detail_head">館內彩繪</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yehliu_Ocean_World/20210122134534_59.jpg">
                        <p class="detail_head">DIY</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/yehliu-oceanworld/';
                    $de_p = '野柳海洋世界門票$450元，現場價$400元<br>持學生証為學童票$380元，現場價$330元<br>門票包含海生館參觀、海豚表演、高空跳水表演、海獅表演<br>，海豚親親是需要先額外購票';
                }else if ($play_where == '桃園') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1024x768%20(1).jpg">
                        <p class="detail_head">福仁宮</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1024x768.jpg">
                        <p class="detail_head">武德殿</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/1539066991-9fb3bb862e68417f0ff2ea61b39856f1.jpg">
                        <p class="detail_head">大溪橋</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/20201011171147_30.jpg">
                        <p class="detail_head">大溪老街</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/unnamed.jpg">
                        <p class="detail_head">公行館</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/Luoyusong_Avenue/20171113152232_89.jpg">
                        <p class="detail_head">石園路落羽松大道</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/2012-09-08-856/';
                    $de_p = '由石園路進來前半段是筆直的落羽松大道，後段道路彎曲，拍起來很美。<br>大溪橋旁的停車場，也是逛大溪最佳的停車處，把車開到老街一帶，<br>沿著大溪橋就可以通往大溪老街，會走上一段巴洛克建築的大橋。<br>公行館現在是蔣公紀念館，內部改裝為餐廳，後方庭院是景觀台。<br>武德殿，在各地廣設供青年子弟練習武道之場所，有70多年歷史。';
                }else if ($play_where == '新竹') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151254_55.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151440_33.jpg">
                        <p class="detail_head">消費送攝影師的相片</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151459_70.jpg">
                        <p class="detail_head">櫃貨屋內部坐位區</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151515_98.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151301_71.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/NeiwanLoveStoryMuseum/20180521151501_8.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/hc-lovestory/';
                    $de_p = '門票$150/人(可折抵消費$100)，來店消費免費送6*8藝術照一組<br>想要更多攝影師的相片，可額外購買，相片$150/張，相框$200/個<br>貨櫃屋裡是坐位區，佈置相當柔美繽紛可愛，娃娃和精緻擺設很好拍照<br>整體價格$150~$520(可折抵$100元)。<br><br>';
                }else if ($play_where == '苗栗') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425071028_12.jpg">
                        <p class="detail_head">南庄百年郵局</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425075417_95.jpg">
                        <p class="detail_head">芋粿巧</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/20180425080228_80.jpg">
                        <p class="detail_head">永昌宮</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/255448406_o.jpg">
                        <p class="detail_head">傳統客家餅店鋪</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/%E5%8D%97%E5%BA%84%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/NanZhuang_Old_Street/%E6%A1%82%E8%8A%B1%E9%87%80%E6%B9%AF%E5%9C%93.jpg">
                        <p class="detail_head">桂花釀湯圓</p>
                    </li>`);
                    $de_src = 'https://bobowin.blog/2013-04-23-763/';
                    $de_p = '南庄老街位於苗栗市中心永昌宮附近的中正路及一旁小巷內，<br>緊鄰南庄遊客中心，當地最夯的伴手禮就是特產桂花釀，因此又稱桂花巷。<br>南庄老街必要參拜永昌宮，是南庄地區的信仰中心。<br>傳統客家餅店舖有好幾家，可以試吃';
                }else if ($play_where == '台中') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">
                        <p class="detail_head">九號隧道</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B41.jpg">
                        <p class="detail_head">后里馬場</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B42.jpg">
                        <p class="detail_head">后里馬場</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E8%8A%B1%E6%A8%91%E9%8B%BC%E6%A9%8B.jpg">
                        <p class="detail_head">后豐鐵馬道花樑鋼橋</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93.jpg">
                        <p class="detail_head">九號隧道</p>
                    </li>
                    <li>
                        <img src="place/Taichung/Houfeng_Bikeway/%E5%90%8E%E9%87%8C%E9%A6%AC%E5%A0%B41.jpg">
                        <p class="detail_head">后里馬場</p>
                    </li>`);
                    $de_src = 'https://travel.taichung.gov.tw/zh-tw/Attractions/Intro/89/%E5%90%8E%E8%B1%90%E9%90%B5%E9%A6%AC%E9%81%93';
                    $de_p = '自行車道分為兩條路線：后豐鐵馬道-4.5公里、東豐綠色走廊-11.8公里。<br>后豐鐵馬道沿線的景觀有跨越大甲溪的花樑鋼橋及建構獨特的舊山線隧道。<br>花樑鋼橋是臺鐵舊山線最南端的景點，全長382公尺，<br>每兩個橋墩上都有一組俗稱花樑的鋼製桁架，是結合力與美的工程作品。<br>九號隧道，全長1.2公里，是臺鐵舊山線最長的一座隧道。<br>開放時間：10月至隔年03月：6：00～18:00，04月至隔年09月：6：00～17:00';
                }else if ($play_where == '彰化') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221119_73.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221132_23.jpg">
                        <p class="detail_head">彥仲麵茶</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200803221147_89.jpg">
                        <p class="detail_head">伴手禮小店</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/20200804065536_22.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">
                        <p class="detail_head">鹿港天后宮</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Lugang_Old_Street/%E9%B9%BF%E6%B8%AF%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">鹿港老街</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/lukang/';
                    $de_p = '鹿港老街幾乎成為鹿港地區的代名詞，整個歷史古蹟街區都可以算是鹿港老街。<br>鹿港在清代對外繁榮的經商港口，至今發展成觀光區，<br>商店多為早期門牌(閩式)建築，相當古色古香，老街內吃食衣住行育樂商品樣樣皆有，<br>是中台灣地區必來的觀光景點。';
                }else if ($play_where == '南投') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E5%90%91%E5%B1%B1%E8%87%AA%E8%A1%8C%E8%BB%8A%E9%81%93%E6%B0%B4%E4%B8%8A%E8%BB%8A%E9%81%93.jpg">
                        <p class="detail_head">向山自行車道</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E5%90%91%E5%B1%B1%E8%A1%8C%E6%94%BF%E6%9A%A8%E9%81%8A%E5%AE%A2%E4%B8%AD%E5%BF%83.jpg">
                        <p class="detail_head">向山行政暨遊客中心</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD.jpg">
                        <p class="detail_head">日月潭</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD%E4%B9%9D%E8%9B%99.jpg">
                        <p class="detail_head">日月潭九蛙</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E6%97%A5%E6%9C%88%E6%BD%AD%E7%AB%8B%E7%A2%91.jpg">
                        <p class="detail_head">涵碧步道</p>
                    </li>
                    <li>
                        <img src="place/Nantou/Sun_Moon_Lake/%E7%B4%99%E6%95%99%E5%A0%82.jpg">
                        <p class="detail_head">紙教堂</p>
                    </li>`);
                    $de_src = 'https://www.sunmoonlake.gov.tw/zh-tw/attractions/detail/80';
                    $de_p = '日月潭位在南投魚池鄉，是全台最大的高山湖泊。<br>擁有山光水色的日月潭，更是假期的旅遊勝地。<br>日月潭景緻迷人，可搭船遊湖，欣賞湖畔風光，<br>也可以騎腳踏車環湖，感受如仙境般山水畫作。';
                }else if ($play_where == '雲林') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Ylstoryhouse/162413418164768_P8144229.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/images.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E4%B8%8B%E8%BC%89%20(1).jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8.jpg">
                        <p class="detail_head">雲林故事館</p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Ylstoryhouse/%E9%9B%B2%E6%9E%97%E6%95%85%E4%BA%8B%E9%A4%A8%E9%96%80%E5%8F%A3.jpg">
                        <p class="detail_head">雲林故事館門口</p>
                    </li> `);
                    $de_src = 'https://udn.com/news/story/7326/4682155';
                    $de_p = '古色古香的雲林故事館，保存了懷舊的日式建築<br>距今已有近100年的歷史，原為虎尾郡守官邸<br>園區寧靜優美，可以欣賞舊邸的建築空間<br>還能認識更多歷史留下來的文化與遺跡';
                }else if ($play_where == '嘉義') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/110417_7w8wjpstzqx8thbdw5vogfk9p.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/1548078758-ed83dc2fb15e2b48c5b9a08d1d69550c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">
                        <p class="detail_head">東石漁人碼頭</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E9%B3%A5%E7%9E%B0%E6%9D%B1%E7%9F%B3%E6%BC%81%E4%BA%BA%E7%A2%BC%E9%A0%AD.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Dongshi_Fisherman's_Wharf/%E7%B9%BD%E7%B4%9B%E5%BD%A9%E8%89%B2%E5%B1%8B.jpg">
                        <p class="detail_head">繽紛彩色屋</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00355';
                    $de_p = '熱門的漁港街道，充滿活動與朝氣，<br>東石漁人碼頭的繽紛彩色屋超吸睛。<br>漫遊登上觀景台，欣賞遼闊的海景好放鬆。';
                }else if ($play_where == '台南') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E4%B8%83%E8%82%A1%E9%B9%BD%E5%B1%B1.jpg">
                        <p class="detail_head">七股鹽山</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E5%90%8A%E6%A9%8B.jpg">
                        <p class="detail_head">吊橋</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E6%9A%A2%E9%81%8A%E9%B9%BD%E5%B1%B1.jpg">
                        <p class="detail_head">七股鹽山</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E6%AD%A5%E9%81%93.jpg">
                        <p class="detail_head">步道</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E9%80%B1%E9%82%8A%E9%80%A0%E6%99%AF.jpg">
                        <p class="detail_head">周邊造景</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Chigu_Salt_Mountain/%E9%B9%BD%E5%B1%B1%E5%85%A8%E6%99%AF.jpg">
                        <p class="detail_head">鹽山全景</p>
                    </li> `);
                    $de_src = 'https://www.twtainan.net/zh-tw/attractions/detail/471';
                    $de_p = '旅行南台灣必遊七股鹽山，鹽山雪白色場景，<br>彷彿來到夢幻國度。園區寬廣，不僅能欣賞美麗的鹽山美景，<br>山頂還有可愛的裝飾藝術可以合影。';
                }else if ($play_where == '高雄') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/Meinong/article-5ae14bc84c6a9.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/nEO_IMG_DSC06305-3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E5%AE%A2%E5%AE%B6%E6%96%87%E7%89%A9%E9%A4%A8.JPG">
                        <p class="detail_head">美濃客家文物館</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B0%91%E4%BF%97%E6%9D%91.jpg">
                        <p class="detail_head">美濃民俗村</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/Meinong/%E7%BE%8E%E6%BF%83%E6%B9%96.jpg">
                        <p class="detail_head">美濃湖</p>
                    </li> `);
                    $de_src = 'https://fullfenblog.tw/khc-meinong/';
                    $de_p = '美濃區屬臺灣客家六堆中之右堆地區，<br>由於清領時期大量客家漢人至六堆地區開墾，使得美濃至今仍保有豐富客家文化，<br>並為南臺灣最著名之客家文化地區之一，境內居民仍多屬客家人。';
                }else if ($play_where == '屏東') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035712_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035724_77.jpg">
                        <p class="detail_head">鯨魚親水廣場</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035725_85.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/20180724035907_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E5%9C%8B%E7%AB%8B%E6%B5%B7%E6%B4%8B%E7%94%9F%E7%89%A9%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/NationalMuseumofMarineBiology_Aquarium/%E9%AF%A8%E9%AD%9A%E8%A6%AA%E6%B0%B4%E5%BB%A3%E5%A0%B4.jpg">
                        <p class="detail_head">鯨魚親水廣場</p>
                    </li> `);
                    $de_src = 'https://www.tiffany0118.com/nmmba/';
                    $de_p = '屏東國立海洋生物博物館簡稱屏東海生館，<br>是很適合親子旅遊的屏東景點，<br>屏東海生館最夯的是夜宿海生館。';
                }else if ($play_where == '澎湖') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/PenghuTianhougong/107FDC59-BF45-40C0-96B5-DA7BE6CACF6C_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/603536FE-7502-4D97-82AE-5B51FCC2AF05_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/AE654DDE-92E9-4217-BFF4-F4FD07575EE0_e.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E4%B8%AD%E5%A4%AE%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">中央老街</p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E5%9B%9B%E7%9C%BC%E4%BA%95.jpg">
                        <p class="detail_head">四眼井</p>
                    </li>
                    <li>
                        <img src="place/Penghu/PenghuTianhougong/%E6%BE%8E%E6%B9%96%E5%A4%A9%E5%90%8E%E5%AE%AE.jpg">
                        <p class="detail_head">澎湖天后宮</p>
                    </li> `);
                    $de_src = 'https://www.travelking.com.tw/tourguide/scenery1233.html';
                    $de_p = '全台灣歷史最悠久的媽祖廟，就位於澎湖馬公市的中央里。<br>廟裡不只供奉媽祖，還保存了台灣最早的碑跡<br>「沈有容諭退紅毛番韋麻郎」，以及清乾隆所賜的金匾「與天同功」。';
                }else if ($play_where == '花蓮') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/qixingtan/2020082440.jpg">
                        <p class="detail_head">伴手禮區</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1232526201_o.jpg">
                        <p class="detail_head">七星潭的海</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1232526297_o.jpg">
                        <p class="detail_head">\</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/1592752528-3383462225.jpg">
                        <p class="detail_head">石頭堆疊祈求好運</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/2020082411.jpg">
                        <p class="detail_head">全台唯一柴魚博物館</p>
                    </li>
                    <li>
                        <img src="place/hualian/qixingtan/2020082419.jpg">
                        <p class="detail_head">體驗各種大小魚類不同的重量體驗</p>
                    </li> `);
                    $de_src = 'https://yoke918.com/bonito/';
                    $de_p = '石頭堆疊祈求好運<br>七星潭沿岸的港濱自行車道<br>七星柴魚博物館: 全台唯一柴魚博物館<br>體驗各種大小魚類不同的重量體驗<br>七星柴魚博物館：伴手禮區';
                }else if ($play_where == '金門') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p3/p3_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p3/p3_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/499';
                    $de_p = '太武山是八二三炮戰重要紀念地，可以登高望遠、健行。<br>充滿人文景觀，像是：毋忘在莒、海印寺。<br>登太武山有四條路線－前山、後山、蔡厝古道和斗門古道。<br>路程約2小時，考量沿路欣賞史蹟及風景，建議規劃半天來玩。';
                }else if ($play_where == '馬祖') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p3/p3_1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_2.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_3.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_4.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Matsu/p3/p3_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://journey.tw/matsu-blue-tears/';
                    $de_p = '鐵堡是馬祖觀賞藍眼淚著名的聖地，晚上毫無光害的鐵堡，<br>是賞星與看藍眼淚的好地方，鐵堡星空相當璀璨';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });
            
            //第四個景點小卡
            $('.btn_de4').click(function() {
                console.log($play_where);
                if ($play_where == '宜蘭') {
                    $de_new_img = $(`<li><img src="place/yilan/BeiguanHaichaoPark/20201113184900_73.jpg"><p class="detail_head"></p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113184957_74.jpg"><p class="detail_head">巨石縫隙</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185002_92.jpg"><p class="detail_head">大海的步道</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185022_94.jpg"><p class="detail_head">海上的烏龜島</p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20201113185104_7.jpg"><p class="detail_head"></p></li>
                                    <li><img src="place/yilan/BeiguanHaichaoPark/20210320010952_78.jpg"><p class="detail_head">層層堆疊的岩石</p></li>
                                    `);
                    $de_src = 'https://bobowin.blog/beiguan-tidal-park/';
                    $de_p = '北關海潮公園<br>地址：宜蘭縣頭城鎮濱海路四段10號<br>開放時間：8:00 ~ 24:00';
                } else if ($play_where == '基隆') {
                    $de_new_img = $(`<li>
                        <img src="place/Keelung/TidelandPark/1563332520-2192996227.jpg">
                        <p class="detail_head">長潭里漁港</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20200417130140_40.jpg">
                        <p class="detail_head">鸚鵡螺滑梯</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20200417130153_22.jpg">
                        <p class="detail_head">飛天掃帚裝置藝術</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105038_19.jpg">
                        <p class="detail_head">潮藝術</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105020_92.jpg">
                        <p class="detail_head">風箏體驗</p>
                    </li>
                    <li>
                        <img src="place/Keelung/TidelandPark/20180821105033_14.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2016-11-10-465/';
                    $de_p = '潮境公園<br>地址：基隆市中正區長潭里北寧路369巷';
                }else if ($play_where == '台北') {
                    $de_new_img = $(`<li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/5d48ba72-880a-11eb-a9cf-ebc70ebd6358.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192025_74.jpg">
                        <p class="detail_head">室內環境</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192034_25.jpg">
                        <p class="detail_head">戶外庭院</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192138_86.jpg">
                        <p class="detail_head">海芋花田</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192123_60.jpg">
                        <p class="detail_head">海芋鞦韆</p>
                    </li>
                    <li>
                        <img src="place/taipei/Mingyang_Creeping_Leisure_Farm/20190330192245_59.jpg">
                        <p class="detail_head">山嵐美景</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/minyangpu/';
                    $de_p = '名陽匍休閒農莊<br>地址：北投區竹子湖路<br>營業時間：7:30 ~ 18:00<br>門票$150/人，可兌換飲品咖啡或是換花芋';
                }else if ($play_where == '新北') {
                    $de_new_img = $(`<li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232340_84.jpg">
                        <p class="detail_head">空中纜車</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232522_80.jpg">
                        <p class="detail_head">體驗划船</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232621_59.jpg">
                        <p class="detail_head">葉綠素咖啡</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232720_62.jpg">
                        <p class="detail_head">雲晴湖</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/%E5%9C%96%E5%85%AD.jpg">
                        <p class="detail_head">雲仙大飯店</p>
                    </li>
                    <li>
                        <img src="place/newTP/Yunxian_Paradise/20210113232453_66.jpg">
                        <p class="detail_head">岫色沂光</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/yunhsien/';
                    $de_p = '雲仙樂園門票$220，含來回纜車車票及門票<br>推出一日遊優惠套票包含美食、下午茶，或是射箭、划船等。<br>推出三合一套票$500/人包含射箭、划船和漆彈的體驗<br>體驗划船: 雲仙樂園划船體驗1~2人是$150元。<br>據說這岫色沂光是必拍點，形容雲仙樂園擁有如仙境般。';
                }else if ($play_where == '桃園') {
                    $de_new_img = $(`<li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090527_90.jpg">
                        <p class="detail_head">繡球花美景</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103505_51.jpg">
                        <p class="detail_head">戶外觀景台</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103556_80.jpg">
                        <p class="detail_head">親子遊戲區</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20190625103852_17.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090431_11.jpg">
                        <p class="detail_head">戶外觀景台</p>
                    </li>
                    <li>
                        <img src="place/Taoyuan/MaruyamaCoffee/20210519090511_96.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/playmountain/';
                    $de_p = '丸山咖啡<br>地址：桃園市復興區三民里丸山2鄰8號之1<br>營業時間：週一 ~ 週五 10:00 ~ 18:30，<br>週六 ~ 週日 9:00 ~ 19:00';
                }else if ($play_where == '新竹') {
                    $de_new_img = $(`<li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175641_58.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175645_95.jpg">
                        <p class="detail_head">餐廳</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175659_100.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175706_29.jpg">
                        <p class="detail_head">莊園</p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175750_79.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Hsinchu/WatermelonManor/20171108175723_18.jpg">
                        <p class="detail_head">西瓜飛車</p>
                    </li>`);
                    $de_src = 'https://fullfenblog.tw/2013-10-07-179/';
                    $de_p = '西瓜莊園<br>地址：新竹縣北埔鄉水磜村六鄰32號之10<br>營業時間：假日&國定假日10:00~18:00<br>入園門票$150/人，平日可全數折抵，假日可折抵$100元';
                }else if ($play_where == '苗栗') {
                    $de_new_img = $(`<li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14793505750_44008f738b_c.jpg">
                        <p class="detail_head">二樓「南島民族木雕」</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14977074331_8f75e11420_c.jpg">
                        <p class="detail_head">加上其他複合媒材的木雕作品</p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14977076391_c009d95e58_c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/14980170425_11842ea308_c.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E4%B8%89%E7%BE%A9%E6%9C%A8%E9%9B%95%E5%8D%9A%E7%89%A9%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Miaoli/Sanyi_Wood_Sculpture_Museum/%E6%9C%A8%E9%9B%95.jpg">
                        <p class="detail_head">純木雕</p>
                    </li>`);
                    $de_src = 'https://www.teresablog.com/blog/post/41284501';
                    $de_p = '位在三義的木雕博物館是全台灣唯一以木雕為主題的國立博物館，<br>保存與推廣三義的木雕藝術，館中有木雕藝術的起源與歷史、<br>木製家具與神像雕刻等主題展館。<br>展出許多過去木雕競賽得獎作品，可以看到純木雕及加上其他<br>複合媒材的作品';
                }else if ($play_where == '台中') {
                    $de_new_img = $(`<li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533269013515.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533502118984.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533582656093.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533269013515.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Taichung/Dajia_Jenn_Lann_Temple/Filedata635174533502118984.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://travel.taichung.gov.tw/zh-tw/Attractions/Intro/609/%E5%A4%A7%E7%94%B2%E9%8E%AE%E7%80%BE%E5%AE%AE';
                    $de_p = '大甲鎮瀾宮，俗稱大甲媽祖廟。<br>每年的大甲媽祖遶境進香現為臺灣民間信仰中最受矚目的宗教盛事，<br>並被列為中華民國無形文化資產民俗類重要民俗之一。';
                }else if ($play_where == '彰化') {
                    $de_new_img = $(`<li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/2016122910434592604.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/2017081514301229068.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/DSC07845.JPG">
                        <p class="detail_head">伴手禮小店</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/DSC07858.JPG">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0.jpg">
                        <p class="detail_head">溪湖糖廠</p>
                    </li>
                    <li>
                        <img src="place/Changhua/Xihu_Sugar_Factory_Wufen_Station/%E6%BA%AA%E6%B9%96%E7%B3%96%E5%BB%A0%E4%BA%94%E5%88%86%E8%BB%8A%E7%AB%99.jpg">
                        <p class="detail_head">溪湖糖廠小火車</p>
                    </li>`);
                    $de_src = 'https://tourism.chcg.gov.tw/AttractionsContent.aspx?id=30&chk=b11a2980-1154-43b4-be28-59c39fb6e8c2';
                    $de_p = '溪湖糖廠曾經是全台製糖量最高的糖廠，轄內的溪州糖廠曾是台糖的總公司，<br>土地和歷史厚度是其發展最大的資產。在台灣的鐵路系統當中，<br>台糖「五分仔車」在中南部佔有相當大的比例。';
                }else if ($play_where == '南投') {
                    $de_new_img = $(`<li>
                        <img src="place/Nantou/Jiji_Railway_Station/1566124274-28b06bda6ab0c5f852b370aa608bd455.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/1568516905-877edb6be482e82abc817c7a8d68deca.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/1568551035-4ec56a98b42c64942a6b7096e5113a80.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/5E2DE5FA-226D-40E7-9736-344714765799_d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Nantou/Jiji_Railway_Station/%E9%9B%86%E9%9B%86%E7%81%AB%E8%BB%8A%E7%AB%99.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://jatraveling.tw/blog/post/24456';
                    $de_p = '集集車站是台灣少數較古老的火車站，日系木製的外觀具有歷史保存價值。<br>歷經921大地震破壞，目前已整修完，車站整體依然保有鄉下純樸的風格，<br>白天和晚上的車站都有不同的唯美面貌。';
                }else if ($play_where == '雲林') {
                    $de_new_img = $(`<li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/20180413235843_87.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/b3694_1.jpg">
                        <p class="detail_head">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/IMG_723-1.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/maxresdefault.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/%E9%9B%B2%E6%9E%97%E5%B8%83%E8%A2%8B%E6%88%B2%E9%A4%A8.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Yunlin/Yunlin_Palm_Puppets_Museum/images%20(1).jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://okgo.tw/butyview.html?id=3694';
                    $de_p = '雲林布袋戲館前身為雲林虎尾警察局<br>館內保存舊時建築，推廣傳統布袋戲文化<br>來訪能欣賞各種角色的布袋戲和華麗服裝<br>還能走進戲台，挑戰體驗布袋戲人偶的演出';
                }else if ($play_where == '嘉義') {
                    $de_new_img = $(`<li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/1580886236-35b03fce20105f96294e0f1cff5bff21.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/article-5cf6a8ec5634d.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E8%80%81%E8%A1%97.jpg">
                        <p class="detail_head">奮起湖老街</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E9%90%B5%E8%B7%AF.jpg">
                        <p class="detail_head">奮起湖鐵路</p>
                    </li>
                    <li>
                        <img src="place/Chiayi/Fenqihu_Old_Street/%E5%A5%AE%E8%B5%B7%E6%B9%96%E9%A2%A8%E6%99%AF%E5%8D%80.jpg">
                        <p class="detail_head">奮起湖風景區</p>
                    </li> `);
                    $de_src = 'https://www.taiwan.net.tw/m1.aspx?sNo=0001016&id=A12-00355';
                    $de_p = '奮起湖是阿里山森林鐵路的中繼站，再很早以前，<br>奮起湖老街就相當熱鬧繁榮了，隨著時代改變，<br>現在的奮起湖依舊是人氣景點。';
                }else if ($play_where == '台南') {
                    $de_new_img = $(`<li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027454-1342438641_l.jpg">
                        <p class="detail_head">黑天鵝</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027454-3673584031_l.jpg">
                        <p class="detail_head">鸚鵡</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027456-735130902_l.jpg">
                        <p class="detail_head">巨型蜥蜴－科摩多龍</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027458-3290342908_l.jpg">
                        <p class="detail_head">四角羊</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/%E9%A0%91%E7%9A%AE%E4%B8%96%E7%95%8C%E9%87%8E%E7%94%9F%E5%8B%95%E7%89%A9%E5%9C%92.jpg">
                        <p class="detail_head">頑皮世界野生動物園</p>
                    </li>
                    <li>
                        <img src="place/Tainan/Wanpi_World_Safari_Zoo/1575027457-2128046459_l.jpg">
                        <p class="detail_head">企鵝</p>
                    </li> `);
                    $de_src = 'https://yoyoman822.pixnet.net/blog/post/68542880';
                    $de_p = '頑皮世界野生動物園是南台灣最大動物園，佔地20公頃，<br>超過300種來自世界各地野生動物。<br>來訪可以近距離觀察動常們的日常生活，<br>還能看賽豬、體驗餵食水豚君、與鸚鵡互動。';
                }else if ($play_where == '高雄') {
                    $de_new_img = $(`<li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/batch_P1340400-1200x800.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/Ther_Pier-2_Art_Center_Pengiai_Warehouse.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E9%AB%98%E9%9B%84%E5%A4%A7%E6%B8%AF%E6%A9%8B.jpg">
                        <p class="detail_head">高雄大港橋</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E6%A3%A7%E8%B2%B3%E5%BA%ABKW2.jpg">
                        <p class="detail_head">棧貳庫</p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E4%B8%8B%E8%BC%89.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Kaohsiung/ThePier2ArtCenter/%E5%93%88%E7%91%AA%E6%98%9F%E5%8F%B0%E7%81%A3%E9%90%B5%E9%81%93%E9%A4%A8.jpg">
                        <p class="detail_head">哈瑪星台灣鐵道館</p>
                    </li>`);
                    $de_src = 'https://khh.travel/zh-tw/attractions/detail/6';
                    $de_p = '駁二藝術特區把舊有的倉庫佈置整裝煥然一新。<br>園區藝術裝罝豐富有趣又好拍，還有特色的鐵道風光，<br>還能搭輕鐵順遊附近景點。';
                }else if ($play_where == '屏東') {
                    $de_new_img = $(`<li>
                        <img src="place/Pingtung/ParadiseDeer/%E9%B9%BF%E5%A2%83%E6%A2%85%E8%8A%B1%E9%B9%BF%E7%94%9F%E6%85%8B%E5%9C%92%E5%8D%80.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/%E6%A2%85%E8%8A%B1%E9%B9%BF.jpg">
                        <p class="detail_head">梅花鹿</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378753-9d68252645e7b6004d36f678aeebf572.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378709-f76664d63e2d88d62a070eb6ce73ddd7.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378678-cfd9915fa36db2e91644951e270213d1.jpg">
                        <p class="detail_head">紀念品</p>
                    </li>
                    <li>
                        <img src="place/Pingtung/ParadiseDeer/1611378665-8228fe5aca5069ac25192edf669a807d.jpg">
                        <p class="detail_head">紀念品區域</p>
                    </li> `);
                    $de_src = 'https://zineblog.com.tw/blog/post/201229';
                    $de_p = '鹿境梅花鹿生態園區有台版小奈良之稱。<br>南臺灣有名的梅花鹿園區之一。<br>可以近距離跟小鹿互動餵食，<br>還有不少網美牆、裝置藝術讓大家可以拍美照。';
                }else if ($play_where == '澎湖') {
                    $de_new_img = $(`<li>
                        <img src="place/Penghu/Submarinepostbox/5.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%9611.jpg">
                        <p class="detail_head">海底明信片</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%963.jpg">
                        <p class="detail_head">血紅六鰓海蛞蝓</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%967.jpg">
                        <p class="detail_head">大型貝類「硨磲貝」</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%969.jpg">
                        <p class="detail_head">麵包海星</p>
                    </li>
                    <li>
                        <img src="place/Penghu/Submarinepostbox/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92.jpg">
                        <p class="detail_head"></p>
                    </li> `);
                    $de_src = 'https://www.triptaiwan.com/2018/06/12/%E6%BE%8E%E6%B9%96%E6%B5%B7%E5%BA%95%E9%83%B5%E7%AD%92-%E6%BD%9B%E6%B0%B4%E8%A6%AA%E6%89%8B%E5%AF%84%E6%98%8E%E4%BF%A1%E7%89%87-%E5%AF%84%E5%87%BA%E5%BE%9E%E6%B5%B7%E5%BA%95%E7%9A%84%E5%BF%83%E6%84%8F/';
                    $de_p = '結合「水下裝置藝術」與「珊瑚礁復育」功能於一體的郵筒，<br>是真的可以寄信喔！這個藝術魚礁就位於澎湖鎖港附近，<br>距離岸邊約150公尺、水下6米的海底，<br>郵筒外觀使用磁磚馬賽克珊瑚樂園花園拼貼，<br>讓下水拍照的觀光客體驗視覺享受！';
                }else if ($play_where == '花蓮') {
                    $de_new_img = $(`<li>
                        <img src="place/hualian/yunshanshui/1406466766-1697929898.jpg">
                        <p class="detail_head">夢幻湖</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/1406466795-957891828.jpg">
                        <p class="detail_head">夢幻湖</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/1406466971-3667547183.jpg">
                        <p class="detail_head">\</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161401_18.jpg">
                        <p class="detail_head">民宿商家</p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161453_42.jpg">
                        <p class="detail_head"></p>
                    </li>
                    <li>
                        <img src="place/hualian/yunshanshui/20190719161447_74.jpg">
                        <p class="detail_head">水流瀑布</p>
                    </li>`);
                    $de_src = 'https://www.bosomgirl.com/2017/08/emeraldvalley.html';
                    $de_p = '雲山水夢幻湖<br>地址：花蓮縣壽豐鄉豐坪路二段2巷201弄18號<br>營業時間：24時';
                }else if ($play_where == '金門') {
                    $de_new_img = $(`<li>
                        <img src="place/Quemoy/p4/p4_1.jpg">
                        <p class="detail_head">沙美摩洛哥</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_2.jpg">
                        <p class="detail_head">夢回金沙、漫步金穗、再造之舟</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_3.jpg">
                        <p class="detail_head">結合金門特色繪製壁畫</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_4.jpg">
                        <p class="detail_head">沙美老街</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_5.jpg">
                        <p class="detail_head">沙美摩洛哥</p>
                    </li>
                    <li>
                        <img src="place/Quemoy/p4/p4_6.jpg">
                        <p class="detail_head">沙美摩洛哥</p>
                    </li>`);
                    $de_src = 'https://kinmen.travel/zh-tw/travel/attraction/1450';
                    $de_p = '位於沙美老街的頹屋，走進沙黃色的建築彷彿置身在中東沙漠，<br>像是到了中東摩洛哥，充滿神祕異國風情。<br>老街頹屋有金門摩洛哥之稱，喜歡拍照必訪<br>插畫家結合金門特色繪製壁畫。<br>老街必吃美食：餛飩加料、燒餅、牛軛餅';
                }else if ($play_where == '馬祖') {
                    $de_new_img = $(`<li>
                        <img src="place/Matsu/p4/p4_1.jpg">
                        <p class="detail_head">坑道長640公尺、步道全長700公尺，走完一圈約需30分鐘</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_2.jpg">
                        <p class="detail_head">北海坑道入口銅像</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_3.jpg">
                        <p class="detail_head">隧道內</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_4.jpg">
                        <p class="detail_head">阿兵哥在隧道裡的生活情況</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_5.jpg">
                        <p class="detail_head">開闢坑道時的情況</p>
                    </li>
                    <li>
                        <img src="place/Matsu/p4/p4_6.jpg">
                        <p class="detail_head"></p>
                    </li>`);
                    $de_src = 'https://journey.tw/juguang-lighthouse/';
                    $de_p = '北海坑道入口設置銅像紀念當時以人工方式開鑿隧道的過程。<br>進入隧道後，地下水沿著石縫滴滴答答，空氣濕潤、空間幽暗。<br>搭上馬祖傳統漁船，在沒有光線的坑道裡摸黑前進。<br>坑道內設置許多模型展現出當時阿兵哥在隧道裡生活情況。';
                }
                
                
                $de_old_img = $('.detail_img li');
                $de_old_p = $('.detail_img p');
                $de_old_img.hide().remove();
                $de_old_p.hide().remove();
                $('.detail_img ul').prepend($de_new_img);
                $('.detail_txt p').html($de_p);
                $('.detail_txt a').attr('href', $de_src);
            });

            $('.btn_detail').click(function() {
                $('.detail_txt a').hover(function() {
                    $(this).css('color', '#2b4d4e');
                }, function() {
                    $(this).css('color', 'rgb(230, 255, 239)');
                });
                //圖片張數
                var img_count = $('.detail_img li').length;
                //目前、下次顯示的圖片
                var img_current = 1;
                var img_next = 2;
                //計時器
                var img_timer;
                //隱藏除了第一張的圖
                $('.detail_img li:not(:first-child)').hide();

                //每隔3000豪秒執行函式
                img_timer = setInterval(img_slider, 3000);

                function img_slider() {
                    console.log(img_current);
                    console.log(img_next);
                    //切換圖片
                    //:nth-child()選擇子元素
                    $('.detail_img li:nth-child(' + img_current + ')').fadeOut(1000);
                    $('.detail_img li:nth-child(' + img_next + ')').fadeIn(1000);

                    img_current = img_next;
                    ++img_next;
                    if (img_next > img_count) {
                        img_next = 1;
                    }

                    //在對應按鈕上加入target類別
                    $('.detail_img_link li a').removeClass('target');
                    $('.detail_img_link li:nth-child(' + img_current + ') a').addClass('target');
                }

                //幻燈片圖片連結
                $('.detail_img_link li a').click(function() {
                    img_next = $(this).html();
                    clearInterval(img_timer);
                    img_timer = setInterval(img_slider, 3000);
                    img_slider();
                    return false;
                });

                $('.intro_detail').show(1000);
                $('.detail_close').click(function() {
                    $('.intro_detail').hide(1000);
                    //計時器停止重新啟動
                    clearInterval(img_timer);
                });

            });

            var $name, $nameid, $city_id, $area_id, $image;

            function sendplace(cid, ctid, cttid) {
                if (cid == 1 && ctid == 1 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $image = ('<?php echo $place['pSightImg'];?>')
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 1 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 1 && cttid == 3) {


                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 1 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 3) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 2 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 2) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 3) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 3 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 4 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 1 && ctid == 4 && cttid == 4) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 2) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 5 && cttid == 4) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 1) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 1 && ctid == 6 && cttid == 4) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=1 AND  `pCity`=6 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                }
                if (cid == 2 && ctid == 1 && cttid == 1) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $image = ('<?php echo $place['pSightImg'];?>')
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 2 && ctid == 1 && cttid == 2) {

                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })

                } else if (cid == 2 && ctid == 1 && cttid == 3) {
                    <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                    $name = ('<?php echo $place['pSightName'];?>');
                    $nameid = ('<?php echo $place['pSight'];?>');
                    $city_id = ('<?php echo $place['pCity'];?>');
                    $area_id = ('<?php  echo $place['pArea'];?>');
                    var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                    $('.cart-items').append(cart);

                    $('#savebtn.btn.btn-primary').click(function() {
                        $.ajax({
                            type: 'post',
                            url: 'upload_choice.php',
                            data: {
                                name: $name,
                                nameid: $nameid,
                                areaid: $area_id,
                                cityid: $city_id,
                                id: <?php echo $id?>
                            },
                            success: function(data) {
                                if (data == 'ok') {
                                    //  alert('All good. Everything saved!');
                                    window.location.href = "home.php";
                                } else {
                                    alert('something went wrong...');
                                }
                                //  alert(data);
                            }
                        });

                    })
                    $('.btn.btn-secondary').click(function() {

                        location.reload(true);
                    })
                } else if (cid == 2 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 3 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 4 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 2 && ctid == 5 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=2 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 3 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 3 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 3 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 3 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=3 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 4 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=4 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 3 && ctid == 5 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=3 AND  `pCity`=5 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 4 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 4 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 4 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 4 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 4 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=4 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }
                if (cid == 5 && ctid == 1 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $image = ('<?php echo $place['pSightImg'];?>')
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                    <section class="mx-auto my-5" style="max-width: 23rem;">
                                    <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                    <div>
                                            <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                            </div>
                                        </div>
                                    <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                        <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                        alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text collapse" id="collapseContent">
                                        </p>
                                    </div>
                                    </div>
                                    </section>
                                </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 5 && ctid == 1 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 1 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }
                } else if (cid == 5 && ctid == 1 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=1 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 1) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=1 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 2) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=2 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 3) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=3 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                } else if (cid == 5 && ctid == 2 && cttid == 4) {

                    {
                        <?php $place=($db->query(('SELECT * FROM `place` WHERE `pArea`=5 AND  `pCity`=2 AND  `pSight`=4 ')))->fetch(PDO::FETCH_ASSOC);?>
                        $name = ('<?php echo $place['pSightName'];?>');
                        $nameid = ('<?php echo $place['pSight'];?>');
                        $city_id = ('<?php echo $place['pCity'];?>');
                        $area_id = ('<?php  echo $place['pArea'];?>');
                        var cart = `<div class="container">
                                   <section class="mx-auto my-5" style="max-width: 23rem;">
                                   <div class="card content" style="width: 360px;background-color: rgb(154 215 209);"><div class="card-body d-flex flex-row">
                                   <div>
                                           <h5 class="card-title font-weight-bold mb-2"><?php echo $place['pSightName'];?></h5>
                                           </div>
                                       </div>
                                   <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                       <img class="img-fluid" src="<?php echo $place['pSightImg'];?>"
                                       alt="Card image cap" />
                                   </div>
                                   <div class="card-body">
                                       <p class="card-text collapse" id="collapseContent">
                                       </p>
                                   </div>
                                   </div>
                                   </section>
                               </div>`;
                        $('.cart-items').append(cart);
                        $('#savebtn.btn.btn-primary').click(function() {
                            $.ajax({
                                type: 'post',
                                url: 'upload_choice.php',
                                data: {
                                    name: $name,
                                    nameid: $nameid,
                                    areaid: $area_id,
                                    cityid: $city_id,
                                    id: <?php echo $id?>
                                },
                                success: function(data) {
                                    if (data == 'ok') {
                                        //  alert('All good. Everything saved!');
                                        window.location.href = "home.php";
                                    } else {
                                        alert('something went wrong...');
                                    }
                                    //  alert(data);
                                }
                            });

                        })
                        $('.btn.btn-secondary').click(function() {

                            location.reload(true);
                        })
                    }

                }



                // $('#savebtn.btn.btn-primary').click(function()
                //                         {
                //                             $.ajax({
                //                                 type: 'post',
                //                                 url: 'upload_choice.php',
                //                              data: {
                //                                 name: $name,
                //                                 nameid: $nameid,
                //                                 areaid:$area_id,
                //                                 cityid:$city_id,
                //                                 id:<?php echo $id?>
                //                              },
                //                             success: function (data) {
                //                             if (data == 'ok') {
                //                              alert('All good. Everything saved!');
                //                              window.location.href = "home.php";
                //                             } 
                //                             else {
                //                                 alert('something went wrong...');
                //                             }
                //                             //  alert(data);
                //                             }
                //                             });

                //                         })
                // $('.btn.btn-secondary').click(function()
                //                         {

                //                             location.reload(true);
                //                         })

            }

        });

        //class="card bg-info text-white c1"

    </script>
</body>

</html>