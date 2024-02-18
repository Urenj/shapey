<?php 
include('assets/config/db.php');

if (isset($_POST['confirm'])) {
    $con->begin_transaction();

    $client_id = $_POST['client_id'];

    $insertSql = "INSERT INTO contract (id, client_name, contact_info, due, style, client_details, client_description)
        SELECT client_id, name, email, due_date, art_style, details, description     
        FROM commission
        WHERE client_id = $client_id";

    if ($con->query($insertSql) === TRUE) {
        $deleteSql = "DELETE FROM commission WHERE client_id = $client_id";

        $con->query($deleteSql);

        $con->commit();

        header("location: index.php");
    } else {
        $con->rollback();

        echo "Error: " . $insertSql . "<br>" . $con->error;
    }
}

$con->close();
?>
