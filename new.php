<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="photos/logo6.png">
    <title>Yangiliklar</title>
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
    <!-- section start -->
    <?php 
    $id = $_GET['id'];
    $pdo = new PDO("mysql:host=localhost;dbname=2-idum", 'root', 'root');
    $sql = "SELECT * FROM news WHERE id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();
    $item = $query->fetch(PDO::FETCH_ASSOC);
    ?>
    <section>
        <div class="left">
            <div class="img">
                <img src="newsphotos/<?= $item['img'] ?>" alt="">
            </div>
            <div class="text">       
                <h3>
                    <?= $item['header']; ?>
                </h3>
                <p>
                    <?= $item['text']; ?>
                </p>
                <a href="news.php">Orqaga</a>
            </div>
        </div>
    </section>
    <!-- section end -->
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

    <script src="js/header.js"></script>
    <script src="js/limit.js"></script>
</body>
</html>