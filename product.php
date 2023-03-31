<?php
require_once("./db/db.php");
$id_category = $_GET['id'];

$select_categ = mysqli_query($link, "SELECT `title` FROM `category` WHERE `id` = '$id_category'");
$select_categ = mysqli_fetch_assoc($select_categ);

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
        <div class="category">
            <div class="category-wrapper">
                <div class="cw-main">
                    <p class="cw-title">Категория "<?php echo $select_categ['title']; ?>"</p>
                    <?php 
                    if (($_COOKIE["idgroup"] ?? '') === ''); else {
                        if($_COOKIE["idgroup"] == 1) { ?>
                            <a href="./help/create-product.php?id=<?php echo $id_category; ?>"><i class="fa-regular fa-square-plus fa-2xl"></i></a>
                            <a href="./help/update-categ.php?id=<?php echo $id_category; ?>"><i class="fa-solid fa-pen-to-square fa-2xl"></i></a>
                            <a href="./help/delete-categ.php?id=<?php echo $id_category; ?>"><i class="fa-solid fa-trash-can fa-2xl"></i></a>
                        <?php } 
                    } ?>
                </div>
                
                <div class="cw-carts">
                    <?php 
                        $select_product = mysqli_query($link, "SELECT * FROM `product` WHERE `idcateg` = '$id_category' ORDER BY `id` DESC");
                        $select_product = mysqli_fetch_all($select_product);

                        foreach($select_product as $sp) { ?>
                            <div class="cwc-cart">
                                <div class="cwcc-wrapper">
                                    <div class="cwcc-img">
                                        <img src="<?php print("./" . $sp[5]); ?>">
                                    </div>
                                    <div class="cwcc-info">
                                        <p><?php echo $sp[2]; ?></p>
                                        <a href="./cart-product.php?id=<?php echo $sp[0]; ?>">Подробнее <img src="./img/svg/arrow-right.svg"></a>
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