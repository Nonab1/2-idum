<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- font awesome end -->
    <!-- google fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- google fonts end -->
    <!-- style start -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- style end -->
    <link rel="icon" href="photos/logo6.png">
    <title>2-idum</title>
</head>
<body>
    <!-- header start -->
    <header>
      <div class="logo">
          <img src="photos/logo6.png" alt="">
          <h1>
            Toshkent viloyati <br>
            Bekobod shahar
          </h1>
          <i id="bars" class="fa-solid fa-bars"></i>
      </div>
        <ul class="main-ul">
            <li><a href="index.php">Bosh sahifa</a></li>
            <li><a href="news.php">Yangiliklar</a></li>
            <li class="mobile"><a href="#">Uslubiy birlashma<i class="fa-solid fa-arrow-down iTouch"></i></a></i>
            <ul class="mobileUl">
                <?php 
                $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
                $sql = "SELECT * FROM subject";
                $query = $pdo->prepare($sql);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>
                <?php foreach($data as $item): ?>
                      <li><a href="teachers.php?subject=<?= $item['subject'] ?>"><?= $item['subject'] ?></a></li>
                <?php endforeach; ?>
            </ul>
            </li>
            <li  class="lap"><a href="#">Uslubiy birlashma</a></i>
                <ul class="mouve">
                <?php 
                $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
                $sql = "SELECT * FROM subject";
                $query = $pdo->prepare($sql);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>
                <?php foreach($data as $item): ?>
                      <li><a href="teachers.php?subject=<?= $item['subject'] ?>"><?= $item['subject'] ?></a></li>
                <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="rooms.php">Sinf xonalar</a></li>
            <li><a href="about.php">Sayt yaratuvchilari</a></li>
            <li><i class="fa-solid fa-arrow-left back"></i></li>
        </ul>
    </header>
    <!-- header end-->
    <!-- section start -->
                <?php

                $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
                $sql = "SELECT * FROM teacher WHERE id=:id";
                $query = $pdo->prepare($sql);
                $query->bindParam('id', $_GET["id"]);
                $query->execute();
                $item = $query->fetch(PDO::FETCH_ASSOC);

                ?>
     <section>
        <div class="img">
            <img src="teacherphotos/<?= $item['img'] ?>" alt="">
        </div>
        <div class="text">       
            <h3>
                <?= $item['name'] ?>
            </h3>
            <p>
                <?= $item['text'] ?>
            </p>
            <a href="teachers.php?subject=<?= $item['subject'] ?>">Orqaga</a>
        </div>
    </section>
    <!-- section end -->
    <!-- footer start -->
    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2860.6538430520873!2d69.27251505067188!3d40.21543384102863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b197aa2e2fb9cb%3A0xaa0157640e2f3f74!2z0KjQutC-0LvQsCAy!5e0!3m2!1sru!2s!4v1705299456588!5m2!1sru!2s" width="300" height="150" style="border:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <ul>
            <li><a href=""><i class="fa-solid fa-phone"></i>Telefon</a></li>
            <li><a href="https://shkola2.bekabad.1948@bk.ru"><i class="fa-solid fa-envelope"></i>Email</a></li>
            <li><a href="https://t.me/bekobod_2idum"><i class="fa-brands fa-telegram"></i>Telegram</a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i>Instagram</a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i>Facebook</a></li>
        </ul>
    </footer>
    <!-- footer end -->
    <!-- splide js -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="js/news.js"></script>
    <script src="js/splide.js"></script>
    <!-- splide js -->
    <!-- aos js -->
    <script src="js/aos.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- aos js -->
    <script src="js/header.js"></script>
    <script src="js/limit.js"></script>
    
</body>
</html>