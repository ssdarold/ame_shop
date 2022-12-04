<?php 

require './db_settings.php';

// Получаем слайды
$sliders = mysqli_query($db_params, 'SELECT slider_picture, slider_header, slider_description FROM sliders');

// Получаем категории картин
$pic_cats = mysqli_query($db_params, 'SELECT picture_category_name, picture_category_slug FROM picture_categories');

// Получаем картины


$pics = mysqli_query($db_params, 'SELECT id, picture_image, picture_slug FROM pictures');


require 'views/main.php';

?>