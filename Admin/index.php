<?php
include ('assets/config/db.php');

// Delete operation
if (isset($_GET['id'])) {
    $rowId = $_GET['id'];
    $deleteSql = "DELETE FROM contract WHERE id = $rowId";
    $con->query($deleteSql);
    header("location: index.php");
    $con->close();
    exit;
}

// Fetch user status
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

// Update user status
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newStatus'])) {
    $newStatus = $_POST['newStatus'];
    $updateQuery = "UPDATE users SET status = ? WHERE email = ?";
    $updateStmt = $con->prepare($updateQuery);
    $updateStmt->bind_param('ss', $newStatus, $email);

    if ($updateStmt->execute()) {
        $userStatus = $newStatus; 
    } else {
        echo 'Error updating status: ' . $updateStmt->error;
    }

    $updateStmt->close();
}

// Fetch data
$sql = 'SELECT id, client_name, contact_info, due, style, client_details, client_description FROM contract';
$result = mysqli_query($con, $sql);

// Fetch client count
$clientquery = "SELECT * FROM contract";
$totalclient = mysqli_query($con, $clientquery);
$totalresult = ($totalclient) ? mysqli_num_rows($totalclient) : 0;

// Close the connection
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <link rel="stylesheet" href="assets\css\materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="assets\js\materialize.min.js"></script>
    <script defer src="assets\js\dashboard.js"></script>
</head>

<style>
    .toggle-button {
    display: inline-block;
    margin: 10px;
}

.slider {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 30px;
    background-color: #ccc;
    border-radius: 15px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: background-color 0.5s ease;
}

.slider:before {
    content: "";
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: white;
    transition: transform 0.3s ease;
}

.slider span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #555;
    font-size: 14px;
}

.toggle-button input[type="hidden"]:checked + .slider {
    background-color: #ffc40c;
}

.toggle-button input[type="hidden"]:checked + .slider:before {
    transform: translateX(30px);
}

</style>
<body>
    <div class="main-wrapper">
        <?php
        include "admin-nav.php";
        ?>
        <article class="wrapper-dashboard">
            <div class="dashboard">
                <div class="status-wrapper">
                    <fieldset class="status-box">
                        <legend class="legend">Status</legend>
                        <div class="toggle-button">
                            <form method="post" action="">
                                <input type="hidden" name="newStatus" value="<?php echo $userStatus === 'Active' ? 'Hiatus' : 'Active'; ?>">
                                <input id="checkValue" name="checkbox" type="checkbox" class="iphone-toggle" <?php echo $userStatus === 'Active' ? 'checked' : ''; ?>>
                                <label for="checkValue" class="slider"></label>
                            </form>
                        </div>
                        <p id="status"><?php echo ucfirst($userStatus); ?></p>
                    </fieldset>
                </div>
                
<div class="current-client-wrapper">
                    <fieldset class="current-client-box">
                        <legend class="legend">Current Clients</legend> 
                       
                                <?php
                                    include ('assets/config/db.php');

                                    $clientquery = "SELECT * FROM contract";
                                    $totalclient = mysqli_query($con, $clientquery);

                                    if($totalresult = mysqli_num_rows($totalclient))
                                    {
                                        echo "<p id='client-count'>".$totalresult."</p> ";
                                    }
                                    else
                                    {
                                        echo "<p id='client-count'>0</p>";
                                    }
                                    $con -> close();
                                ?>
                    </fieldset>
                </div>
                <div class="contract-wrapper">
                    <fieldset class="contract-box">
                        <legend class="legend">Contract</legend>

                        <table class="centered responsive">
                            
                            <thead>
                                <tr>
                                    <th class=" yellow-text">ID</th>
                                    <th class=" yellow-text">Client Name</th>
                                    <th class=" yellow-text">Contact Info</th>
                                    <th class=" yellow-text">Due</th>
                                    <th class=" yellow-text">Style</th>
                                    <th class=" yellow-text">Details</th>
                                    <th class=" yellow-text">Description</th>
                                    <th class=" yellow-text">Status</th>

                                </tr>
                            </thead>

                            <tbody >
                            
                            <?php
                           include ('assets/config/db.php');
                            if($result ->num_rows > 0)
                            {
                                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                foreach($rows as $row)
                                {
                                    echo    "
                                              <tr>
                                              <td>$row[id]</td>
                                              <td>" . htmlspecialchars($row['client_name']) . "</td>
                                              <td>" . htmlspecialchars($row['contact_info']) . "</td>
                                              <td>" . htmlspecialchars($row['due']) . "</td>
                                              <td>" . htmlspecialchars($row['style']) . "</td>
                                              <td>" . htmlspecialchars($row['client_details']) . "</td>
                                              <td>" . htmlspecialchars($row['client_description']) . "</td>
                                              <td>
                                                <form action='' method='GET'>
                                                    <input type='hidden' name='id' value='{$row['id']}'>
                                                    <button type='submit' class='waves-effect waves-light btn yellow darken-2'>Done</button>
                                                </form>
                                              </td>
                                             </tr> 
                                           ";
                                }
                            }
                            mysqli_free_result($result);
                            mysqli_close($con);
                            ?>
                          
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </div>
        </article>
    </div>

<script>
    var checkbox = document.getElementById("checkValue");

    checkbox.addEventListener("change", function() {
        var form = document.getElementsByTagName("form")[0];

        form.submit();
    });
</script>

</body>
</html>

