<?php
session_start();

if (!isset($_SESSION['email'])) {

    header('Location: login.php');
    exit();
}


$username = $_SESSION['username'];



if (isset($_GET['action']) && $_GET['action'] == 'logout') {

    $_SESSION = array();


    session_destroy();

    
    header("Location: http://localhost/SHAPI/login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets\css\admin-nav.css">
    <link rel="stylesheet" href="assets\css\font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="assets\js\materialize.min.js"></script>
</head>


    <div class="wrapper">
    <div class="nav-container">
  
               <div class="user-container">
                    <span class="user-container-box">
                        <span class="image-container">
                    <img id="image" src="assets\img\ducky.jpg" alt="ducky duck" height="50px" width="50px">
                        </span> 
                        <span class="col-2-row-2">
                            <p style="font-size: 18x;">Hello, </p>                           
                        </span>
                             <p id="role">Admin</p>
                             <p id="username" style="font-size: 18px; font-weight: 500;">   
                             <?php echo $username; ?>!
                            </p>
                     </span>
                </div>
                    <div class="sidenav-wrapper">
                        <div class="side-nav">
                        <ul class="nav-list">
                            <li>
                                <a class="nav-buttons" href="index.php">
                                <i class="material-icons">dashboard</i>
                                &nbsp;&nbsp;Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="nav-buttons" href="commission.php">
                                <i class="material-icons">work</i>
                                &nbsp;&nbsp;Commission
                                </a>
                            </li>
                            <li>
                                <a class="nav-buttons" href="artlist.php">
                                <i class="material-icons">brush</i>
                                &nbsp;&nbsp;Art List
                                </a>
                            </li>
                            <li>
                                <a class="nav-buttons" href="addwork.php">
                                <i class="material-icons">add</i>
                                &nbsp;&nbsp;New Work
                                </a>
                            </li>
                            <li>
                                <a class="nav-buttons"href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?action=logout">
                                <i class="material-icons">logout</i>
                                &nbsp;&nbsp;Sign Out
                                </a>
                            </li>
                            </ul>
                        </div>
                    </div>
    </div>
    </div>
    
    
</html>