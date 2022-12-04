<?php require 'partials/main/header.php';?>

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <? foreach ($sliders as $slide): ?>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(/img/bg-img/<? echo $slide['slider_picture']; ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms"><? echo $slide['slider_header']; ?></h2>
                                <p data-animation="bounceInDown" data-delay="500ms"><? echo $slide['slider_description']; ?></p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<? endforeach; ?>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">Все</button>
                            <? foreach ($pic_cats as $pic_cat): ?>
                            <button class="btn" data-filter=".<? echo $pic_cat['picture_category_slug']; ?>"><? echo $pic_cat['picture_category_name']; ?></button>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">

            <?php while($cat = mysqli_fetch_assoc($pics)) {
                $current_picture_id = $cat['id'];
                $categories_get = mysqli_query($db_params, "SELECT picture_category_slug FROM picture_categories JOIN picturecategoriesunion ON picture_categories.id = picturecategoriesunion.pictureCategoryId JOIN pictures ON picturecategoriesunion.pictureId = pictures.id WHERE pictures.id = '$current_picture_id'"); ?>
            
                <!-- Single Gallery Item -->
                <a href="/pictures/<? echo $cat['picture_slug']; ?>">
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item mb-30<? foreach($categories_get as $res) {
                    echo ' ' . $res['picture_category_slug'];
                } ?> wow fadeInUp" data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="/img/bg-img/<? echo $cat['picture_image']; ?>" alt="">
                        <div class="hover-content">
                        </div>
                    </div>
                </div>
                </a>
                <?php } ?>
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@Alime_photographer</p>
                    </div>
                </div>
            </div>
        </div>


<?php require 'partials/main/footer.php'; ?>