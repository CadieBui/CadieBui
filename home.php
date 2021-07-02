<?php 
	session_start();
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
	if(isset($_SESSION['userlogin']))
	{
		include "layouts/header2.php"; 
		include "server.php"; 
		

		$curuser=$_SESSION['userlogin'];

		$query1='SELECT* FROM users WHERE username="'.$curuser.'"   ';
		$result1=$db->query($query1);

		while($row=$result1->fetch(PDO::FETCH_ASSOC))
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
		    $travel_preferences=$row['travel_preferences'];
			$sendid=$row['sendid'];
			$sendname=$row['sendmesname'];
		}
		$query2='SELECT* FROM users';
		$result2=$db->query($query2);

		$sql1="SELECT * FROM `chat`";
		$query=$db->query($sql1);

		$count=$query->rowCount();

		
		
?>


<style>
	/* @media (min-width: 768px); */
	.modal-body {
    position: relative;
    padding: 20px;
    /* margin: 69px; */
    margin-right: 60px;
	}
	.modal-dialog {
    	width: 300px;
    	margin-top: 20%;
    	margin-left: 40%;
    /* margin: 30px auto; */
	}
	.jq-ry-container {
		float: right;

		margin: -2px;

	}

	#notificationContainer {
		background-color: #fff;
		border: 1px solid rgba(100, 100, 100, .4);
		/* -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25); */
		overflow: visible;
		position: absolute;
		top: 53px;
		margin-left: -182px;
		width: 315px;
		z-index: 100;
		display: none;
		color: black;
		/* Enable this after jquery implementation */
	}

	#notificationTitle {
		font-weight: bold;
		padding: 8px;
		font-size: 13px;
		background-color: #ffffff;
		/* position: fixed; */
		z-index: 1000;
		width: 296px;
		height: 32px;
		border-bottom: 1px solid #dddddd;
	}

	#notificationsBody {
		padding: 36px 0px 0px 0px !important;
		min-height: 300px;
		overflow-y: scroll;
		overflow-x: hidden;
		width: 313px;
	}

	#notificationFooter {
		background-color: #e9eaed;
		text-align: center;
		font-weight: bold;
		padding: 8px;
		font-size: 12px;
		border-top: 1px solid #dddddd;
	}

	.scroll_To_Top {
		width: 50px;
		height: 50px;
		position: fixed;
		padding: 10px;
		text-align: center;
		background: #7dc4bd7d;
		bottom: 29px;
		right: 50px;
		border-radius: 35px;
		display: none;
	}

	.scroll_To_Top:hover {
		background: #587f5aeb;
	}

	h6,
	.h6 {
		font-size: 35px;
		font-family: Rockwell;
	}

	p {
		font-size: 20px;
	}

	.message {
		margin-top: 6px;
		margin-left: 8px;
	}

	.form-control {
		display: inline;
		width: 70%;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
		box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
		-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	}

	.btn.btn-primary.send {
		float: right;
		display: inline;
		background-color: black;
	}

	.chatbox_container {
		width: 35%;
		float: right;
		background-color: #ccd8d7;
		min-width: 400px;
		max-width: 400px;
		/* position: absolute; */
		right: 0px;
		bottom: 0;
		border-radius: 7px;
		position: sticky;
		z-index: 500;
	}

	.form-horizontal .form-group {
		margin-left: 0px;
		margin-right: -15px;
	}

	#btn_list {
		display: inline-block;
		width: 200px;
		position: relative;
		top: -70px;
		right: -80px;
	}

	#btn_list>button {
		margin: 0 5px;
	}

	h2 {
		color: white;
	}

	label {
		color: white;
	}

	span {
		color: #0a070f;
		font-weight: bold;
	}

	.container {
		margin-top: 3%;
		width: 60%;
		background-color: #26262b9e;
		padding-right: 10%;
		padding-left: 10%;
	}

	.btn-primary {
		background-color: #009688;
		border: none;
	}

	.display-chat {
		height: 300px;
		background-color: #49736f;
		margin-bottom: 4%;
		overflow: auto;
		padding: 15px;
		border-radius: 7px;
	}

	.message {
		background-color: #6f9b97;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
		word-break: break-word;
	}

	body {
		margin-top: 20px;
		background: #f3f3f3;
	}

	.card.user-card {
		border-top: none;
		-webkit-box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.05), 0 -2px 1px -2px rgba(0, 0, 0, 0.04), 0 0 0 -1px rgba(0, 0, 0, 0.05);
		box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.05), 0 -2px 1px -2px rgba(0, 0, 0, 0.04), 0 0 0 -1px rgba(0, 0, 0, 0.05);
		-webkit-transition: all 150ms linear;
		transition: all 150ms linear;

	}

	.card {
		border-radius: 19px;
		-webkit-box-shadow: 0 1px 2.94px 0.06px rgb(4 26 55 / 16%);
		box-shadow: 0 1px 2.94px 0.06px rgb(4 26 55 / 16%);
		/* border: none; */
		margin-bottom: 30px;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.card .card-header {
		background-color: transparent;
		border-bottom: none;
		padding: 25px;
	}

	.card .card-header h5 {
		margin-bottom: 0;
		color: #222;
		font-size: 14px;
		font-weight: 600;
		display: inline-block;
		margin-right: 10px;
		line-height: 1.4;
		font-family: Rock Well;
	}

	.card .card-header+.card-block,
	.card .card-header+.card-block-big {
		padding-top: 0;
	}

	.user-card .card-block {
		text-align: center;
	}

	.card .card-block {
		padding: 25px;
	}

	.user-card .card-block .user-image {
		position: relative;
		margin: 0 auto;
		display: inline-block;
		padding: 5px;
		width: 110px;
		height: 110px;
	}

	.user-card .card-block .user-image img {
		z-index: 20;
		position: absolute;
		top: 5px;
		left: 5px;
		width: 100px;
		height: 100px;
	}

	.img-radius {
		border-radius: 50%;
	}

	.f-w-600 {
		font-weight: 600;
	}

	.m-b-10 {
		margin-bottom: 10px;
	}

	.m-t-25 {
		margin-top: 25px;
	}

	.m-t-15 {
		margin-top: 15px;
	}

	.card .card-block p {
		line-height: 1.4;
	}

	.text-muted {
		color: #919aa3 !important;
		font-family: RockWell;
	}

	.user-card .card-block .activity-leval li.active {
		background-color: #2ed8b6;
	}

	.user-card .card-block .activity-leval li {
		display: inline-block;
		width: 15%;
		height: 4px;
		margin: 0 3px;
		background-color: #ccc;
	}

	.user-card .card-block .counter-block {
		color: #0b0303;
		font-family: rockwell;
		/* font-size: 27px; */
		/* font-weight: 600; */
	}

	.bg-c-blue {
		background: linear-gradient(305deg, #efd3a9, #ade1dc);
	}

	.bg-c-green {
		background: linear-gradient(45deg, #2ed8b6, #59e0c5);
	}

	.bg-c-yellow {
		background: linear-gradient(45deg, #FFB64D, #ffcb80);
	}

	.bg-c-pink {
		background: linear-gradient(45deg, #FF5370, #ff869a);
	}

	.m-t-10 {
		margin-top: 10px;
	}

	.p-20 {
		padding: 20px;
	}

	.user-card .card-block .user-social-link i {
		font-size: 30px;
	}

	.text-facebook {
		color: #3B5997;
	}

	.text-twitter {
		color: #42C0FB;
	}

	.text-dribbble {
		color: #EC4A89;
	}

	.user-card .card-block .user-image:before {
		bottom: 0;
		border-bottom-left-radius: 50px;
		border-bottom-right-radius: 50px;
	}

	.user-card .card-block .user-image:after,
	.user-card .card-block .user-image:before {
		content: "";
		width: 100%;
		height: 48%;
		border: 2px solid #4099ff;
		position: absolute;
		left: 0;
		z-index: 10;
	}

	.user-card .card-block .user-image:after {
		top: 0;
		border-top-left-radius: 50px;
		border-top-right-radius: 50px;
	}

	.user-card .card-block .user-image:after,
	.user-card .card-block .user-image:before {
		content: "";
		width: 100%;
		height: 48%;
		border: 2px solid #73aea8;
		position: absolute;
		left: 0;
		z-index: 10;
	}

	.displayfemalecolor {
		background: linear-gradient(235deg, #e77ba0, #f8ee98b5);
		border: none;
	}

	.alert {
		padding: 11px;
		margin-bottom: 20px;
		border: 1px solid #009688;
		border-radius: 4px;
	}

	.alert-success {
		background: linear-gradient(
 277deg
 , #52938dc4, #79a27ab3);
		border-color: #d6e9c6;
		color: #e2e6e2;
	}
</style>

<?php 
   try{
        while($row=$result2->fetch(PDO::FETCH_ASSOC))
        {
            if($row['id']!=$id&&$row['userName']!=$username )
            {
                if($row['place']==$place )
                {
					$USERID= $row['id'];?>
<div class="col-md-4">
	<div class="card user-card">
		<div class="card-header">
			<h5>Profile</h5>
		</div>
		<div class="card-block">
			<div class="user-image">

				<img src="upload/<?php echo $row['image1']?>" class="img-radius" alt="User-Profile-Image">
			</div>
			<div class="userid" style="display: none;"><?php echo $row['id']?></div>
			<h6 class="f-w-600 m-t-25 m-b-10" id="UserName"><?php echo $row['userName']?></h6>
			<p class="text-muted" id="sex"><?php echo $row['sex']?> | Born <?php echo $row['birthday']?></p>
			<hr>
			</ul>
			<div class="bg-c-blue counter-block m-t-10 p-20">

				<div class="row">
					<div>
						<img class="img-fluid" src="upload/<?php echo $row['image2']?>"
							style="min-height: 350px ;max-width: -webkit-fill-available;max-height: 350px;" alt="">
					</div>
					<div class="col-4">
						<p>Live in :<?php echo $row['address'] ?></p>
					</div>
					<div class="col-4">
						<p>Nationality :<?php echo $row['country']?></p>
					</div>
					<div class="col-4">
						<p>Hobby :<?php echo $row['hobby']?></p>
					</div>
					<div class="col-4">
						<p>Favorite Sport :<?php echo $row['sport']?></p>
					</div>
					<div class="col-4">
						<p id="travel">Travel preferences :<?php echo $row['travel_preferences']?></p>
					</div>
					<div class="col-4">
						<p id="ratingstaraveg">Rating star :<?php 
						$qry='SELECT AVG(`ratingstar`) as average FROM `rating` WHERE `rid`="'.$USERID.'"';
						$rlt=$db->query($qry);
						$r=$rlt->fetch(PDO::FETCH_ASSOC);
						if(round($r['average'],2)<1)
						{
							echo round($r['average'],2)." <i class='far fa-meh-rolling-eyes'></i>" ;
						}
						else if(round($r['average'],2)<2&&round($r['average'],2)>1)
						{
							echo round($r['average'],2)." <i class='far fa-hand-lizard'></i>" ;
						}
						else if(round($r['average'],2)<3&&round($r['average'],2)>2)
						{
							echo round($r['average'],2)." <i class='far fa-smile'></i>" ;
						}
						else if(round($r['average'],2)<4&&round($r['average'],2)>3)
						{
							echo round($r['average'],2)." <i class='far fa-laugh-squint'></i>" ;
						}
						else if(round($r['average'],2)>=4)
						{
							echo round($r['average'],2)." <i class='far fas fa-fire'></i>" ;
						}
						
						?></p>
					</div>

				</div>
			</div>
			<p class="m-t-15 text-muted" style="height: 195px;font-style: italic;"><?php echo $row['abouyou']?></p>
			<hr>
			<button class="btn btn-primary" id="chat">Chat</button>
		</div>
	</div>
</div>
<?php }
				}
			}
		}
		catch(PDOException $e) 
		{
			echo $e->getMessage();
		}
?>

<div class="col-md-4 chatbox_container" ?>
	<h5>Drag me if you can</h5>
	<div class="display-chat">
		<?php
			if($count>0)
			{
				while($row=$query->fetch(PDO::FETCH_ASSOC))	
				{
					if($row['name']==$_SESSION['userlogin']&&$row['receivemesuser']==$sendid)
					{
					?>
		<div class="message"
			style="float:right;width: 250px;display: block;position: relative;background-color: #dfbd5a;">
			<p>
				<div class="mesid" style="display:none"><?php echo $row['sendmesuser'];?></div>
				<span><?php echo $row['name'];?></span>
				<?php echo $row['message']; ?>
			</p>
		</div>
		<?php
					}else if($row['sendmesuser']==$sendid&&$row['nameR']==$_SESSION['userlogin'])
					{?>
		<div class="message otheruser" style="float:left;width: 250px;display: block;position: relative;">
			<p>
				<div class="mesid" style="display:none"><?php echo $row['sendmesuser'];?></div>
				<span class="otherusername"><?php echo $row['name'];?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
		<?php
					}
				}
			}
			else
			{?>
		<div class="message">
			<p class="mes">
				No previous chat available.
			</p>
		</div>
		<?php
			}?>
	</div>
	<form class="form-horizontal" action="">
		<div class="form-group">
			<div class="col-sm-10">
				<textarea name="msg" id="msg" class="form-control" placeholder="Type your message here..."></textarea>
			</div>
			<div class="col-sm-2" style="display: flex;right: 41px;position: relative;float: right;">
				<button type="submit" name="submit" class="btn btn-primary send">Send</button>
			</div>
		</div>
	</form>
</div>


<a href="#" class="scroll_To_Top"><span><i class="bi bi-chevron-double-up"><svg xmlns="http://www.w3.org/2000/svg"
				width="20" height="20" style="margin-top: 4px;" fill="currentColor" class="bi bi-chevron-double-up"
				viewBox="0 0 16 16">
				<path fill-rule="evenodd"
					d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
				<path fill-rule="evenodd"
					d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
			</svg></i></span></a>
<div class="modal"  id="rateuser"tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Rating</h5>
		</div>
		<div class="modal-body">
			<div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3">
			</div>
			<span class='result' style="float: right;color: antiquewhite;">0</span>
			<input type="hidden" name="rating">
		</div>
		<div class="modal-footer">
			<button type="submit" name="add" id="add" class="btn btn-primary">Save changes</button>
			<button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>

</div>
</div>
<div id="gotop"></div>
</body>

<script>
	$(document).ready(function () {

		var notibox = `<div id="notificationContainer">
        		<div id="notificationTitle">Rating for the people that you know</div>
       			 <div id="notificationsBody" class="notifications">
        			</div>
       			 <div id="notificationFooter"></div>
				</div>`;

		var bool = $("#notificationLink").find('#notificationContainer');
		if (bool != " ") {
			$("#notificationLink").append(notibox);
		} <?php $sql1 =
			"SELECT `sendmesuser`,`name`,`receivemesuser`, `nameR` FROM `chat` GROUP BY `name`,`nameR` ORDER BY `created_on` DESC";
		$query = $db -> query($sql1);
		while ($row = $query -> fetch()) {
			if ($row['sendmesuser'] == $id && $row['receivemesuser'] != $id) {
				foreach((array) $row['receivemesuser'] as $value) {

					$userid = $value;
					foreach((array) $row['nameR'] as $key) {

						$name = $key; ?>
						var $test =
							`
							<div style="padding-left: 20px;padding-right: 20px;" ><div class="sendmes_userid" style="display:none" ><?php echo $userid?></div>
						<div class="alert alert-success" id="sendmes_username" role="alert"><?php echo $name ?>
						<button id="addrating" data-toggle="modal" data-target="#rateuser" 
						style="background: none;border: none; float: right;"><i class="fa fa-plus"></i>
						</button></div></div>
						`;

						$('#notificationsBody').append($test); <?php

					}
				}

			}

		} ?>
		$("#notificationLink").click(function () {
			$("#notificationContainer").fadeToggle(300);
		})



		var chatbox = $('.chatbox_container');

		chatbox.draggable();

		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				$('.scroll_To_Top').fadeIn();
			} else {
				$('.scroll_To_Top').fadeOut();
			}
		});


		$('.scroll_To_Top').click(function () {
			$('html, body').animate({
				scrollTop: 0
			}, 700);
			return false;
		});


		$('.btn.btn-primary.send').click(function () {
			$('.chatbox_container').animate({
				height: "show",
				opacity: "show",
				marginBottom: "25px"
			}, "slow");

		})

		$('.btn.btn-primary.send').click(function (e) {

			e.preventDefault();
			var $mescontain = $('#msg').val();
			var $id = $
			if ($mescontain == '') {
				swal({
					title: "no message to send!",
					icon: "warning",
					button: "Okay!"
				})
			}
			$.ajax({
				type: 'POST',
				url: "sendMes.php",
				data: {
					msg: $mescontain,
					userid: 1
				},
				cache: false,
				success: function (result) {
					location.reload();
					$('#msg').val("");
				}
			});
		})


		$('#chat.btn.btn-primary').click(function (e) {
			e.preventDefault();

			console.log('click');
			var $click = $(this).parent();

			var sendid = $click.find('.userid').text()
			var sendname = $click.find('#UserName').text()
			console.log($click.find('#UserName').text());

			var sendchat = $('.message').find('.mesid');
			var receivechat = $('.message.otheruser').find('.mesid');
			for (var i = 0; i < receivechat.length; i++) {

				if (sendid != receivechat[i].innerText) {
					$tmp = receivechat[i].parentElement;
					$tmp.style.display = 'none';
				}
			}
			for (var i = 0; i < sendchat.length; i++) {
				if (sendchat[i].innerText == '<?php echo $id?>' && sendid != '<?php echo $sendid?>') {
					$tmp = sendchat[i].parentElement;
					$tmp.style.display = 'none';
					console.log(sendid);
					// console.log(1);
				}
			}

			$.ajax({
				type: 'POST',
				url: 'add_user.php',
				data: {
					sendid: sendid,
					sendname: sendname
				},
				success: function (data) {
					location.reload();

				},
				error: function (data) {
					alert('there were erros while doing the operation.');
				}
			})
		})
		$(".rateyo").rateYo({
				starWidth: "20px"
				}).on("rateyo.change", function (e, data) {
				var rating = data.rating;
				$(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
				$(this).parent().find('.result').text(rating);
			
			});
		$('button#addrating').click(function()
		{	
			var $click=$(this).parent().parent().children();
			var $clicked_userid=$click[0].innerHTML;
			var $clicked_username=$click[1].innerText;
			var $clicked_rating;
			
			$(".rateyo").click(function () {
				var $clicked_rating=$('.result').text()
				console.log($clicked_rating)

				$('#add').click(function(){
					$.ajax({
					type: 'POST',
					url: 'add_rating.php',
					data: {
						id: $clicked_userid,
						name: $clicked_username,
						rating:  $clicked_rating
					},
					success: function (data) {
						if(data==1)
						{
							swal({
							title: "Rating success",
							icon: "success",
							button: "Okay!"
							})
						}
						else if(data==2)
						{
							swal({
							title: "You've already rating for this person",
							icon: "warning",
							button: "Okay!"
							})
						}
					}
				
				})
				$('#close').click(function()
				{
					location.reload();
				})
			})
			
			
			})

		});
		
		
		
	})
</script>

</html>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<?php
	}
	else
	{
		header('location:index.php');
	}
?>