<?php
include("connection.php");

$id= $_POST['id'];
$tyresize = $_POST['tyresize'];
$tyrenumber = $_POST['tyrenumber'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO tyres (id,tyresize, tyrenumber, price, quantity) 
        VALUES ('$id', '$tyresize', '$tyrenumber', '$price', '$quantity')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: select.php"); 
} else {
    echo "Failed to insert record: " . mysqli_error($conn);
}
?>