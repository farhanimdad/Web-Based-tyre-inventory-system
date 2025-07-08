<?php
include("connection.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tyres WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {

        header("Location: select.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
 
    echo "No ID provided for deletion.";
}
?>  