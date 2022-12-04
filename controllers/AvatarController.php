<?php
require './db_settings.php';

if($_SESSION) {
    $user_name = $_SESSION["username"];
    $file_name = $_FILES['filedata']['name'];
    $target_file = "img/bg-img/" . basename($_FILES['filedata']['name']);
    if(move_uploaded_file($_FILES["filedata"]["tmp_name"], $target_file)) {
        mysqli_query($db_params, "UPDATE `users` SET `user_avatar`= '$file_name' WHERE user_name = '$user_name'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Чето пошло не так";
    }
} else {
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/login');
}

?>