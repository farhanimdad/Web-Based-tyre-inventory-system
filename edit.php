<?php
include("connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM tyres WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form method="POST" action="edit2.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Tyre Size:</label>
    <input type="text" name="tyresize" value="<?php echo $row['tyresize']; ?>" required><br>

    <label>Tyre Number:</label>
    <input type="text" name="tyrenumber" value="<?php echo $row['tyrenumber']; ?>" required><br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>" required><br>

    <label>Quantity:</label>
    <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>

    <button type="submit">Update</button>
</form>