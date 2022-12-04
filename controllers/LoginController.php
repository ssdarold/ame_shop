<?php 

require './db_settings.php';

if($_SESSION){

    header('Location: http://'.$_SERVER['HTTP_HOST'].'/users/'.$_SESSION["user_id"]);
} else {
    switch($_SERVER["REQUEST_METHOD"]) {
        case "GET":
            require './views/login.php';
            break;
        case "POST":
            // Начинаем валидировать
            $username = $_POST['username'];
            $password = $_POST['password'];
            $check_login = mysqli_query($db_params, "SELECT id, user_name, user_password FROM users WHERE user_name = '$username'");
            $user_info = mysqli_fetch_assoc($check_login);
            $row_cnt = mysqli_num_rows($check_login);
            if ($row_cnt >= 1) {
                if(password_verify($password, $user_info['user_password'])){
                    $_SESSION["username"] = $user_info['user_name'];
                    $_SESSION["user_id"] = $user_info['id'];
                    header('Location: http://'.$_SERVER['HTTP_HOST'].'/users/'.$user_info['id']);
                } else {
                    $error_msg = "Неправильный пароль";
                    require './views/login.php';
                }
            } else {
                $error_msg = "Пользователь с таким логином не найден";
                require './views/login.php';
            }
            break;
    }
}

?>