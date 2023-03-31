<?php
session_start();
require_once("../db/db.php");

var_dump($_FILES);

$title_count = $_POST['title'];  
$path = 'upload/categ/' . time() . $_FILES['imageproduct']['name'];
move_uploaded_file($_FILES['imageproduct']['tmp_name'], '../' . $path);

$sel_count = mysqli_query($link, "SELECT * FROM `category` WHERE `title` = '$title_count'");
$sel_count = mysqli_fetch_assoc($sel_count);

if(empty($sel_count)) {
    mysqli_query($link, "INSERT INTO `category`(`title`, `imgpath`) VALUES ('$title_count', '$path')");
    header("Location: ../catalog.php");
} else {
    $_SESSION["errMes"] = 'Такая страна уже существует!';
    header("Location: ../help/create-categ.php");
}

?>