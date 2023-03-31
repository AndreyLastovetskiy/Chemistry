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
        <div class="about">
            <div class="about-wrapper">
                <div class="aw-top">
                    <div class="awt-left">
                        <p class="aw-title">о компании</p>
                        <p class="aw-descr">С 2017 года Main-miner поставляет технику для майнинга на российский рынок оптом. За пять лет мы смогли укрепить свои позиции на рынке оборудования, вырастили персонал, прекрасно разбирающийся в каждом типе асиков и комплектующих. <br><br> Если вы хотите купить асики оптом, то с нами можете быть уверены как в качестве техники, так и в надёжности сотрудничества. Лучше всего о нас говорит репутация!</p>
                    </div>
                    <div class="awt-rigth">
                        <div class="awtr-img"></div>
                    </div>
                </div>
                <div class="aw-bottom">
                    <div class="awb-wrapper">
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/calandary.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Работаем без выходных – 7 дней в неделю</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/group.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Прямое сотрудничество с поставщиками</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/plane.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Быстрая авиадоставка от 14 дней</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/diagram.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Предоплата за предзаказ от 30%</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/tablet.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Официальный договор, полная защита средств</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/camera.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Видеопроверка для удаленных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="advantages-wrapper">
                <img src="./img/svg/bg-setka.svg" class="aw-setka">
                <div class="aw-grid">
                    <div class="awg-left">
                        <p>наши преимущества</p>
                        <img src="./img/svg/gpu.svg">
                    </div>
                    <div class="awg-right">
                        <div class="awgr-wpapper">
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Более 5 лет успешной работы</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Сотни положительных отзывов</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Работаем по всей России</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Сотрудничество с производителем</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Гарантия на оборудование</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Собственный склад в Москве</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="./img/svg/gpu.svg" class="aw-gpu">
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