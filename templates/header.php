<head>
	<title>AniNeru</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Borel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');

        ::selection{
          background-color: #c89703;
          color: white;
        }

        .brand-logo{
             font-family: Borel;
/*             font-size: 33px;*/
        }

        .sidenav{
            overflow: hidden !important;
            background-color: #212121 !important;
        }

        .sidenav > ul, li, a, i{
            color: #ffc40c !important;
/*            font-size: .875rem;*/
        }

        /*.sidenav.sidenav-fixed{
            background-image: linear-gradient(30deg ,#212121, #ffc107 !important);

        }*/

        #nav-mobile{
            width: 250px;
        }


        nav.top-nav{
            height: 110px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 0.5px solid rgba(0,0,0,0.14);
            background-color: #ffd54f;
/*            opacity: 0.9;*/
            padding: 15px 30px;
        }

        nav{
            width: 100%;
        }

        body {
            font-family: Titillium Web;
            margin: 0 !important;
            -webkit-font-smoothing: antialiased;
        }

        header{
            padding-left: 300px;
        }

        nav > .container{
            margin: 0 0 !important;
        }
        .row:after{
            content: "";
            display: table;
            clear: both;
        }

        h2{
            font-size: 25pt;
            font-family: 'Titillium Web';
        }

        .logo-section{
/*            padding-bottom: 15px;*/
            padding-top: 50px;

            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }


        .login-section{
            padding-bottom: 15px;
            padding-top: 20px;
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .options-section{
            padding-bottom: 15px;
            padding-top: 20px;
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .stat{
            margin-left: 4.5rem;
            margin-right: 4.5rem;
            padding-top: 20px;

            border: 1px #212121 !important;
            border-radius: 30px 30px !important;
        }

        .stat > .status{
            border: 1px #212121 !important;
            border-radius: 30px 30px !important;
            width: 100% !important;
        }

        .logo-section > .brand-logo{
            padding: 20px 20px;
            font-size: 30pt;
        }

        .artstyle-section{
            padding-bottom: 15px;
/*            padding-top: 20px;*/
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .section-footer{
            font-size: .875rem;
            line-height: 1.25rem;
            padding-bottom: 1rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            justify-content: flex-end;
            align-items: center;
            flex-direction: column;
            display: flex;
            background-color: #212121 !important;
            margin-top: 90px !important;
            padding-top: 30px !important;
            margin-bottom: 0 !important;
            bottom: 0 !important;
        }

        .section-footer > .row{
            margin-top: 25px !important;
            margin-bottom: 40px !important;
        }

/*        .container{
            padding-left: 300px;
        }*/

        .card{
            border-radius: 0.5rem !important;
        }

        .card .card-content{
            padding: 14px !important;
            border-radius: 0 0 5px 5px !important;
        }

        .card-title{
            font-size: 1.8rem !important;
            margin: .5rem 0 0.912rem 0;
        }

        .notice{
            font-size: .75rem !important;
        }


/*        element.style {
            height: 440px;
        }*/
        .carousel, .carousel-slider {
            z-index: auto;
            height: 450px !important;
        }
        .swiper-horizontal {
            touch-action: pan-y;
        }

        .carousel.carousel-slider {
            top: 0px;
            left: 0;
        }
        
        .section {
            padding-top: .5rem;
            padding-bottom: 1rem;
        }

        .pers{
            font-size: 40px;
            text-align: center;
        }

        .fill-width:not(.px-0) {
            padding-left: var(--side-margin)!important;
            padding-right: var(--side-margin)!important;
        }

        .fill-width {
            margin-left: calc(var(--side-margin)*-1)!important;
            margin-right: calc(var(--side-margin)*-1)!important;
            width: calc(100% + var(--side-margin)*2)!important;
        }

        .swiper, .swiper-wrapper {
            z-index: auto;
        }

        .swiper-wrapper {
            box-sizing: content-box;
            display: flex;
            height: 100%;
            position: relative;
            transition-property: transform;
            transition-timing-function: ease;
            transition-timing-function: var(--swiper-wrapper-transition-timing-function,initial);
            width: 100%;
            z-index: 1;
        }

        .swiper {
            display: block;
            list-style: none;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .swiper-slide {
            display: block;
            flex-shrink: 0;
            height: 100%;
            position: relative;
            transition-property: transform;
            width: 100%;
        }

        .home-section{
            adding-bottom: 15px;
            padding-top: 20px;
            align-items: center;
            flex-shrink: 0;
/*            display: flex;*/
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        /*.artstyl{
            font-size: 1.5rem !important;
            line-height: 2rem !important;
        }*/

        h3{
            font-size: 2rem !important;
            line-height: 2rem !important;
        }

        .copyright{
            font-size: .75rem !important;
        }

        .note{
            font-size: 13px !important;
        }

        .intro{
            margin-bottom: 40px !important;
        }
        .niro{
            padding-top: 14px !important;
        }


        
/*   EFFECTS     */

        .logo-section, .brand-logo{
            -webkit-animation: bounceIn 0.7s ease-out;
            -moz-animation: bounceIn 0.7s ease-out;
            -o-animation: bounceIn 0.7s ease-out;
            animation: bounceIn 0.7s ease-out;

            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .logo-section > .brand-logo:hover{
            height: 50px !important;
            color: #fff !important;
            text-shadow: 0px 1.2px 2px #212121;
            padding: 20px 20px;
/*            font-size: 30pt;*/
        }

        .two{
            font-weight: 1000 !important;
            padding-left: 10px !important;
        }

        .sidenav > .two-1{
/*            font-weight: 1000 !important;*/
            margin-right: 10px !important;
        }


        .one:hover{
            color: #fff !important;
        }

        .two:hover{
            color: #fff !important;
        }
        .three:hover{
            color: #fff !important;
        }
        .four:hover{
            color: #fff !important;
        }

/*        a.selected{
            background-color: #ffc40c !important;
            border-radius: 30px 30px !important;
        }*/

/*        .one, .two, .three, .four:focus{
            background-color: #ffc40c !important;
            border-radius: 30px 30px !important;
        }*/

/*        .one, .two, .three, .four:active{
            background-color: #ffc40c !important;
            border-radius: 30px 30px !important;
        }*/

        @media screen and (max-width: 1980px){
            .contain-main{
                padding-left: 200px !important;
            }
            /*.contain-main > .pi{
                font-size: 20pt !important;
            }*/
             #contain-carousel{
                padding-left: 300px !important;
            }

            .artist{
                margin-bottom: 0px !important;
                padding-left: 30px !important;
            }

            /*#row-terms{
                padding-left: 400px !important;
            }*/

            #contain-about{
/*                padding-top: 50px !important;*/
                padding-left: 240px !important;
            }

            /*#process{
                padding-left: 200px;
            }*/

            .artstyl{
                padding-left: 200px !important;

            }

        }

        @media screen and (max-width: 993px){
            /*#process{
                padding-left: 200px;
            }*/
            .contain-main{
                padding-left: 0px !important;
            }
             #contain-carousel{
                padding-left: 0px !important;
            }

             #row-terms{
                padding-left: 100px !important;
            }
            #contain-about{
                padding-left: 0px !important;
            }
            .artstyl{
                padding-left: 0px !important;

            }
            /*.artstyl{
                padding-left: 350px !important;
            }*/

        }

        @media screen and (max-width: 650px){
            .contain-main{
                padding-left: 0px !important;
            }
             #contain-carousel{
                padding-left: 0px !important;
            }

             #row-terms{
                padding-left: 0px !important;
            }
            #contain-about{
                padding-left: 0px !important;
            }
            .artstyl{
                padding-left: 20px !important;
                font-size: ;
            }
        }


    </style>
