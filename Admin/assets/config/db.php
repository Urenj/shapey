<?php 

    $con = mysqli_connect('localhost', 'neru', '', 'neru_comms');

    if(!$con)
    {
        echo 'Connection error'. mysqli_connect_error();
    }

?>