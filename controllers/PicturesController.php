<?php 

require './db_settings.php';

if (!$second_url_part){
require 'views/pictures.php';
} else {

    // Получаем данные картины
    $single_picture = mysqli_query($db_params, "SELECT id, picture_image, picture_header, picture_description, picture_price FROM `pictures` WHERE picture_slug='$second_url_part'");
    $res = mysqli_fetch_assoc($single_picture);

    if(!$res){
        require 'views/404.php';
    }else {
        // Получаем комменты картины
    $single_picture_comments = mysqli_query($db_params, "SELECT comments.id AS comment_id, user_name, user_avatar, comment_text, parent_id, comments.createdAt AS created_date FROM comments JOIN users ON comments.UserId = users.id JOIN pictures ON comments.PictureId = pictures.id WHERE pictures.picture_slug = '$second_url_part' ORDER BY created_date DESC");

    require 'views/single_picture.php';
    }

}

?>