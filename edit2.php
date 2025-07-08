<?php
include("connection.php");

$id = $_POST['id'];
$tyresize = $_POST['tyresize'];
$tyrenumber = $_POST['tyrenumber'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "UPDATE tyres 
        SET tyresize='$tyresize', tyrenumber='$tyrenumber', price='$price', quantity='$quantity' 
        WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: select.php"); 
} else {
    echo "Failed to update record: " . mysqli_error($conn);
}
?>