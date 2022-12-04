<?php
require './db_settings.php';

if(!$_SESSION){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/login');
} else {
        $get_user_info = mysqli_query($db_params, "SELECT user_name, id, user_avatar FROM `users` WHERE id = '$second_url_part'");
        $single_user_info = mysqli_fetch_assoc($get_user_info);
        if($_SESSION["user_id"] == $single_user_info['id']){
            require './views/single_user.php';
        } else {
            require './views/forbidden.php';
        }
    }

?>