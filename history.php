<?php
require_once("./db/db.php");
$iduser = $_COOKIE['id'];
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
    <link rel="stylesheet" href="./style/table.css">

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
        <div class="history">
            <div class="history-wrapper">
                <div class="hw-title">
                    <p>Ваши Заказы</p>
                </div>
                <section>
                  <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <thead>
                        <tr>
                          <th>ФИО</th>
                          <th>Адрес</th>
                          <th>Телефон</th>
                          <th>Почта</th>
                          <th>Товар</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <?php
                          $sel_history = mysqli_query($link, "SELECT * FROM `history` WHERE `iduser` = '$iduser'");
                          $sel_history = mysqli_fetch_all($sel_history);

                          foreach($sel_history as $sh) { 
                            $idprod = $sh[2];
                            $sel_hisprod = mysqli_query($link, "SELECT `title` FROM `product` WHERE `id` = '$idprod'");
                            $sel_hisprod = mysqli_fetch_assoc($sel_hisprod);
                            ?>
                            <tr>
                              <td><?php echo $sh[3]; ?></td>
                              <td><?php echo $sh[4]; ?> </td>
                              <td><?php echo $sh[5]; ?></td>
                              <td><?php echo $sh[6]; ?></td>
                              <td><?php echo $sel_hisprod['title']; ?></td>
                            </tr>
                          <?php }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </section>
            </div>
        </div>
    </main>
    <?php
    require_once("./models/footer.php");
    require_once("./models/mobile.php");
    ?>
    <script src="./js/table.js"></script>
    <script src="./js/hamburger.js"></script>
    <script src="./js/owl.js"></script>
</body>
</html>