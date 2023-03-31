<?php
require_once("./db/db.php");
$id_product = $_GET['id'];
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
        <?php
            $select_cart = mysqli_query($link, "SELECT * FROM `product` WHERE `id` = '$id_product'");
            $select_cart = mysqli_fetch_assoc($select_cart);
        ?>
        <div class="cart-product">
            <div class="cp-wrapper">
                <div class="cpw-left">
                    <img src="<?php print("./" . $select_cart['imgpath']); ?>">
                </div>
                <div class="cpw-right">
                    <div class="cpwr-main">
                        <p class="cpwr-title"><?php echo $select_cart['title']; ?></p>
                        <?php 
                        if (($_COOKIE["idgroup"] ?? '') === ''); else {
                            if($_COOKIE["idgroup"] == 1) { ?>
                                <a href="./help/update-product.php?id=<?php echo $select_cart['id']; ?>"><i class="fa-solid fa-pen-to-square fa-2xl"></i></a>
                                <a href="./help/delete-product.php?id=<?php echo $select_cart['id']; ?>"><i class="fa-solid fa-trash-can fa-2xl"></i></a>
                            <?php }
                        } ?>
                        
                    </div>
                    
                    <p class="cpwr-price"><?php echo $select_cart['price']; ?> ₽</p>
                    <p class="cpwr-description"><?php echo $select_cart['descrip']; ?></p>
                    <div class="cpwr-buy">
                        <a href="./buy.php?id=<?php echo $select_cart['id']; ?>">Купить</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestsellers">
            <div class="bestsellers-wrapper">
                <p class="bw-title">новые товары</p>
                <div class="owl-carousel owl-theme owl-2" id="owl-2">
                    <?php
                        $select_product = mysqli_query($link, "SELECT * FROM `product` ORDER BY `id` DESC LIMIT 10");
                        $select_product = mysqli_fetch_all($select_product);

                        foreach($select_product as $sp) { ?>
                            <div class="bw-item">
                                <div class="bwi-wrapper">
                                    <div class="bwiw-img">
                                        <img src="<?php print("./" . $sp[5]); ?>">
                                    </div>
                                    <div class="bwiw-info">
                                        <p class="bwiwi-title"><?php echo $sp[2]; ?></p>
                                        <p class="bwiwi-price"><?php echo $sp[4]; ?> ₽</p>
                                        <a href="./cart-product.php?id=<?php echo $sp[0]; ?>" class="bwiwi-link">Купить в 1 клик</a>
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