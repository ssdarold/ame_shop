<?php

$url = $_GET['q'];
$urls_arr = explode('/', $url);

$first_url_part = $urls_arr[0];
$second_url_part = $urls_arr[1];


switch($first_url_part) {
    case '':
        require 'controllers/MainController.php';
        break;
    case 'about':
        require 'controllers/AboutController.php';
        break;    
    case 'contacts':
        require 'controllers/ContactController.php';
        break;
    case 'pictures':
        require 'controllers/PicturesController.php';
        break;
    case 'cards':
        require 'controllers/CardsController.php';
        break;
    case 'login':
        require 'controllers/LoginController.php';
        break;
    case 'logout':
        require 'controllers/LogoutController.php';
        break;
    case 'register':
        require 'controllers/RegisterController.php';
        break;
    case 'users':
        require 'controllers/UserController.php';
        break;
    case 'changeavatar':
        require 'controllers/AvatarController.php';
        break;
    case 'comments':
        require 'controllers/CommentsController.php';
        break;
    case 'admin':
        require 'admin_page.php';
        break;
    default:
        require 'views/404.php';
        break;
}

?>