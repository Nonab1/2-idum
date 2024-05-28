<?php 

$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
$sql = "DELETE FROM news WHERE id=:id";
$query = $pdo->prepare($sql);
$query->bindParam(':id', $_GET['id']);
$query->execute();

header("Location: news.php");

?>