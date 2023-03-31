<?php
session_start();
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
        <div class="slider">
            <div class="owl-carousel owl-theme" id="owl">
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">оборудование <br> для майнинга <br> оптом</p>
                                <p class="iwt-subtitle">с гарантией 12 месяцев</p>
                                <a href="./product.html">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/ferma-slider.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">оборудование <br> для майнинга <br> оптом</p>
                                <p class="iwt-subtitle">с гарантией 12 месяцев</p>
                                <a href="./product.html">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/ferma-slider.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">оборудование <br> для майнинга <br> оптом</p>
                                <p class="iwt-subtitle">с гарантией 12 месяцев</p>
                                <a href="./product.html">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/ferma-slider.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">оборудование <br> для майнинга <br> оптом</p>
                                <p class="iwt-subtitle">с гарантией 12 месяцев</p>
                                <a href="./product.html">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/ferma-slider.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category">
            <div class="category-wrapper">
                <div class="cw-main">
                    <p class="cw-title">категории товаров</p>
                    <?php 
                    if (($_COOKIE["idgroup"] ?? '') === ''); else {
                        if($_COOKIE["idgroup"] == 1) { ?>
                            <a href="./help/create-categ.php"><i class="fa-regular fa-square-plus fa-2xl"></i></a>
                        <?php } 
                    }
                    ?>
                    
                </div>
                
                <div class="cw-carts">
                    <?php
                        $select_categ = mysqli_query($link, "SELECT * FROM `category` ORDER BY `id` DESC");
                        $select_categ = mysqli_fetch_all($select_categ);

                        foreach($select_categ as $sc) { ?>
                            <div class="cwc-cart">
                                <div class="cwcc-wrapper">
                                    <div class="cwcc-img">
                                        <img src="<?php print("./" . $sc[2]); ?>">
                                    </div>
                                    <div class="cwcc-info">
                                        <p><?php echo $sc[1]; ?></p>
                                        <a href="./product.php?id=<?php echo $sc[0]; ?>">В каталог <img src="./img/svg/arrow-right.svg"></a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>
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