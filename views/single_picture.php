<?php require 'partials/main/header.php';?>

<div class="about-us-area section-padding-80-0 clearfix">
        <div class="container mt-3">
            <ol class="breadcrumb justify-content-center" id="breadcrumbs_for_page">
                                <li class="breadcrumb-item"><a href="/"><i class="icon_house_alt"></i> Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="/pictures">Картины</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $res['picture_header'];  ?></li>
                            </ol>
            <div class="row align-items-center mt-3" id="single_picture_container">
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <img src="/img/bg-img/<?php echo $res['picture_image'];  ?>" alt="">
                        
                    </div>
                </div><div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"><?php echo $res['picture_header'];  ?></h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;"><?php echo $res['picture_description'];  ?></p>
                        <p class="picture_price"><?php echo $res['picture_price'];  ?>₽</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">Купить сейчас</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="comment-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Comments Area -->
                    <div class="comment_area clearfix">
                        <h4 id="comment_count" class="mb-30"></h4>

                        <ol>
                            <?php while($comm = mysqli_fetch_assoc($single_picture_comments)) { ?>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area" id="<?php echo $comm['comment_id'] ?>" data-parent="<?php echo $comm['parent_id'] ?>">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="/img/bg-img/<?php echo $comm['user_avatar'] ?>" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date comment_date"><?php echo $comm['created_date'] ?></a>
                                        <h5><?php echo $comm['user_name'] ?></h5>
                                        <p><?php echo $comm['comment_text'] ?></p>
                                        <?php if($_SESSION) { ?>
                                        <a data-toggle="collapse" href="#replyform<?php echo $comm['comment_id'] ?>" role="button" aria-expanded="false" aria-controls="replyform<?php echo $comm['comment_id'] ?>" class="reply" style="font-size: 10px;">Ответить</a>
                                         <form action="/comments" method="post" id="replyform<?php echo $comm['comment_id'] ?>" class="mt-3 collapse">
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Ваш ответ"></textarea>
                                    <input type="hidden" name="pictureid" value="<?php echo $res['id']; ?>">
                                    <input type="hidden" name="parentid" value="<?php echo $comm['comment_id'] ?>">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alime-btn btn-2 mt-15">Отправить</button>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                                    </div>
                                </div>

                                <ol class="children">
                                   
                                </ol>
                            </li>
                            <?php } ?>
                           
                        </ol>
                    </div>
                        
                    <?php if($_SESSION) { ?>
                    <!-- Leave A Reply -->
                    <div class="alime-contact-form mt-50" id="leave_comment">
                        <h4 class="mb-30">Оставьте свой комментарий</h4>
                        <p>От: <b><?php echo $_SESSION['username'] ?></b></p>

                        <!-- Form -->
                        <form action="/comments" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Ваше сообщение"></textarea>
                                    <input type="hidden" name="pictureid" value="<?php echo $res['id']; ?>">
                                    <input type="hidden" name="parentid" value="0">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn alime-btn btn-2 mt-15">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <?php } else { ?>
                    
                    <div class="alime-contact-form mt-50">
                        <h5 class="text-center">Оставлять комментарии могут только зарегистрированные пользователи</h5>
                        <p class="text-center"><a href="/register?commentpicture={{single_picture.dataValues.picture_slug}}" style="text-decoration: underline;">Зарегистрироваться</a> или <a href="/login?commentpicture={{single_picture.dataValues.picture_slug}}" style="text-decoration: underline;">Войти</a></p>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

<script src="/js/comment-script.js"></script>
<!-- <script src="/js/date_script.js"></script> -->

<?php require 'partials/main/footer.php'; ?>