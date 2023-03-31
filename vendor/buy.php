<?php
require_once("../db/db.php");
$id_user = $_COOKIE['id'];
$id_prod = $_POST['id'];
$fio = $_POST['fio'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mysqli_query($link, "INSERT INTO `history`(`iduser`, `id_prod`, `fio`, `address`, `phone`, `email`) VALUES ('$id_user','$id_prod','$fio','$address','$phone','$email')");
header("Location: ../index.php");
?>