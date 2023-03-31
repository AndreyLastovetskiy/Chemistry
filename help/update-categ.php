<?php 
session_start();
if(!isset($_COOKIE["id"])) {
    $_SESSION["errMes"] = 'Вы не авторизованы, авторизуйтесь!';
    header("Location: ../login.php");
} elseif ($_COOKIE["idgroup"] != 1) {
    $_SESSION["errMes"] = 'У Вас нет права доступа на эту страницу!';
    header("Location: ../index.php");
}

require_once("../db/db.php");
$id_category = $_GET['id'];

$update_categ = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = '$id_category'");
$update_categ = mysqli_fetch_assoc($update_categ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/text-field.css">
    <title>Редактирование Категории</title>
</head>
<body>
    <form action="../vendor/update-categ.php" method="post" enctype="multipart/form-data" class="create-categ">
        <input type="hidden" name="id" value="<?php echo $id_category; ?>">
        <div class="text-field text-field_floating-3">
            <input class="text-field__input" type="text" id="title" name="title" placeholder="123" value="<?php echo $update_categ['title']; ?>">
            <label class="text-field__label" for="title">Название</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input type="file" id="imageproduct" name="imageproduct">
            <img src="<?php print("../" . $update_categ['imgpath']); ?>">
        </div>
        <input type="submit" class="btn-add" value="Изменить">
    </form>
    <?php
	    if (($_SESSION["errMes"] ?? '') === ''); else {
			print_r($_SESSION["errMes"]);
            session_destroy();
		}
	?>
</body>
</html>