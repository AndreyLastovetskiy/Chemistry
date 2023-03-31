<?php
require_once("./db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/media.css">

    <link rel="stylesheet" href="./style/owl.carousel.min.css">
    <link rel="stylesheet" href="./style/owl.theme.default.min.css">

    <script src="./js/jquery.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <title>Главная</title>
</head>
<body>
    <?php
    require_once("./models/header.php");
    ?>
    <main>
        <div class="contact">
            <div class="contact-wrapper">
                <div class="cw-left">
                    <p class="cwl-title">контакты</p>
                    <div class="cwl-info">
                        <p><i class="fa-solid fa-location-dot"></i><span>г. Москва, ул. Покровка, 47А</span></p>
                        <p><img src="./img/svg/metro.svg"><span>м. Курская</span></p>
                        <a href="mailto: clean@house.com"><i class="fa-solid fa-envelope"></i><span>clean@house.com</span></a>
                        <a href="tel: +7 (999) 999-99-99"><i class="fa-solid fa-phone"></i><span>+7 (999) 999-99-99</span></a>
                        <p class="cwli-timework"><i class="fa-solid fa-clock"></i><span>График работы: <br> ежедневно с 9:00 до 20:00</span></p>
                    </div>
                    <div class="cwl-icon">
                        <a href="#!" class="hcwr-left"><img src="./img/svg/tg.svg"></a>
                        <a href="#!"><img src="./img/svg/wp.svg"></a>
                    </div>
                </div>
                <div class="cw-right">
                    <div class="cwr-img"></div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("./models/footer.php");
    require_once("./models/mobile.php");
    ?>
    <script src="./js/hamburger.js"></script>
    <script src="./js/owl.js"></script>
</body>
</html>