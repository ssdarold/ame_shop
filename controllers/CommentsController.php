<?php
require './db_settings.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_SESSION) {
        $comment_text = $_POST['message'];
        $pictureid = $_POST['pictureid'];
        $parentid = $_POST['parentid'];
        $user_id = $_SESSION["user_id"];

        mysqli_query($db_params, "INSERT INTO `comments`(`comment_text`, `parent_id`, `UserId`, `PictureId`) VALUES ('$comment_text', $parentid, $user_id, $pictureid)");

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/login');
    }
}

?>