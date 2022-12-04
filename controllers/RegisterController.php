<?php 

require './db_settings.php';

if($_SESSION){

    header('Location: http://'.$_SERVER['HTTP_HOST'].'/users/'.$_SESSION["user_id"]);
} else {

    switch($_SERVER["REQUEST_METHOD"]) {
        case "GET":
            require './views/register.php';
            break;
        case "POST":
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $check_user_query = mysqli_query($db_params, "SELECT user_name FROM users WHERE user_name = '$username'");
            $user_count = mysqli_num_rows($check_user_query);
            if($user_count < 1){
                $add_user = mysqli_query($db_params, "INSERT INTO `users`(`user_name`, `user_password`, `user_role`) VALUES ('$username', '$password', 2)");
                $user_query = mysqli_query($db_params, "SELECT id, user_name, user_password FROM users WHERE user_name = '$username'");
                $get_user_info = mysqli_fetch_assoc($user_query);
                $_SESSION["username"] = $get_user_info['user_name'];
                $_SESSION["user_id"] = $get_user_info['id'];
                header('Location: http://'.$_SERVER['HTTP_HOST'].'/users/'.$get_user_info['id']);
            } else {
                $error_msg = "Пользователь с таким именем уже существует";
                require './views/register.php';
            }
            break;
    }
}

?>