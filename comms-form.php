<?php
$error_message = $success_message = '';

$modal = <<<EOT
<div id="modal1" class="modal center-align" >
	<div class="modal-content">
		<h4 style='position: relative; top: 20px;'>Commission Request Sent!</h4>
	</div>
	<div class="modal-footer">
		<a href="index.php" class="modal-close waves-effect waves-green btn yellow darken-3">OK</a>
	</div>
</div>
EOT;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $client_email = $_POST['client_email'] ?? '';
    $client_name = $_POST['client_name'] ?? '';
    $duedate = $_POST['duedate'] ?? '';
    $art_style = $_POST['art_style'] ?? '';
    $details = $_POST['details'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validate that required fields are not empty
    if (empty($client_email) || empty($client_name) || empty($duedate) || empty($art_style)) {
        $error_message = 'Please fill in all required fields.';
    } else {
        // Add your database connection code here
        include('Admin\assets\config\db.php');

        // Insert data into the 'commission' table
        $insert_query = $con->prepare("INSERT INTO commission (email, name, due_date, art_style, details, description) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_query->bind_param("ssssss", $client_email, $client_name, $duedate, $art_style, $details, $description);

        if ($insert_query->execute()) {
            // Echo the modal box
            echo $modal;

            // Echo the JavaScript code to initialize the modal
            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                var elems = document.querySelectorAll(".modal");
                var instances = M.Modal.init(elems);
                // Open the modal automatically
                instances[0].open();
            });
            </script>';
        } else {
            // Display error message
            $error_message = 'Error: ' . $insert_query->error;
        }

        // Close the statement
        $insert_query->close();

        // Close the database connection
        $con->close();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <link href='https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap' rel='stylesheet'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />



	<style type="text/css">

		#modal1{
			width: 320px;
			height: 195px;
			align-items: center;
		}

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
		}		
