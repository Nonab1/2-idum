<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- font awesome end -->
    <!-- splide start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- splide end -->
    <!-- google fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- google fonts end -->
    <!-- aos start -->
    <link rel="stylesheet" href="css/aos.min.css">
    <!-- aos end -->
    <!-- style start -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
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
                <?php require_once"subject.php" ?>
                <?php foreach($data as $item): ?>
                      <li><a href="teachers.php?subject=<?= $item['subject'] ?>"><?= $item['subject'] ?></a></li>
                <?php endforeach; ?>
            </ul>
            </li>
            <li  class="lap"><a href="#">Uslubiy birlashma</a></i>
              <ul class="mouve">
                <?php require_once"subject.php" ?>
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
    <!-- middle start -->
    <div class="middle">
        <!-- splide start -->
        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__arrows splide__arrows--ltr">
              <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                aria-controls="splide01-track">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#ffffff" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
              </button>
              <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                aria-controls="splide01-track">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#ffffff" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
              </button>
            </div>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide"><img src="photos/bphoto5.jpg" alt=""></li>
                <li class="splide__slide"><img src="photos/bphoto6.jpg" alt=""></li>
                <li class="splide__slide"><img src="photos/bphoto1.jpg" alt=""></li>
                <li class="splide__slide"><img src="photos/bphoto1.jpg" alt=""></li>
                <li class="splide__slide"><img src="photos/bphoto1.jpg" alt=""></li>
              </ul>
            </div>
          </section>
        <!-- splide end -->
        <!-- hello start -->
        <?php 
          if(isset($_COOKIE['user'])){
            $user=$_COOKIE['user'];
          };
          if(isset($user)){
            $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
            $sql = "SELECT * FROM users WHERE name=:name";
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $_COOKIE['user']);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);
            echo "<h1 style=\"text-align:center;\">$user</h1>";
            $status = $data['status'];
            if($status == 1){
              echo "<h1 style=\"text-align:center;\"><a href=\"admin/index.php\" target=\"_blank\"; style=\"color: black;\">Adminga o'tish</a></h1>";
            };
          }else{
            echo "<h1 style=\"text-align:center;\"><a href=\"login.php\" style=\"color: black;\">Login</a></h1>";
          }
        ?>
        <!-- hello end -->
        <!-- maktab start -->
        <div class="maktab">
            <h2>Maktab haqida</h2>
            <div class="haqida l" data-aos="zoom-in-down" data-aos-duration="800">
                <div class="img">
                    <img src="photos/bphoto2.jpg" alt="">
                </div>
              <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas incidunt reiciendis officiis magni laudantium doloremque natus voluptatum perferendis voluptates veniam ex enim ipsum sapiente eos, culpa itaque hic. Temporibus nemo, quia perferendis architecto accusamus rerum cum fuga? Unde corporis iusto suscipit! Ea eum dignissimos cupiditate magni distinctio porro assumenda minus accusamus totam odit numquam, eligendi tempora doloremque excepturi? Tenetur vitae aliquid ab eaque modi et nam error, totam repellendus quae nemo, quidem dolorum, voluptate aliquam vel! Maiores nesciunt architecto, voluptas tenetur minus sunt assumenda molestias ratione quod aliquam ipsum rerum provident error at maxime est! Hic distinctio quasi doloremque temporibus!</h3>
            </div>
            <div class="haqida r" data-aos="zoom-in-down" data-aos-duration="800">
                <div class="img">
                    <img src="photos/bphoto2.jpg" alt="">
                </div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas incidunt reiciendis officiis magni laudantium doloremque natus voluptatum perferendis voluptates veniam ex enim ipsum sapiente eos, culpa itaque hic. Temporibus nemo, quia perferendis architecto accusamus rerum cum fuga? Unde corporis iusto suscipit! Ea eum dignissimos cupiditate magni distinctio porro assumenda minus accusamus totam odit numquam, eligendi tempora doloremque excepturi? Tenetur vitae aliquid ab eaque modi et nam error, totam repellendus quae nemo, quidem dolorum, voluptate aliquam vel! Maiores nesciunt architecto, voluptas tenetur minus sunt assumenda molestias ratione quod aliquam ipsum rerum provident error at maxime est! Hic distinctio quasi doloremque temporibus!</h3>
            </div>
        </div>
        <!-- maktab end -->
        <!-- yangiliklar start -->
        <section class="splide el" aria-label="Splide Basic HTML Example">
          <h2>Yangiliklar</h2>
            <div class="splide__arrows el-arrows">
              <button class="el-arrow  splide__arrow--prev el-prev" type="button" aria-label="Previous slide"
                aria-controls="splide01-track">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#aac9fd" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
              <button class="el-arrow  splide__arrow--next el-next" type="button" aria-label="Next slide"
                aria-controls="splide01-track">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#aac9fd" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
              </button>
            </div>
            <div class="splide__track">
              <ul class="splide__list">
                <?php 
                $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
                $sql = "SELECT * FROM news";
                $query = $pdo->prepare($sql);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach($data as $item): ?>
                <li class="splide__slide">
                  <div class="card">
                    <div class="img">
                      <img src="newsphotos/<?= $item['img'] ?>" alt="">
                    </div>
                    <div class="text">
                      <h3><?= $item['header'] ?></h3>
                      <p><?= $item['text'] ?></p>
                      <p><?= $item['time'] ?></p>
                      <a href="new.php?id=<?= $item['id'] ?>">Batafsil</a>
                    </div>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </section>
        <!-- yangiliklar end -->
    </div>
    <!-- middle end -->
    <!-- footer start -->
    <footer> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2860.6538430520873!2d69.27251505067188!3d40.21543384102863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b197aa2e2fb9cb%3A0xaa0157640e2f3f74!2z0KjQutC-0LvQsCAy!5e0!3m2!1sru!2s!4v1705299456588!5m2!1sru!2s" width="300" height="150" style="border:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <ul>
            <li><a href=""><i class="fa-solid fa-phone"></i><p>Telefon</p></a></li>
            <li><a href="https://shkola2.bekabad.1948@bk.ru"><i class="fa-solid fa-envelope"></i><p>Email</p></a></li>
            <li><a href="https://t.me/bekobod_2idum"><i class="fa-brands fa-telegram"></i><p>Telegram</p></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i><p>Instagram</p></a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i><p>Facebook</p></a></li>
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