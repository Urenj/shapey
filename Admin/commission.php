<?php
    include ('assets/config/db.php');
    $sql = 'SELECT client_id, name, email, due_date, art_style, details FROM commission';
    $result = mysqli_query($con, $sql);

    if (isset($_GET['client_id']) ) {
        $rowid = $_GET['client_id'];
        $deletesql = "DELETE FROM commission WHERE client_id = $rowid";
        $con->query($deletesql);
        header("location: commission.php ");
        $con->close();
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\commission.css">
    <link rel="stylesheet" href="assets\css\materialize.min.css">
    <script defer src="assets\js\materialize.min.js"></script>
    <style>
    </style>
</head>
<style>
   
</style>
<body>
    <div class="main-wrapper">
        <?php
        include "admin-nav.php"; 
        ?>

        <article class="wrapper-commission">
            <div class="commission">
                <table class="centered highlight"> 
                <thead>
                    <tr>
                        <th class="yellow-text">Client ID</th>
                        <th class="yellow-text">Client Name</th>
                        <th class="yellow-text">Contact Info</th>
                        <th class="yellow-text">Due Date</th>
                        <th class="yellow-text">Style</th>
                        <th class="yellow-text">Details</th>
                        <th class="yellow-text">Dicisions</th>
                    </tr>   
                </thead>
                <tbody>
                <?php

                    if ($result->num_rows > 0) {
                        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                        foreach ($rows as $row) {
                            echo "
                                <tr style = 'align-items: baseline'>
                                    <td>$row[client_id]</td>
                                    <td>" . htmlspecialchars($row["name"])  . "</td>
                                    <td>" . htmlspecialchars($row["email"]) . "</td>
                                    <td>" . htmlspecialchars($row["due_date"]) . "</td>
                                    <td>" . htmlspecialchars($row["art_style"])  . "</td>
                                    <td>" . htmlspecialchars($row["details"])  . "</td>
                                    <td style='display: flex; flex-direction: row; height: auto; width: auto;' >
                                    <form action='confirm.php' method='post'>
                                        <input type='hidden' name='client_id' value='" . htmlspecialchars($row["client_id"]) . "'>
                                        <button type='submit' class='waves-effect waves-light btn yellow darken-2' name='confirm'>Confirm</button>
                                    </form>
                                    <form action='' method='GET'>
                                        <input type='hidden' name='client_id' value='{$row['client_id']}'>
                                        <button type='submit' class='waves-effect waves-light btn deep-orange'>Decline</button>
                                     </form>
                                   
                                </td>
                                </tr>
                            ";
                        }
                    }
                    mysqli_free_result($result);
                    $con -> close();
                    
                    ?>
                    
                </tbody>
                </table>
            </div>
        </article>
    </div>
   
</body>
</html>