/*TEXT PART*/

		.back{
/*			font-family: 'League Spartan', sans-serif !important;*/
/*    		color: #ff6740 !important;*/
			padding: 10px 15px 5px 5px;
    		font-size: 13px;
		}

		.back:hover{
			text-decoration: underline;
			color: #f8bbd0 !important;
		}

		h2, h3{
			font-size: 19px;
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



/*LOGIN BOX*/

		.box{
			width: 500px;
			position: absolute;
			top: 57%;
			left: 55%;

			-webkit-transform: translate(-50%, -50%);
					transform: translate(-50%, -50%);
		}

		.box-form{
			width: 400px;
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
			width: 400px;
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

		.dropdown{
			width: 150px !important;
		}

		.dropdown-content li>span{
			color: #212121;

		}

		.select-wrapper input.select-dropdown{
			color: #ffc40c;
		}

		textarea.materialize-textarea{
			color: #ffc40c !important;
		}

		.titulo{
			margin-bottom: 0 !important;
		}

		.descrip{
			margin-bottom: 0 !important;
		}

		.art{
			margin-bottom: 0 !important;
		}

		.last{
			margin-bottom: 0 !important;
		}

		.character-counter{
			font-size: 9pt !important;
		}

		.checkbox-text{
			color: #ffc40c !important;
			font-size: 10pt !important;
			opacity: 0.8 !important;
		}

		label{
			float: left;
			width: 100%;
			top: 0px;
			color: #ffc40c;
			font-size: 13px;
/*			font-weight: 700;*/
			text-align: left;
			line-height: 1.5;
		}
/*		.row{
			margin: 10px !important;
		}*/

		.fieldset-body p {
		    width: 100%;
		    /* background: #2D2F31; */
		    display: inline-table;
		    padding: 5px 20px;
		    margin-bottom: 2px;
		}

		input[type=text], input[type=password]{
			width: 100%;
			height: 32px;
			padding: 0px 10px;
			background-color: #2D2F31;
			border: none;
			display: inline;
			color: #ffc40c !important;
			font-size: 16px;
			font-weight: 400;
			float: left;

			-webkit-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
			-moz-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
			box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
		}

		.modal-overlay {
		    position: fixed;
		    z-index: 999;
		    top: 60%;
		    left: 0;
		    bottom: 0;
		    right: 0;
/*		    height: 125%;*/
		    width: 500px !important;
		     background: none; 
		    display: none;
		    will-change: opacity;
		}

		.modal {
		    width: 500px;
		    height: 348px;
		    align-items: center;
		}

		.datepicker{
			width: 50% !important;
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

			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s;
			-ms-transition: all 0.3s;
			-o-transition: all 0.3s;
			transition: all 0.3s;

			-webkit-animation: bounceIn 0.7s ease-out;
			-moz-animation: bounceIn 0.7s ease-out;
			-o-animation: bounceIn 0.7s ease-out;
			animation: bounceIn 0.7s ease-out;

		}

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
            			<span class="login-text black-text left">COMMISSION FORM</span>
		    		</div>
		      	</div>
		      </div>
		        
		    <div class='box-login'>
				<form method="POST" id="commsForm" name="comms_form" action="">

					<div class='fieldset-body' id='login_form'>
						<a href="index.php" class="back amber-text right">« Back to home</a>

						<div class="row titulo">
							<div class="col s12 m12 l12">
								<h2 class="amber-text center">COMMISSION SHEET</h2>
							</div>	
						</div>

						<div class="row nimil">
				        <p class='field'>
				            <label for='user'>YOUR NAME</label>
				            <input type='text' id='client_name' name='client_name' title='Client Name' required />
				        </p>
				        <p class='field'>
				            <label for='user'>YOUR EMAIL</label>
				            <input type='text' id='client_email' name='client_email' title='Client Email' required />
				        </p>
				    </div>
						<div class="row art">
							<div class="col s12 m12 l12">
								<div class="input-field col s12 ">
    								<select class="dropdown" name="art_style" required>
									<option value="" disabled selected>Choose Artstyle</option>
									<option value="Original Artstyle">Original Artstyle</option>
									<option value="Chibi">Chibi</option>
									<option value="Digital Watercolor">Digital Watercolor</option>
									<option value="Graphic Stylization">Graphic Stylization</option>
									<option value="Cute Aesthetic Style">Cute Aesthetic Style</option>
    								</select>
    								<label class="amber-text">Artstyles</label>
  								</div>
							</div>
						</div>

						<div class="row art">
							<div class="col s12 m12 l12">
								<div class="input-field col s12">
									<select class="dropdown" name="details" required>

										<option value="" disabled selected>With background</option>
										<option value="Bust/Headshot w/BG ">Bust/Headshot w/BG</option>
										<option value="Half Body w/BG">Half Body w/BG</option>
										<option value="Whole Body w/BG">Whole Body w/BG</option>

										<option value="" disabled selected>Commission Details</option>
										<option value="Bust/Headshot">Bust/Headshot</option>
										<option value="Half Body">Half Body</option>
										<option value="Whole Body">Whole Body</option>
										
									</select>
									<label class="amber-text">Details</label>
								</div>
							</div>
						</div>

						<div class="row date">
				        <p class='field'>
				            <label for='duedate'>Due Date</label>
				            <input type='text' id='duedate' name='duedate' class='datepicker' title='Due Date' required />
				        </p>
				    </div>


					<div class="row descrip">
						<div class="col s12 m12 l12">
							<div class="input-field col s12">
								<textarea id="description" name="description" class="materialize-textarea" required></textarea>
								<label for="description" class="amber-text">Description (such as character palette, male/female, etc.)</label>
							</div>
						</div>
					</div>

						<input type='submit' id='do_register' value='SUBMIT' title='Submit' />
					</div>
				</form>
		    </div>
		
			<div id="error-message"></div>
 			<div id="success-message"></div>
		</div>
  

	 <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    	document.addEventListener('DOMContentLoaded', function () {
        var textarea = document.getElementById('textarea1');
        var counter = document.getElementById('description-counter');

         textarea.addEventListener('input', function () {
            var inputText = textarea.value;
            
            // Check if the input exceeds 255 characters
            if (inputText.length > 255) {
                textarea.value = inputText.substring(0, 255);
                counter.textContent = '500/500';
            } else {
                counter.textContent = inputText.length + '/500';
            }
        });
    });

	    M.AutoInit();

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