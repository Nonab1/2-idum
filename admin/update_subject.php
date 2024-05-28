<?php 

$data = [
    'id' => $_POST['id'],
    'subject' => strip_tags($_POST['subject']),
];
$pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
$sql = "UPDATE subject SET subject=:subject WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute($data);

header('Location: subjects.php');
?>