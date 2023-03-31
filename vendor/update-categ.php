<?php
session_start();
require_once("../db/db.php");

$id = $_POST['id'];
$title = $_POST['title'];

$path = 'upload/categ/' . time() . $_FILES['imageproduct']['name'] . ".png";
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../' . $path);

$sel_category = mysqli_query($link, "SELECT * FROM `category` WHERE `title` = '$title'");
$sel_category = mysqli_fetch_assoc($sel_category);

if(!empty($_FILES['imageproduct']['name'])) {
    if(empty($sel_category)) {
        mysqli_query($link, "UPDATE `category` SET `title`='$title',`pathimg`='$path' WHERE `id` = '$id'");
        header("Location: ../catalog.php");
    } else {
        $_SESSION["errMes"] = 'Такая категория уже существует уже существует!';
        header("Location: ../help/update-categ.php?id=" . $sel_category['id']);
    }
} else {
    mysqli_query($link, "UPDATE `category` SET `title`='$title' WHERE `id` = '$id'");
    header("Location: ../catalog.php");
}


?>