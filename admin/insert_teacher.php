<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (count($_POST) > 0) {
    $img_name = $_FILES['img']['name'];
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $img_error = $_FILES['img']['error'];

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

    $img_ex_lower = strtolower($img_ex);
    $img_vd_ex = array('jpg', 'jpeg', 'png', 'webp', 'svg');

    if (in_array($img_ex_lower, $img_vd_ex)) {
        $img_new_name = uniqid("img_", true) . "." . $img_ex_lower;

        $data = [
            'name' => strip_tags($_POST['name']),
            'text' => strip_tags($_POST['text']),
            'subject' => $_POST['subject'],
            'img' => $img_new_name,
        ];
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        move_uploaded_file($img_tmp_name, "../teacherphotos/" . $img_new_name);
        $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
        $sql = "INSERT INTO teacher(name, text, subject, img) VALUES (:name, :text, :subject, :img)";
        $query = $pdo->prepare($sql);
        $query->execute($data);

        header('Location: teachers.php');
    } 
}
