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
    $place=$row['place'];
    $country=$row['country'];
    $image1=$row['image1'];
    $image2=$row['image2'];
    $image3=$row['image3'];
    $travel_preferences=$row['travel_preferences'];
}

?>

<!-- ======================================================== -->
<!DOCTYPE html>
<html lang="en" style="background: linear-gradient(5deg, #469e96, #d4f9d6);">

<head>
    <meta charset="UTF-8" class="header" style="background-color: #496c4a75;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="js/infor.js"></script>
    <link rel="stylesheet" href="css/croppie.css">
    <script src="js/croppie.js"></script>
    <script src="js/croppie.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.0.1" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.0.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.0.1" rel="stylesheet">
    <link href="css/main.css?ver=1.0.1" rel="stylesheet">
    <script src="js/imagesloaded.pkgd.min.js?ver=1.0.1"></script>
    <script src="js/masonry.pkgd.min.js?ver=1.0.1"></script>
    <script src="js/bootstrap.bundle.min.js?ver=1.0.1"></script>
    <script src="js/aos.js?ver=1.0.1"></script>
    <script src="js/main.js?ver=1.0.1"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <style>
      .editbtn_female {
          height: 32px;
          /* background-color: #506b62; */
          background: linear-gradient( 129deg, #f38bae, #f0e58a);
          width: 81px;
          border-radius: 18px;
          position: relative;
          left: 86%;
          padding: 1;
          color: white;
          margin-bottom: 87px;
          margin-top: 50px;
      }
      .editbtn_male {
          height: 32px;
          /* background-color: #506b62; */
          background: linear-gradient(280deg, #0f776e, #f9a099);
          width: 81px;
          border-radius: 18px;
          position: relative;
          left: 86%;
          padding: 1;
          color: white;
          margin-bottom: 87px;
          margin-top: 50px;
      }
      .female{
        background:linear-gradient(129deg, #f38bae, #f0e58a);
        
      }
      .male{
        background: linear-gradient(280deg, #0f776e, #f9a099);
      }
      
        .bg-light {
            /* background-color: #b0e9e48f!important; */
            background-image: url(<?php echo "upload/".$image3?>);
            width: 100%;
            background-position: center;
            background-size: cover;
        }
        .fw-bolder {
          font-weight: 600!important;
          margin: 0 auto;
        }
        .pb-1 {
            padding-bottom: 2.5rem!important;
            width: 61%;
            text-align: inherit;
              font-family: RockWell;
        }
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
            height: 200px;
            background-color: #95d5b2;
        }


        #user_name {
            background-color: #95d5b2;
            border-radius: 15px;
            width: 100px;
            border: 4px solid #84c09f;
            position: relative;
            margin: 0 auto;
            padding: 10px;
            top: 180px;
            text-align: center;

        }

        #user_img {
            height: 400px;
        }

        #user_data,
        #infor_done {
            background-color: #DDE7C7;
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
            width: 33%;
            height: 39%;
            position: relative;
            /* top: 25%; */
            left: 1%;
            border: 1px solid #9e9e9e;
            float: left;
            border-radius: 10px;
            margin-top: 86px;
        }

        #img2 {
            width: 18%;
            /* height: 23%; */
            position: relative;
            /* top: 36%; */
            left: 11%;
            border: 1px solid black;
            float: left;
            border-radius: 10px;
            margin-top: 111px;
        }

        #img3 {
            width: 19%;
            height: 30%;
            position: relative;
            /* top: 23%; */
            left: 24%;
            border: 1px solid black;
            float: left;
            border-radius: 10px;
            margin-top: 17px;
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

        img {
            object-fit: fill;
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
        }
        p{
            font-family: 微軟正黑體;
            font-weight: bold;
            font-size: 18px;
        }
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
            width: 74%;
        }
        .p-3 {
   
             padding-top: 27px;
        }
        #editbtn
              {  height: 32px;
                background-color: #506b62;
                width: 81px;
                border-radius: 18px;
                position: relative;
                left: 86%;
                padding: 1;
                color: white;
                margin-bottom: 87px;
                 margin-top: 50px;
                


            }
        .head{
                background-color: #c9f3ef;
            }
        </style>

