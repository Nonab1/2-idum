<?php 
 $item = [
    'subject' => strip_tags($_POST['subject']),
];

$pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
$sql = "INSERT INTO subject (subject) VALUES (:subject)";
$query = $pdo->prepare($sql);
$query->execute($item);

header('Location: subjects.php');

?>