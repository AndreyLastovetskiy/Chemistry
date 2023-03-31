<?php
session_start();
require_once("../db/db.php");

var_dump($_POST);

$usr_group = 2;
$username = $_POST['name'];
$password = $_POST['password'];
$сpassword = $_POST['cpassword'];
$email = $_POST['email'];

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

$sel_user = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$username'");
$sel_user = mysqli_fetch_assoc($sel_user);

if(empty($sel_user)) {
    if($password != $сpassword) {
        $_SESSION["errMesUp"] = 'Пароли не совпадают';
        header("Location: ../login.php#signup");
    } else {
        mysqli_query($link, "INSERT INTO `users`(`usrgroup`, `login`, `pass`, `email`) VALUES ('$usr_group','$username','$pass_hash','$email')");
        header("Location: ../login.php#signup");
    }
} else {
    $_SESSION["errMesUp"] = 'Такой пользователь уже существует';
    header("Location: ../login.php#signup");
}

?>