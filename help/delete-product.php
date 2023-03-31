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

$select_cart = mysqli_query($link, "SELECT * FROM `product` WHERE `id` = '$id_product'");
$select_cart = mysqli_fetch_assoc($select_cart);

$delete_prod = mysqli_query($link, "DELETE FROM `product` WHERE `id` = '$id_product'");
$delete_prod = mysqli_fetch_assoc($delete_prod);

header("Location: ../product.php?id=" . $select_cart['id']);
?>