</head>
<script>
  $(document).ready(function()
  {
      var $box=$('.container-narrow');
      var sex=$box.find('#sex').text();
      var tmp = sex.charCodeAt(0);
      var travel=$box.find('#travel').text()
      var tmp2 =travel.charCodeAt(0);
      console.log(tmp2);
      // console.log($sex);
       if(tmp==70)
       {
          $('header.head').addClass('female');
          $('#sex.pb-1.fw-bolder').append($('<i class="fa fa-female"  aria-hidden="true"></i>'));
          $('#editbtn').addClass('editbtn_female');
          
       }
       else if(tmp==77) {
           $('header.head').addClass('male');

           $('#sex.pb-1.fw-bolder').append($('<i class="fa fa-male"  aria-hidden="true"></i>'));
           $('#editbtn').addClass('editbtn_male');
       }
       if(tmp2==87)
       {
          $('#travel').append($('<i class="fas fa-map-marked-alt"  aria-hidden="true"></i>'));
       }
       else if(tmp2==65)
       {
        $('#travel').append($('<i class="fas fa-vihara"  aria-hidden="true"></i>'));
       }
       else if(tmp2==72)
       {
        $('#travel').append($('<i class="fas fa-hiking"  aria-hidden="true"></i>'));
       }
       else if(tmp2==80)
       {
        $('#travel').append($('<i class="fas fa-photo-video"  aria-hidden="true"></i>'));
       }
       else if(tmp2==67)
       {
          $('#travel').append($('<i class="fas fa-suitcase-rolling"  aria-hidden="true"></i>'));
          console.log(1);
       }
  })
</script>
<body id="top">
    <header class="head">
      <div class="container text-center text-lg-left">
        <div class="p-3 clearfix">
          <h1 class="site-title mb-0"><?php echo $username?></h1>
          <a href="home.php"><img src="img/rightbtn.png" alt="" style="float: right;right: -85px;position: relative;"></a>
          <div class="site-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div id="content">
<div class="cover bg-light">
  <div class="container pt-2 pb-4 px-3">
    <div class="row">
      <div class="col-lg-6"><img class="img-fluid" src="<?php echo "upload/".$image1?>" width="532" height="442" alt="hello"/></div>
      <div class="col-lg-6">
        <div class="mt-5">
          <!-- <p class="lead text-uppercase mb-1">Information!</p> -->
          <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50"><?php echo $username?></h1>
          <!-- <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Web Developer & Mobile Application Developer</p> -->
          <!-- <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1" href="#contact">Hire Me</a></div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<form action="" method="post">
<div class="about-section pt-4 px-3 px-lg-4">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2"><?php echo $username?>'s information.</h2>
        <p><?php echo $intro?></p>
        <div class="row mt-3">
            <div class="col-sm-2">
            <div class="pb-1">Gender</div>
          </div>
          <div class="col-sm-10">
         
            <div class="pb-1 fw-bolder" id="sex"><?php echo $sex?> </div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Birthday</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $birthday?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Email</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $email?></div>
          </div>
          
          <div class="col-sm-2">
            <div class="pb-1">Address</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $address?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Hobby</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $hobby?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Travel Preferences</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder" id="travel"><?php echo $travel_preferences?> </div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Your place</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $place?></div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Favorite Sport</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder"><?php echo $sport?></div>
          </div>
         
          
        </div>
      </div>
      <div class="col-md-5 offset-md-1"><img class="avatar img-fluid mt-2" src="<?php echo "upload/".$image2?>" width="400" height="400" alt=""/></div>
    </div>
  </div>
</div>
<div>
    <input type="button" id="editbtn" value="編輯" onclick="location='infor.php?GetID=<?php echo $id?>'">
</div>
</form>
<!-- <div cla

</html>