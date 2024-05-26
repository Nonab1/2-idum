<?php 




    $img_name = $_FILES['img']['name'];
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $img_error = $_FILES['img']['error'];

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

    $img_ex_lower = strtolower($img_ex);
    $img_vd_ex = array('jpg', 'jpeg', 'png', 'webp', 'svg');

    if (in_array($img_ex_lower, $img_vd_ex)) {
        $img_new_name = uniqid("img_", true) . "." . $img_ex_lower;

        $data = [
            'id' => $_POST['id'],
            'name' => strip_tags($_POST['name']),
            'price' => strip_tags($_POST['price']),
            'brend' => $_POST['brend'],
            'type' => $_POST['type'],
            'more' => strip_tags($_POST['more']),
            'img' => $img_new_name,
        ];
        echo "<pre>"; print_r($data);echo "</pre>";
        move_uploaded_file($img_tmp_name, "../productPhotos/" . $img_new_name);
        $pdo = new PDO("mysql:host=localhost;dbname=idea", 'root', 'root');
        $sql = "UPDATE products SET name=:name, price=:price, brend=:brend, type=:type, more=:more, img=:img WHERE id=:id ";
        $query = $pdo->prepare($sql);
        $query->execute($data);

        header('Location: products.php');
    }



?>