</head>
<body>

<header>
    
  <!--   <nav class="top-nav">
        <div class="container">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12 m12 offset-m1">
                        <h2 class="black-text left">Commissions</h2>
                    </div>
                </div>
            </div>
        </div>
    </nav> -->
    <ul id="nav-mobile" class="sidenav sidenav-fixed grey hide-on-med-and-down" style="transform: translateX(0%);">
            <div class="logo-section center ">
                <a href="#" class="no-effect brand-logo amber-text center ">AniNeru</a>
            </div>
            <div class="stat center">
    <?php
    include('Admin\assets\config\db.php');

    $email = 'neru@gmail.com';
    $statusQuery = "SELECT status FROM users WHERE email = ?";
    $statusStmt = $con->prepare($statusQuery);
    $statusStmt->bind_param('s', $email);
    $statusStmt->execute();
    $statusStmt->bind_result($userStatus);

    // Check if the status is fetched successfully
    if ($statusStmt->fetch()) {
        $statusStmt->close();
    } else {
        $userStatus = 'Hiatus';
        $statusStmt->close();
    }
    ?>

    <div class="status center <?php echo $userStatus === 'Active' ? 'green-text' : 'amber-text'; ?>">
        Status: <?php echo $userStatus; ?>
    </div>
</div>


            <!-- <div class="login-section">
                <li>
                    <a class="one amber-text" href="login.php">Log In<i class="material-icons amber-text">person</i></a>
                </li>
            </div> -->

            <div class="home-section">
                <li>
                    <a class="two amber-text" href="index.php"><i class=" two-i material-icons amber-text">home</i>Home</a>
                    
                </li>
            </div>

            <div class="options-section">
                
                <li>
                    <a class="four amber-text" href="index.php#row-terms">Terms & Conditions</a>
                    <a class="three amber-text" href="about.php">About AniNeru</a>

                </li>
            </div>


            <div class="section-footer grey-darken-4">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <a href="https://www.facebook.com/profile.php?id=100091417051963" class="btn-floating amber">
                        <i class="fa fa-facebook-f black-text" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/_anineru" class="btn-floating amber">
                        <i class="fa fa-instagram black-text" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC4ODIPFkHWjTRx5Mkesu46w" class="btn-floating amber">
                        <i class="fa fa-youtube-play black-text" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/anineru" class="btn-floating amber">
                        <i class="fa fa-twitter black-text" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-copyright grey darken-4 amber-text">
                    <div class="container">
                        <div class="copyright center row col s12 m12 l12">© 2024 Copyright AniNeru</div>
                    </div>
                </div>
            </div>
       
      
    </ul>


</header>






