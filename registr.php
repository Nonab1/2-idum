<?php 

if(isset($_COOKIE['user'])){
    header('Location: /');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registr</title>
</head>

<body>



    <div class="container mt-5">
        <div class="card p-3" style="width: 500px; margin:0 auto;">
        <?php 
        
        if(isset($_POST['btn_registr'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $reapet_password = $_POST['reapet_password'];

            $errors = array();
            if(empty($name) || empty($email) || empty($password) || empty($reapet_password)){
                array_push($errors, "Barcha maydonlarni to`ldiring");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Elektron manzil noto`g`ri");
            }
            if(strlen($password) < 8){
                array_push($errors, "Parolda 8 ta belgidan ko`p bo`lishi kerak ");
            }
            if($password != $reapet_password){
                array_push($errors, "Parol mos emas");
            }
            
            $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
            $sql = "SELECT * FROM users WHERE email=:email";
            $query = $pdo->prepare($sql);
            $query->bindParam('email', $email);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);

            if($user){
                array_push($errors, "Bunday elekrton pochta mavjud");
            }

            if(count($errors) > 0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                $data = [
                    'name' => strip_tags($name),
                    'email' => strip_tags($email),
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'status' => 0,
                ];

                $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
                $sql = "INSERT INTO users(name, email, password, status) VALUES (:name, :email, :password, :status)";
                $query = $pdo->prepare($sql);
                $query->execute($data);

                $sql = "SELECT * FROM users WHERE email=:email";
                $query = $pdo->prepare($sql);
                $query->bindParam('email', $email);
                $query->execute();
                $user = $query->fetch(PDO::FETCH_ASSOC);

                if($user){
                    setcookie('user', $user['status'], time()*10);

                    header('Location: /');
                }


            }
            
        }
        
        ?>
        <!-- <div class="alert alert-danger">Error</div> -->
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="reapet_password" class="form-label">Reapet Password</label>
                    <input type="password" name="reapet_password" class="form-control" id="reapet_password">
                </div>
                <input type="submit" value="Registr" name="btn_registr" class="btn btn-primary">
            </form>
            <a href="login.php" class="text-center">Login</a>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>