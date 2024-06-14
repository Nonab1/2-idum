<?php 

$pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
$sql = "SELECT * FROM subject";
$query = $pdo->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);

?>