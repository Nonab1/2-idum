<?php 

$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
$sql = "DELETE FROM slide WHERE id=:id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $_GET['id']);
$query->execute();

header("Location: slide.php");

?>