<?php

session_destroy();
header('Location: http://'.$_SERVER['HTTP_HOST'].'/login');

?>