<?php
session_start();
require_once("../db/db.php");

$id = $_POST['id'];
$title = $_POST['title'];
$editor = $_POST['editor'];
$price = $_POST['price'];

$path = 'upload/product/' . time() . $_FILES['imageproduct']['name'] . ".png";
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../' . $path);

$sel_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `title` = '$title'");
$sel_prod = mysqli_fetch_assoc($sel_prod);

if(!empty($_FILES['imageproduct']['name'])) {
    if(empty($sel_prod)) {
        mysqli_query($link, "UPDATE `product` SET `title`='$title',`descrip`='$editor',`price`='$price',`pathimg`='$path' WHERE `id` = '$id'");
        header("Location: ../cart-product.php?id=" . $id);
    } else {
        $_SESSION["errMes"] = 'Такой тур уже существует!';
        header("Location: ../help/create-product.php?id=" . $id);
    }
} else {
    mysqli_query($link, "UPDATE `product` SET `title`='$title',`descrip`='$editor',`price`='$price' WHERE `id` = '$id'");
    header("Location: ../cart-product.php?id=" . $id);
}


?>