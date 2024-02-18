<?php


// Initialize $imageName
$imageName = '';

// Check if a file is uploaded
if(isset($_FILES["file"]) && $_FILES["file"]["name"] != '') {
    include('assets/config/db.php');
    $test = explode('.', $_FILES["file"]["name"]);
    $ext = end($test);
    $name = rand(100, 999) . '.' . $ext;    
    $location = 'upload/' . $name;
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    echo '<img src="'.$location.'" style="border-radius:14.5px;" height="570" width="655" class="img-thumbnail" />';
    $imageName = $name; 
    mysqli_close($con);
}

// Check if Confirm button is clicked
if(isset($_POST['confirm'])) {
    include('assets/config/db.php');
    // Gather input values
    $styles = $_POST['styles'];

    // Check if required fields are filled
    if(empty($styles)) {
        echo '<script>alert("Please fill up all fields."); window.location.href="addwork.php";</script>';
    } else {
        $query = "INSERT INTO card (img, list_style) VALUES (?, ?)";
        $stmt = mysqli_prepare($con, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $imageName, $styles);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo '<script>alert("Card successfully added!"); window.location.href="addwork.php";</script>';
        } else {
            echo '<script>alert("Error inserting into the database: ' . mysqli_error($con) . '"); window.location.href="addwork.php";</script>';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}

if(isset($_POST['delete_card'])){
    include('assets/config/db.php');
    $card_id = $_POST['card_id'];
    
    // Fetching image file name from the database
    $fetch_img_query = "SELECT `img` FROM `card` WHERE `id` = $card_id";
    $fetch_img_result = mysqli_query($con, $fetch_img_query);
    
    if(mysqli_num_rows($fetch_img_result) > 0) {
        $fetch_img_row = mysqli_fetch_assoc($fetch_img_result);
        $img_filename = $fetch_img_row['img'];
        
        // Deleting image file from the server
        $img_path = 'upload/' . $img_filename;
        if(file_exists($img_path) && is_file($img_path)) {
            unlink($img_path);
        }
        
        // Deleting database record
        $delete_query = "DELETE FROM `card` WHERE `id` = $card_id";
        $result = mysqli_query($con, $delete_query);
        
        if ($result) {
            echo '<script>alert("Card successfully deleted!"); window.location.href="artlist.php";</script>';
        } else {
            echo '<script>alert("Error deleting the card: ' . mysqli_error($con) . '"); window.location.href="artlist.php";</script>';
        }
    }
    
    mysqli_close($con);
}

?>
