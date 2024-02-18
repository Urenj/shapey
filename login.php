<?php
session_start();

include('Admin\assets\config\db.php');

if (isset($_POST['email']) && isset($_POST['pass'])) {

  $email = $_POST['email'];
  $password = $_POST['pass'];
  $errors = array('email' => '', 'password' => '');

  if (empty($email) || empty($password)) {
    echo "Please enter your email and password";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address';	
	$errors['password'] = 'Invalid email or password';	
  } else {

    $sql = "SELECT * FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);

      if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
		if($email != $row['email'])
		{
			$errors['password'] = 'Invalid email or password';	
			mysqli_stmt_close($stmt);
		}
		
        if ($password == $row['password']) {

          $_SESSION['email'] = $row['email'];
		  $_SESSION['username'] = $row['username'];
		
          header('Location: Admin/index.php');
        } else {	
			$errors['password'] = 'Invalid email or password';	
        }
      } 

      mysqli_stmt_close($stmt);
    }
  }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href='https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap' rel='stylesheet'>


	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');

/*GENERAL*/

		*, *::before, *::after{
			box-sizing: border-box;
		}

		body, html{
			height: 100%;
			font-family: 'Titillium Web' !important;
/*			-webkit-font-smoothing: antialiased;*/
			-moz-osx-font-smoothing: grayscale;
		}

		body{
			background-image: url(https://xmple.com/wallpaper/grid-graph-paper-yellow-black-1920x1080-c2-ffd700-000000-l2-2-86-a-45-f-20.svg);
/*			background: #ffc40c;
			background: -moz-linear-gradient(-45deg, rgba(30,29,31,1) 0%, rgba(223,64,90,1) 100%);
			background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(30,29,31,1)), color-stop(100%, rgba(223,64,90,1)));
			background: -webkit-linear-gradient(-45deg, rgba(30,29,31,1) 0%, rgba(223,64,90,1) 100%);
			background: -o-linear-gradient(-45deg, rgba(30,29,31,1) 0%, rgba(223,64,90,1) 100%);
			background: -ms-linear-gradient(-45deg, rgba(30,29,31,1) 0%, rgba(223,64,90,1) 100%);
			background: linear-gradient(135deg, rgba(30,29,31,1) 0%, rgba(223,64,90,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e1d1f', endColorstr='#df405a', GradientType=1 );*/
		}
		
/*TEXT PART*/

		h2, h3{
			font-size: 16px;
			letter-spacing: -1px;
			line-height: 20px;
		}

		h2{
			color: #ffc40c;
			text-align: center;
		}

		h3{
			color: #ffc40c;
			text-align: right;
		}
		p.login-text.black-text{
			padding: 0 0 15px 0;
			font-weight: bold;
			text-align: center;
		}

		span.login-text.black-text{
/*			padding-top: 50px;*/
			font-size: 16px;
			padding: 17px 0 15px 7px ;
		}

		.akawnt.center.amber-text{
			align: justify !important;
			font-size: 14px !important;
		}

/*ICONS PART*/
		i.left{
			margin: 0px !important;
		}

		.i{
			width: 20px;
			height: 20px;
		}

		.hey{
			padding: 15px 5px;
		}

		.i-login{
			margin: 13px 0px 0px 15px;
			position: relative;
			float: left;
/*			background-image: url(https://fonts.gstatic.com/s/i/short-term/release/materialsymbolsoutlined/face/default/24px.svg);*/
/*			background-color: white;*/
/*			color: white;*/
			background-size: 18px 18px;
			background-repeat: no-repeat;
			background-position: center;
		}


		.i-close{
			background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMi40NDUgNjEyLjQ0NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjEyLjQ0NSA2MTIuNDQ1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPHBhdGggZD0iTTUyMi42NDIsODkuODA0QzQ2NC45LDMyLjA2MiwzODguMDExLDAsMzA2LjIyMywwUzE0Ny41NDUsMzIuMDYyLDg5LjgwNCw4OS44MDQgICBjLTExOS40MTYsMTE5LjQxNi0xMTkuNDE2LDMxMy40MjIsMCw0MzIuODM4YzU3Ljc0MSw1Ny43NDEsMTM0LjYzMSw4OS44MDQsMjE2LjQxOSw4OS44MDRzMTU4LjY3OC0zMi4wNjIsMjE2LjQxOS04OS44MDQgICBDNjQyLjA1OCw0MDMuMjI1LDY0Mi4wNTgsMjA5LjIyLDUyMi42NDIsODkuODA0eiBNNTAxLjc4Nyw1MDEuNzg3Yy01Mi4xMDEsNTIuMTAxLTEyMS43OTEsODAuOTcyLTE5NS41NjQsODAuOTcyICAgcy0xNDMuNDYzLTI4Ljg3MS0xOTUuNTY0LTgwLjk3MlMyOS42ODcsMzc5Ljk5NSwyOS42ODcsMzA2LjIyM3MyOC44NzEtMTQzLjQ2Myw4MC45NzItMTk1LjU2NHMxMjEuODY2LTgwLjk3MiwxOTUuNTY0LTgwLjk3MiAgIHMxNDMuNDYzLDI4Ljg3MSwxOTUuNTY0LDgwLjk3MnM4MC45NzIsMTIxLjg2Niw4MC45NzIsMTk1LjU2NFM1NTMuODg3LDQ0OS42ODYsNTAxLjc4Nyw1MDEuNzg3eiBNMzk5LjIxOCwyMzQuODk5bC03NC41MTUsNzQuNTE1ICAgbDc0LjUxNSw3NC41MTVjNS42NDEsNS42NDEsNS42NDEsMTUuMjE1LDAsMjAuODU1Yy0zLjE5MSwzLjE5MS02LjM4Myw0LjAwOC0xMC4zOTEsNC4wMDhjLTQuMDA4LDAtNy4xOTktMS42MzMtMTAuMzktNC4wMDggICBsLTc0LjU4OS03NC41MTVsLTc0LjU4OSw3NC41MTVjLTMuMTkxLDMuMTkxLTYuMzgzLDQuMDA4LTEwLjM5LDQuMDA4cy03LjE5OS0xLjYzMy0xMC4zOS00LjAwOCAgIGMtNS42NDEtNS42NDEtNS42NDEtMTUuMjE1LDAtMjAuODU1bDc0LjUxNS03NC41MTVsLTc0LjUxNS03NC41MTVjLTUuNjQxLTUuNjQxLTUuNjQxLTE1LjIxNSwwLTIwLjg1NSAgIGM1LjY0MS01LjY0MSwxNS4yMTUtNS42NDEsMjAuODU1LDBsNzQuNTE1LDc0LjUxNWw3NC41MTUtNzQuNTE1YzUuNjQxLTUuNjQxLDE1LjIxNS01LjY0MSwyMC44NTUsMCAgIEM0MDQuODU4LDIxOS42ODUsNDA0Ljg1OCwyMjguNDQyLDM5OS4yMTgsMjM0Ljg5OXoiIGZpbGw9IiNmNTVhNGUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
  			background-size: 20px 20px;
  			background-repeat: no-repeat;
  			background-position: center;		
		}

/*LOGIN BOX*/

		.box{
			width: 330px;
			position: absolute;
			top: 50%;
			left: 50%;

			-webkit-transform: translate(-50%, -50%);
					transform: translate(-50%, -50%);
		}

		.box-form{
			width: 320px;
			position: relative;
			z-index: 1;
		}

		.box-login-tab{
			width: 60%;
    		height: 55px;
			background: #ffc40c;
			opacity: 0.9;
			position: relative;
			float: left;
			z-index: 1;

			-webkit-border-radius: 6px 6px 0 0;
		   	   -moz-border-radius: 6px 6px 0 0;
					border-radius: 6px 6px 0 0;

			-webkit-transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
					transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
			-webkit-transform-origin: 0 0;
					transform-origin: 0 0;
			-webkit-backface-visibility: hidden;
					backface-visibility: hidden;

			-webkit-box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
			   -moz-box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
			   		box-shadow: 15px -15px 30px rgba(0,0,0,0.32);
		}



		.box-login-title{
			width: 60%;
    		height: 60px;
			position: absolute;
			float: left;
			z-index: 2;
		}

		.box-login{
			position: relative;
			top: -4px;
			width: 320px;
			background: #2D2F31;
			text-align: center;
			overflow: hidden;
			z-index: 2;

			-webkit-border-top-right-radius: 6px;
			-webkit-border-bottom-left-radius: 6px;
			-webkit-border-bottom-right-radius: 6px;
			-moz-border-radius-topright: 6px;
			-moz-border-radius-bottomleft: 6px;
			-moz-border-radius-bottomright: 6px;
			border-top-right-radius: 7px;
			border-bottom-left-radius: 7px;
			border-bottom-right-radius: 7px;

			-webkit-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
			   -moz-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
			   		box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
		}

		.box-info{
			width: 260px;
			top: 60px;
			position: absolute;
			right: -5px;
			padding: 15px 15px 15px 30px;
			background-color: #2D2F31;
			border: 1px solid rgba(255,255,255,0.2);
			border-radius: 7px	;
			z-index: 0;

			opacity: 0.9;

/*			-webkit-border-radius: 6px;
			   -moz-border-radius: 6px;
			   		border-radius: 6px;*/

			-webkit-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
			   -moz-box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
			   		box-shadow: 15px 30px 30px rgba(0,0,0,0.32);
	    }

	    .line-wh{
	    	width: 100%;
	    	height: 1px;
	    	top: 0px;
	    	margin: 12px auto;
	    	position: relative;
	    	border-top: 1px solid rgba(255,255,255,0.3);
	    }

	    
/*FORM SIDE*/

		.acc{
/*			margin-left: 10px !important;*/
			margin-top: 7px !important;
		}

		.row{
			margin: 0px !important;
		}

		.ekis{
			padding-left: 0px !important;
		}


		a {
			text-decoration: none;
		}

		button:focus{
			outline: 0;
		}

		.b{
			height: 24px;
			line-height: 24px;
			background-color: transparent;
			border-radius: none;
			cursor: pointer;
		}

		.b-form{
			opacity: 0.5;
			margin: 10px 20px;
			float: right;
		}

		.b-info{
/*			margin: 10px 10px 10px 10px;*/
			opacity: 0.5;
/*			float: left;*/
		}

		.b-form:hover, .b-info:hover{
			opacity: 1;
		}

		.b-support, .b-cta{
			width: 100%;
			padding: 0px 15px;
			font-family: "Titillium Web";
			font-weight: 700;
			letter-spacing: -1px;
			font-size: 16px;
			line-height: 32px;
			cursor: pointer;

			-webkit-border-radius: 16px;
			   -moz-border-radius: 16px;
			   		border-radius: 16px;
		}

		.b-support{
			border: #ffc40c 1px solid;
			background-color: transparent;
			color: #ffc40c;
			margin: 6px 0;
		}

		.b-cta{
			border: #ffc40c 1px solid;
			background-color: #ffc40c;
			color: #2D2F31;
		}

		.b-cta:hover{
			color: #212121;
			background-color: #ffeb3b !important;
			border: 1px #ffeb3b solid !important;
		}

		.b-support:hover, .b-octa:hover{
			color: #2D2F31;
			background-color: #ffeb3b;
			border: #ffeb3b 1px solid;
		}

		.fieldset-body{
			display: table;
		}

		.fieldset-body p{
			width: 100%;
/*			background: #2D2F31;*/
			display: inline-table;
			padding: 5px 20px;
			margin-bottom: 2px;
		}

		label{
			float: left;
			width: 100%;
			top: 0px;
			color: #ffc40c;
			font-size: 13px;
			font-weight: 700;
			text-align: left;
			line-height: 1.5;
		}

		label.checkbox{
			float: left;
			padding: 5px 20px;
			line-height: 1.7;
		}

		input[type=text], input[type=password]{
			width: 100%;
			height: 32px;
			padding: 0px 10px;
			background-color: #2D2F31;
			border: none;
			display: inline;
			color: #ffc40c;
			font-size: 16px;
			font-weight: 400;
			float: left;

			-webkit-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
			-moz-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
			box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
		}

		input[type=text]:focus, input[type=password]:focus{
			background-color: #2D2F31;
			outline: none;
		}

		input[type=submit]{
/*			padding-top: 10px;
			padding-bottom: 10px;*/
			width: 100%;
/*			height: 48px;*/
			margin-top: 24px;
			padding: 10px 20px 10px 20px;
			font-family: 'Titillium Web';
			font-weight: 700;
			font-size: 18px;
			color: #212121;
			line-height: 40px;
			text-align: center;
			background-color: #ffc40c;
			border: 1px #ffc40c solid;
			opacity: 1;
			cursor: pointer;
		}

		input[type=submit]:hover{
			width: 50%;
/*    		height: 50px;*/
    		margin-top: 30px;
			padding: 10px 20px 10px 20px;
    		font-family: 'Titillium Web';
    		font-weight: 700;
    		font-size: 18px;
    		color: #212121;
    		line-height: 40px;
    		text-align: center;
    		opacity: 1;
    		border-radius: 25px;
			background-color: #ffeb3b !important;
			border: 1px #ffeb3b solid !important;
		}

		input[type=submit]:focus{
			outline: none;
		}

		p.field span.i{
			width: 24px;
			height: 24px;
			float: right;
			position: relative;
			margin-top: -26px;
			right: 2px;
			z-index: 2;
			display: none;

			-webkit-animation: bounceIn 0.7s ease-out;
			-moz-animation: bounceIn 0.7s ease-out;
			-o-animation: bounceIn 0.7s ease-out;
			animation: bounceIn 0.7s ease-out;
		}

/*TRANSITIONS*/

		.box-form, .box-info, .b, .b-support, .b-cta, input[type=submit], p.field span.i {


/*			visibility: visible;
			-webkit-transition: -webkit-transform 0.5s;
			transition: transform 0.5s;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);*/
/*			transition-timing-function: ease-out;*/
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s;
			-ms-transition: all 0.3s;
			-o-transition: all 0.3s;
			transition: all 0.3s;

		}

/*CREDITS*/

/*		.icon-credits{
			width: 100%;
			position: absolute;
			bottom: 4px;
			font-family: 'Titillium Web';
			font-size: 12px;
			color: rgba(255,255,255,0.1);
			text-align: center;
			z-index: -1;
		}
	
		.icon-credits a{
			text-decoration: none;
			color: rgba(255,255,255,0.2);
		}
*/

	</style>

	<title>AniNeru</title>

</head>
<body>

		<div class='box'>
		  <div class='box-form'>
		      <div class='box-login-tab'></div>
		      <div class='box-login-title'>
		      	<div class="row">
		      		<div class="col s12 m12 l12">
		      			<a href="#" class="pirson"><i class="hey material-icons black-text left">account_circle</i>
            			</a>
            			<span class="login-text black-text left">LOG-IN</span>

		    		</div>
		      	</div>
		      </div>
		        
		    <div class='box-login'>
					<form method="POST">
				<div class='fieldset-body' id='login_form'>

					<a href="#" onclick="openLoginInfo();" class='b b-form i i-more'><i class="material-icons amber-text">more_horiz</i></a>
					<p class='field'>
						<label for='email'>E-MAIL</label>
						<input type='text' id='email' name='email' title='Put your Email here' required />
						<div class="red-text"><?php if (isset($errors['email'])) echo $errors['email']; ?></div>
					</p>
					<p class='field'>
						<label for='pass'>PASSWORD</label>
						<input type='password' id='pass' name='pass' title='Input your Password' required />
						<div class="red-text"><?php if (isset($errors['password'])) echo $errors['password']; ?></div>
					</p>

					<p>
						<label style="width: 140px;">
						<input type="checkbox" value="TRUE" title='Show Password' onclick="pashPash()">
						<span>Show Password</span>
						</label>
					</p>

					<input type='submit' id='do_login' value='LOGIN' title='LOG IN' />
					</div>
				</form>
		    </div>
		</div>
		  <div class='box-info'>
		  	<div class="row">
		  		<div class="ekis col s12 m12 l12">
					<a href="#" onclick="closeLoginInfo();" class='b b-info i i-left'><i class="material-icons amber-text">close</i></a>
		  		</div>
		  	</div>
		  	<div class="row-2">
		  		<div class="col s12 m12 l12">
		    		<p class="acc center"><span class="akawnt center amber-text" style="align: justify !important; padding-left: 5px !important;" >No account? <br>Click the button below to create!</span></p>
		  		</div>
		  	</div>
		    <div class='line-wh'></div>
		    	<a href="createacc.php" class="b-cta btn amber black-text">CREATE ACCOUNT</a>
		  </div>
		</div>
  

	 <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>

		function openLoginInfo() {
		    jQuery('.b-form').css("opacity","0.01");
		    jQuery('.box-form').css("left","-37%");
		    jQuery('.box-info').css("right","-37%");
		}
		
		function closeLoginInfo() {
		    jQuery('.b-form').css("opacity","1");
		    jQuery('.box-form').css("left","0px");
		    jQuery('.box-info').css("right","-5px"); 
		}
		
		jQuery(window).on('resize', function(){
		    closeLoginInfo();
		});


    	function pashPash() {
    	    var temp = document.getElementById("pass");
    	     
    	    if (temp.type === "password") {
    	        temp.type = "text";
    	    }
    	    else {
    	        temp.type = "password";
    	    }
    	}
	</script>

</body>
</html>