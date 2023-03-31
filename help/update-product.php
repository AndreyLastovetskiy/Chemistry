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
$id_product = $_GET['id'];

$update_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `id` = '$id_product'");
$update_prod = mysqli_fetch_assoc($update_prod);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/text-field.css">
    <script src="https://cdn.tiny.cloud/1/fipw5p8ktoulbzn13x05gn3k023y7zotl1ttiifwjubct86w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Редактирование Продукта</title>
</head>
<body>
    <form action="../vendor/update-product.php" method="post" enctype="multipart/form-data" class="create-categ">
        <input type="hidden" name="id" value="<?php echo $id_product; ?>">
        <div class="text-field text-field_floating-3">
            <input class="text-field__input" type="text" id="title" name="title" placeholder="123" value="<?php echo $update_prod['title']; ?>">
            <label class="text-field__label" for="title">Название</label>
        </div>
        <textarea name="editor" id="editor"><?php echo $update_prod['descrip']; ?></textarea>
        <div class="text-field text-field_floating-3">
            <input class="text-field__input" type="text" id="price" name="price" placeholder="123" value="<?php echo $update_prod['price']; ?>">
            <label class="text-field__label" for="price">Цена</label>
        </div>
        <div class="text-field text-field_floating-2" style="margin-bottom: 40px;">
            <input type="file" id="imageproduct" name="imageproduct">
            <img src="<?php print("../" . $update_prod['imgpath']); ?>">
        </div>
        <input type="submit" class="btn-add" value="Изменить">
    </form>
    <?php
	    if (($_SESSION["errMes"] ?? '') === ''); else {
			print_r($_SESSION["errMes"]);
		}
	?>

<script>
    tinymce.init({
        selector: 'textarea#editor',  //Change this value according to your HTML
        auto_focus: 'element1',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    }); 
 
</script>
</body>
</html>