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

/*  CARD ELEMENTS */

		.cardo{
			position: absolute;
/*    		top: 20%;*/
    		transform: translateX(-50%);
    		width: 1000px;
/*    		background-color: #212121 !important;*/
		}

		.card{
    		background-color: #2D2F31;
			border: 1px solid rgba(255,255,255,0.2);
			border-radius: 7px	;
/*			width: 600px;*/
    		position: relative;
    		z-index: 1;
		}

		.card-title{
            padding-top: 25px;
			font-size: 30pt;
			font-family: Borel;
			padding-bottom: 20px;
            flex-shrink: 0;
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .card-image{
/*        	width: 700px !important;*/
        	margin: auto auto 50px auto !important;

        }

/*        .card-image:hover{
        	transform: scale(2) !important;
        }*/

        .details{
        	text-align: justify;
        	padding: 20px 20px 10px 20px;
        }

        .line-wh{
	    	width: 100%;
	    	height: 1px;
	    	top: 0px;
	    	margin: 12px auto;
	    	position: relative;
	    	border-top: 1px solid rgba(255,255,255,0.3);
	    }

	    /*.button-price{
	    	 padding-bottom: 15px;
	    	 padding-left: 130px;
	    	 padding-right: 130px;
	    }
*/
	    .buttons-sample{
	    	margin-top: 20px !important;
	    	 padding-bottom: 15px !important;
/*            margin-left: 1.5rem;*/
/*            margin-right: 1.5rem;*/
/*           	padding-left: 100px;*/
/*	    	 padding-right: 100px;*/
	    }
	    .buttons-bc{
	    	 padding-bottom: 15px;
	    	 padding-top: 15px;
	    	 /*padding-left: 100px;
	    	 padding-right: 100px;
            margin-left: 1.5rem;
            margin-right: 1.5rem;*/
	    }

	    .btn{
            border-radius: 20px 20px !important;
            background-color: #212121;
            width: 60%;
	    }

	    .btn:hover{
	    	background-color: #ffc40c !important;
            width: 60%;
	    	color: #2D2F31 !important;
	    }
	    a{
	    	padding-left: 15px;
	    	padding-right: 10px;
	    }

	    .buttons-bc > a:hover{
	    	text-decoration: underline;
	    	color: #f8bbd0 !important;
	    }


/*		element.style {
		    height: 440px;
		}*/
		.swiper, .swiper-wrapper {
		    z-index: auto;
		}
		.swiper-horizontal {
		    touch-action: pan-y;
		}

		.back{
			font-size: .9rem !important;
		}
		.comms-f{
			font-size: .9rem !important;
		}

		@media screen and (max-width: 1980px){
        	.cardo{
    			left: 53% !important;
            }        

        }


		@media screen and (max-width: 650px){
            .cardo{
    			left: 50% !important;
            }        
        }

        





/*TRANSITIONS*/

		body, cardo, .btn, .btn:hover{


/*			visibility: visible;
			-webkit-transition: -webkit-transform 0.5s;
			transition: transform 0.5s;
			-webkit-transform: translate3d(0, 0, 0);
			transform: translate3d(0, 0, 0);*/
/*			transition-timing-function: ease-out;*/
			-webkit-transition: all 0.5s;
			-moz-transition: all 0.5s;
			-ms-transition: all 0.5s;
			-o-transition: all 0.5s;
			transition: all 0.5s;

			-webkit-animation: bounceIn 0.7s ease-out;
			-moz-animation: bounceIn 0.7s ease-out;
			-o-animation: bounceIn 0.7s ease-out;
			animation: bounceIn 0.7s ease-out;
		}

		.card-image{
/*			height: 300px;*/
			width: 300px;
			border-radius: 15px !important;
			padding-right: 10px;
		}

		.orig-img{
			display: flex;
			flex-wrap: wrap;
			
		}

	</style>

	<title>AniNeru</title>

</head>
<body>

	<div class="cardo">
		<div class="row">
		    <div class="col s12 m12 l12">
		      <div class="card ">
		        <div class="card-content white-text ">
		          <span class="card-title amber-text center">Main Artstyle</span>
					<div class="orig-img">
					<?php
						include('Admin\assets\config\db.php');

						$originalArtQuery = "SELECT `img`, `list_style` FROM `card` WHERE `list_style` = 'Original ArtStyle'";
						$originalArtResult = mysqli_query($con, $originalArtQuery);

						if (mysqli_num_rows($originalArtResult) > 0) {
							while ($originalArtRow = mysqli_fetch_assoc($originalArtResult)) {
								$originalArtImg = $originalArtRow['img'];
								$location = 'Admin/upload/' . $originalArtImg;

								echo '<img class="card-image  materialboxed" src="' . $location . '" >';
							}
						} else {
							echo "No Original Art Style records";
						}

						mysqli_close($con);
                    ?>
					</div>
		      		<div class="buttons-bc center">
		      			<a href="index.php" class="amber-text back left">◃ Back
                		</a>
                		<a href="comms-form.php" class="amber-text comms-f right">Commission Now! ▹
                		</a>
		      		</div>
		        </div>
		      </div>
		    </div>
		  </div>
	</div>
		

	 <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    	$(document).ready(function(){
    		$('.materialboxed').materialbox();
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