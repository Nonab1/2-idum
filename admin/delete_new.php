<?php 

$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=idea", 'root', 'root');
$sql = "DELETE FROM products WHERE id=:id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $_GET['id']);
$query->execute();

header("Location: products.php");

?>