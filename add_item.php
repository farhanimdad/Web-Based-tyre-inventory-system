<?php
$host = 'localhost';
$db = 'sangum_tyres';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

$tyre_size = $data['tyre_size'];
$tyre_number = $data['tyre_number'];
$price = $data['price'];
$quantity = $data['quantity'];

$sql = "INSERT INTO `sangum_tyres`.`tyre_details` (tyre_size, tyre_number, price, quantity) 
        VALUES ('$tyre_size', '$tyre_number', $price, $quantity)";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$conn->close();
?>
