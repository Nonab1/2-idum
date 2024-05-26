<?php 
$data = [
    'type' => strip_tags($_POST['type']),
];

$pdo = new PDO("mysql:host=localhost;dbname=idea", 'root', 'root');
$sql = "INSERT INTO type(type) VALUES (:type)";
$query = $pdo->prepare($sql);
$query->execute($data);

header('Location: types.php');

?>