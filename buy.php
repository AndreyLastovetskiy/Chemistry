<?php
require_once("./db/db.php");
$id = $_GET['id'];
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
    <link rel="stylesheet" href="./style/text-field.css">

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
        <div class="buy">
            <div class="buy-wrapper">
                <p class="bw-title">Оформление заказа</p>
                <form action="./vendor/buy.php" id="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="text-field text-field_floating-3">
                        <input class="text-field__input" type="text" id="fio" name="fio" placeholder="123">
                        <label class="text-field__label" for="fio">ФИО</label>
                    </div>
                    <div class="text-field text-field_floating-3">
                        <input class="text-field__input" type="text" id="address" name="address" placeholder="123">
                        <label class="text-field__label" for="address">Адрес</label>
                    </div>
                    <div class="text-field text-field_floating-3">
                        <input class="text-field__input" type="text" id="phone" name="phone" placeholder="123">
                        <label class="text-field__label" for="phone">Телефон</label>
                    </div>
                    <div class="text-field text-field_floating-3">
                        <input class="text-field__input" type="email" id="email" name="email" placeholder="123">
                        <label class="text-field__label" for="email">Email</label>
                    </div>
                    <div class="form-check">
                        <div class="fc-btn">
                            <button type="submit" class="form-submit">Подтвердить заказ</button>
                        </div>
                        <div class="fc-price">
                            <p>123456 ₽</p>
                        </div>
                    </div>
                    
                </form>
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