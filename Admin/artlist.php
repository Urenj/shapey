<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<style>
    
    
    *, html{
        scroll-behavior: smooth !important;
        color: white;

    }
    body{
        overflow: hidden;
    }
    .main-wrapper{
        display: flex;
        flex-direction: row;
        justify-content: start;
        align-items: center;
    }   
    
    .card-wrapper{
        display: flex;
        flex-direction: column;
        width: 1250px;
        height: 613px;
        overflow-y: scroll;
        position: relative;
        top: 10px;
    }
    
    .card-wrapper::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        border-radius: 15px;
        position: relative;
        right: 5px;
    }

    .card-wrapper::-webkit-scrollbar{
        width: 6px;
        background-color: #F5F5F5;
        border-radius: 15px;
    }

    .card-wrapper::-webkit-scrollbar-thumb
    {
        background-color: #ffc40c;
        border-radius: 15px;
    }

    .orig{
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    .chibi{
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    
    .water-coror{
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    
    .graphic-stylazation{
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    
    .cute{
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    .card {
    width: 300px;
    }

    .card-image {
    height: 300px;
    object-fit: auto;
    }

    .card-content {
    height: 150px;
    padding: 10px;
    overflow: hidden;
    }

    .card {
  transition: transform 0.3s;
    }

    .card:hover {
  transform: scale(1.1);
    }

    .btn-floating {
    width: 100px;
    height: 40px;
    border-radius: 15px;
    }

    .btn-floating:hover {
    transform: scale(1.1);
    }

    .fixed-action-btn ul li:nth-child(1),
    .fixed-action-btn ul li:nth-child(2),
    .fixed-action-btn ul li:nth-child(3),
    .fixed-action-btn ul li:nth-child(4),
    .fixed-action-btn ul li:nth-child(5) {
        position: relative;
        right: 43px;
    }

    
    .fixed-action-btn ul li a:nth-child(1),
    .fixed-action-btn ul li a:nth-child(2),
    .fixed-action-btn ul li a:nth-child(3),
    .fixed-action-btn ul li a:nth-child(4),
    .fixed-action-btn ul li a:nth-child(5) {
        line-height: 1.2;
    }

    .btndelete{
        position: absolute;
        bottom: 90%;
        left: 80%;
        
    }

    .card-image{
        height: 400px;
    }





</style>
<body>
    <div class="main-wrapper">
    <?php
        include "admin-nav.php";
        ?>

        <div class="card-wrapper">
            <!-- Original Art Style Section -->
            <h4 id="orig">Original Art Works</h4> 
            <section  class="orig">

               <?php
                    include('assets/config/db.php');

                    $originalArtQuery = "SELECT `id`, `img`, `list_style` FROM `card` WHERE `list_style` = 'Original ArtStyle'";
                    $originalArtResult = mysqli_query($con, $originalArtQuery);

                    if (mysqli_num_rows($originalArtResult) > 0) {
                        while ($originalArtRow = mysqli_fetch_assoc($originalArtResult)) {
                            $originalArtId = $originalArtRow['id'];
                            $originalArtImg = $originalArtRow['img'];
                            $location = 'upload/' . $originalArtImg;

                            echo '<div class="row">
                                    <div class="row col s12 m6 l5">
                                        <div class="card amber hover-reveal">
                                            <a class="card-image waves-effect waves-block" id=' . $originalArtId . '">
                                                <img id="img-cardo" class="activator" src="' . $location . '">
                                            </a>
                                                <form class="btndelete" method="post" action="upload.php">
                                                    <input type="hidden" name="card_id" value="' . $originalArtId . '">
                                                    <button type="submit" name="delete_card" class="btn waves-effect waves-light red darken-1"><i class="material-icons">clear</i></button>
                                                </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No Original Art Style records";
                    }

                    mysqli_close($con);
                    ?>
            </section>
            <!-- Chibi Art Style Section -->
            <h4 id="chibi">Chibi Art Works</h4>
            <section  class="chibi">
                
                <?php
                    include('assets/config/db.php');

                    $chibiQuery = "SELECT `id`, `img`, `list_style` FROM `card` WHERE `list_style` = 'Chibi'";
                    $chibiResult = mysqli_query($con, $chibiQuery);

                    if (mysqli_num_rows($chibiResult) > 0) {
                        while ($chibiRow = mysqli_fetch_assoc($chibiResult)) {
                            $chibiId = $chibiRow['id'];
                            $chibiImg = $chibiRow['img'];
                            $location = 'upload/'. $chibiImg;

                            echo '<div class="row">
                                    <div class="row col s12 m6 l4">
                                        <div class="card amber hover-reveal">
                                            <a class="card-image waves-effect waves-block" id=' . $chibiId . '">
                                                <img class="activator" src="' . $location . '">
                                            </a>
                                            <form class="btndelete" method="post" action="upload.php">
                                                <input type="hidden" name="card_id" value="' . $chibiId . '">
                                                <button type="submit" name="delete_card" class="btn waves-effect waves-light red darken-1"><i class="material-icons">clear</i></button>
                                            </form>
                                            </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No Chibi records";
                    }

                    mysqli_close($con);
                    ?>
            </section>
            <!-- Water Color Art Style Section -->
            <h4 id="water-color">Water Color Art Works</h4>
            <section  class="water-coror">
          
                <?php
                    include('assets/config/db.php');

                    $watercolorQuery = "SELECT `id`, `img`, `list_style` FROM `card` WHERE `list_style` = 'Digital WaterColor'";
                    $watercolorResult = mysqli_query($con, $watercolorQuery);

                    if (mysqli_num_rows($watercolorResult) > 0) {
                        while ($watercolorRow = mysqli_fetch_assoc($watercolorResult)) {
                            $watercolorId = $watercolorRow['id'];
                            $watercolorImg = $watercolorRow['img'];
                            $watercolorListStyle = $watercolorRow['list_style'];
                            $location = 'upload/' . $watercolorImg;

                            echo '<div class="row">
                                    <div class="row col s12 m6 l4">
                                        <div class="card amber hover-reveal">
                                            <a class="card-image waves-effect waves-block" id=' . $watercolorId . '">
                                                <img class="activator" src="' . $location . '">
                                            </a>
                                                <form class="btndelete" method="post" action="upload.php">
                                                    <input type="hidden" name="card_id" value="' . $watercolorId . '">
                                                    <button type="submit" name="delete_card" class="btn waves-effect waves-light red darken-1"><i class="material-icons">clear</i></button>
                                                </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No Digital WaterColor records";
                    }

                    mysqli_close($con);
                    ?>
            </section>
            <!-- Graphic  Art Style Section -->
            <h4 id="graphic-stylization">Graphic Stylizattion Art Works</h4>
            <section  class="graphic-stylization">
              
                <?php
                    include('assets/config/db.php');

                    $graphicStylizationQuery = "SELECT `id`, `img`, `list_style` FROM `card` WHERE `list_style` = 'Graphic Stylization'";
                    $graphicStylizationResult = mysqli_query($con, $graphicStylizationQuery);

                    if (mysqli_num_rows($graphicStylizationResult) > 0) {
                        while ($graphicStylizationRow = mysqli_fetch_assoc($graphicStylizationResult)) {
                            $graphicStylizationId = $graphicStylizationRow['id'];
                            $graphicStylizationImg = $graphicStylizationRow['img'];
                            $location = 'upload/' . $graphicStylizationImg;

                            echo '<div class="row">
                                    <div class="row col s12 m6 l4">s
                                        <div class="card amber hover-reveal">
                                            <a class="card-image waves-effect waves-block" href="card-content.php?id=' . $graphicStylizationId . '">
                                                <img class="activator" src="' . $location . '">
                                            </a>
                                            <form class="btndelete" method="post" action="upload.php">
                                                <input type="hidden" name="card_id" value="' . $graphicStylizationId . '">
                                                <button type="submit" name="delete_card" class="btn waves-effect waves-light red darken-1"><i class="material-icons">clear</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No Graphic Stylization records";
                    }

                    mysqli_close($con);
                    ?>

            </section>
            <!-- Cute Aesthetic Art Style Section -->
            <h4 id="cute">Cute Aesthetic Style Art Works</h4>
            <section  class="cute">
      
                <?php
                    include('assets/config/db.php');

                    $cuteAestheticQuery = "SELECT `id`, `img`, `list_style` FROM `card` WHERE `list_style` = 'Cute Aesthetic Style'";
                    $cuteAestheticResult = mysqli_query($con, $cuteAestheticQuery);

                    if (mysqli_num_rows($cuteAestheticResult) > 0) {
                        while ($cuteAestheticRow = mysqli_fetch_assoc($cuteAestheticResult)) {
                            $cuteAestheticId = $cuteAestheticRow['id'];
                            $cuteAestheticImg = $cuteAestheticRow['img'];
                            $location = 'upload/' .$cuteAestheticImg;

                            echo '<div class="row">
                                    <div class="row col s12 m12 l4">
                                        <div class="card amber hover-reveal">
                                            <a class="card-image waves-effect waves-block" id=' . $cuteAestheticId . '">
                                                <img class="activator" src="' . $location . '">
                                            </a>
                                            <form class="btndelete" method="post" action="upload.php">
                                                <input type="hidden" name="card_id" value="' .   $cuteAestheticId . '">
                                                <button type="submit" name="delete_card" class="btn waves-effect waves-light red darken-1"><i class="material-icons">clear</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "No Cute Aesthetic Style records";
                    }

                    mysqli_close($con);
                    ?>

            </section>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large yellow darken-4">
            <i class="large material-icons">expand_more</i>
        </a>
        <ul>
            <li><a href = "#orig" style="display: grid; place-items: center; color: black; " class="btn-floating yellow accent-4">Original</a></li>
            <li><a href = "#chibi" style="display: grid; place-items: center; color: black; " class="btn-floating yellow">Chibi</a></li>
            <li><a href = "#water-color" style="display: grid; place-items: center; color: black; " class="btn-floating yellow accent-3">WaterColor</a></li>
            <li><a href = "#graphic-stylization" style="display: grid; place-items: center; color: black; " class="btn-floating yellow accent-2">Graphic Stylizattion</a></li>
            <li><a href = "#cute" style="display: grid; place-items: center; color: black; " class="btn-floating yellow accent-1">Cute</a></li>
        </ul>
    </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

    </script>

    <script>
          document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
  });


  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
    </script>
</body> 
</html>