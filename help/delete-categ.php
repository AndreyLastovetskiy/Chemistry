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

$delete_categ = mysqli_query($link, "DELETE FROM `category` WHERE `id` = '$id_category'");
$delete_categ = mysqli_fetch_assoc($delete_categ);

header("Location: ../catalog.php");
?>