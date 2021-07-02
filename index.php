<?php
require_once('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unlock your road</title>
    <link rel="stylesheet" href="css/SignIn.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/SignIn.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</head>

<body>
    <?php
   
    session_start();
    if(isset($_SESSION['userlogin']))
    {
        header("Location:choice.php");
    }
    ?>

    <script>
        $(document).ready(function()
        {
            $('#signinbtn').click(function(e){
                var valid = this.form.checkValidity();

			   if(valid){
				    var username = $('#pid').val();
				    var password = $('#sinpsw').val();
			    }

			    e.preventDefault();

			    $.ajax({
				type: 'POST',
				url: 'loginjs.php',
				data:  {username: username, password: password},
				success: function(data){
                    if($.trim(data) ==="1")
                    {
                        swal({
			                title: "Sign in is succcesed!",
			                icon: "success",
			                button: "Okay!"})
                        setTimeout('window.location.href = "choice.php"', 1000);
                    }
                    else
                    {
                        swal({
                                title: "Sign in is fail , your password or your name is wrong !",
                                icon: "warning",
                                button: "Again!",
                            })
                    }
            
				},
				error: function(data){
					alert('there were erros while doing the operation1.');
				}
                });
            });
            $('#signupbtn').click(function(e){

                var valid = this.form.checkValidity();

                if(valid)
                    {
                        var username = $('#pname').val();
                        var password = $('#suppsw').val();
                        var birthday= $('#btd').val();
                        var email = $('#eml').val();
                        var country = $('#cny').val();
 
                        e.preventDefault();	

                        $.ajax({
                            type: 'POST',
                            url: 'signupjs.php',
                            data: {username: username,password:password,email: email,birthday:birthday,country:country},
                            success: function(data){
                                if(data== 1)
                                {
                                    swal({
                                        title: "Sign up is succcesed!",
                                        icon: "success",
                                        button: "Okay!",
                                        })
                                }
                                else
                                {
                                    swal({
                                        title: "Sign up is fail,please fill every information!",
                                        icon: "warning",
                                        button: "Again!",
                                    })
                                }
                               
                            }
                        });
                    }else{
    
                        }
            });
        });
    
    </script>
    
      
    <div id="left" class="trans">
        <div class="main" id="signin">
            <div class="title1">
                <p>Sign</p>
                <p id="greencolor">in</p><br><br>
            </div>
            <div>
                <form method="post" action="" id="sighinform">
                    <label>ID</label><br>
                    <input type="text" name="id" id="pid"><br>
                    <label>Password</label><br>
                    <input type="password" name="pswsignin" id="sinpsw" autocomplete="off"><br>
                    <input type="submit" name="login" id="signinbtn" value="Sign in">
                </form>
            </div>
        </div>
        <div class="change right" id="change1">
            <div>
                
                <h2 class="whitecolor wel">Welcome to</h2><br>
                <img src="img/web_logo.png" alt="" style="width: 50px;float: left;margin-right: 6px;">
                <h2 class="greencolr2">Unlock </h2>
                <h2 class="yellowcolor" style="margin-left: 0">your </h2>
                <h2 class="greencolr2" style="margin-left: 0">road</h2>
            </div>
            <div>
                <input type="submit" id="signbtn1" class="greencolr2" value="Sign up">
            </div>
        </div>
    </div>
    <div id="right" class="trans">
        <div class="main right" id="signup" class="col-md-4">
            <div class="title2">
                <p id="greencolor1">Create </p>
                <p>Account</p><br><br>
            </div>

            <div style="margin: 0 auto;">
                <table>
                    <form method="post" action="">
                        <div class="colum mx-auto">
                            <tr>
                                <td>
                                    <div>
                                        <label>Name</label><br>
                                        <input type="text" name="name" id="pname" require><br>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label>Password</label><br>
                                        <input type="password" name="psw" id="suppsw" require><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label>Birthday</label><br>
                                        <input type="date" name="btd" id="btd"><br>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <label>Country</label><br>
                                        <input type="text" name="cny" id="cny"><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <label>Email</label><br>
                                        <input type="email" name="eml" id="eml" require><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <input type="submit" name="register" id="signupbtn" value="Sign up">
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </form>

                </table>

            </div>
        </div>
        <div class="change left close" id="change2">
            <div>
                <h2 class="whitecolor wel">Welcome Back</h2><br>
                
                <p class="greencolr3">Unlock your road</p><br>
                
                <p class="yellowcolor1" style="margin-top: 0">miss you</p>
                <img src="img/web_logo.png" alt="" style="width: 50px;margin-right: 6px;margin-top: 33px;">
            </div>
            <div>
                <input type="button" id="signbtn2" class="greencolr2" value="Sign in">
            </div>
        </div>
    </div>
    
</body>
</html>