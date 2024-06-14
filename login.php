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
    <title>Login</title>
</head>

<body>



    <div class="container mt-5">
        <div class="card p-3" style="width: 500px; margin:0 auto;">
        <?php 
        
        if(isset($_POST['btn_login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
            $sql = "SELECT * FROM users WHERE email=:email";
            $query = $pdo->prepare($sql);
            $query->bindParam('email', $email);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);
            
            if($user){
                if(password_verify($password, $user['password'])){
                    setcookie('user', $user['name'], time()*10);

                    header('Location: /');
                }else{
                    echo "<div class='alert alert-danger'>Parolda xato</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email yoki parol xato</div>";
            }
        }
        
        ?>
        <!-- <div class="alert alert-danger">Error</div> -->
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <input type="submit" value="Login" name="btn_login" class="btn btn-primary">
            </form>
            <a href="registr.php" class="text-center">Registr</a>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>