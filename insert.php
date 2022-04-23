<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'database';

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];
$weight = $_POST['weight'];

$sql = "INSERT INTO products (SKU, Name, Price, Size, Height, Width, Length, Weight) VALUES ('$sku','$name','$price','$size','$height','$width','$length','$weight');";
mysqli_query($conn, $sql);

header("Location: index.php");

?>