<?php
session_start();
require_once("../db/db.php");

$id_category = $_POST['id_category'];
$title = $_POST['title'];
$editor = $_POST['editor'];
$price = $_POST['price'];

$path = 'upload/product/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../' . $path);

$select_product = mysqli_query($link, "SELECT * FROM `product` WHERE `title` = '$title'");
$select_product = mysqli_fetch_assoc($select_product);

var_dump($select_product);

if(empty($select_product)) {
    mysqli_query($link, "INSERT INTO `product`(`idcateg`, `title`, `descrip`, `price`, `imgpath`) VALUES ('$id_category','$title','$editor','$price','$path')");
    header("Location: ../product.php?id=" . $id_category);
} else {
    $_SESSION["errMes"] = 'Такой тур уже существует!';
    header("Location: ../help/create-product.php?id=" . $id_category);
}

?>