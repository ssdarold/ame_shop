<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="http://ame/">
    <!-- Title -->
    <title>Alime - Photography HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/style.css">

</head>

<body>
 <!-- Preloader -->
 <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="ame-link"><a href="/">Главная</a></li>
                                    <li class="ame-link"><a href="/about">Об авторе</a></li>
                                    <li class="ame-link"><a href="/pictures">Картины</a></li>
                                    <li class="ame-link"><a href="/cards">Открытки</a></li>
                                    <li class="ame-link"><a href="/contacts">Контакты</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                                <?php if($_SESSION) { ?>
                                    <a class="active_user" href="/users/<?php echo $_SESSION['user_id']; ?>"><?php echo $_SESSION['username']; ?></a>
                                <?php } else { ?>
                                <a class="search-icon" style="margin-left: 30px;" href="/login" title="Войти в личный кабинет"><i class="icon_house" style="color: white; font-size: 18px;"></i></a>
                                <?php } ?>
                                </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->