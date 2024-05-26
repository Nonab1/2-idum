<?php 

$data =[
    'id' => $_POST['id'],
    'type' => strip_tags($_POST['type'])
];
$pdo = new PDO("mysql:host=localhost;dbname=idea", 'root', 'root');
$sql = "UPDATE type SET type=:type WHERE id=:id ";
$query = $pdo->prepare($sql);
$query->execute($data);

header('Location: types.php');

?>