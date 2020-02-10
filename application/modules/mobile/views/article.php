<!-- Page Content-->
<div id="content" class="snap-content">
    <div class="header">
        <a href="#" class="sidebar-deploy"><i class="fa fa-navicon"></i></a>
        <h3>ARTICLE</h3>
        <!-- <a href="contact.html" class="contact-deploy"><i class="fa fa-envelope-o"></i></a> -->
    </div>

    <div class="decoration"></div>

    <div class="content">
        <div class="blog-posts">
            <?php foreach ($news as $r) {
                if ($r->image != "") {
                    $image_post = base_url("temp/img_manager/news/thumbs/$r->image");
                } else {
                    $image_post = base_url("temp/default.png");
                }
            ?>
                <div class="blog-post">
                    <a class="blog-post-image" href="#"><img src="<?= $image_post ?>" alt="img"></a>
                    <h3 class="blog-post-title"><?= $r->title; ?></h3>
                    <p class="blog-post-text">
                        <?= substr($r->description, 0, 200); ?>...
                    </p>
                    <p class="blog-post-date"><i class="fa fa-calendar"></i><?= date('d/m/Y', strtotime($r->created_at)) ?></p>
                    <p class="blog-post-more"><a href="<?= base_url() ?>mobile/detail/<?= $r->slug ?>">Read More<i class="fa fa-angle-right"></i></a></p>
                </div>
                <div class="decoration"></div>
            <?php } ?>
        </div>
        <div class="blog-sidebar">
            <!-- <div class="decoration hide-if-responsive"></div> -->
            <div class="widget container">
                <h4>Looking for something?</h4>
                <p>
                    An input field you can connect to your needs and use as a search field.
                </p>
                <input class="blog-search" type="text" value="Search here...">
            </div>
            <div class="decoration"></div>
            <div class="widget container">
                <h4>Recent Works</h4>
                <p>
                    You can link this to be a gallery or link it to act like a normal anchor
                    to redirect your users to the specific post you want.
                </p>
                <ul class="gallery square-thumb blog-gallery">
                    <li><a href="#"><img src="images/pictures/1s.jpg" alt="img" /></a></li>
                    <li><a href="#"><img src="images/pictures/2s.jpg" alt="img" /></a></li>
                    <li><a href="#"><img src="images/pictures/3s.jpg" alt="img" /></a></li>
                    <li><a href="#"><img src="images/pictures/4s.jpg" alt="img" /></a></li>
                </ul>
            </div>
            <div class="widget container">
                <h4>Categories</h4>
                <p>
                    Your categories styled up to look nice and clean!
                </p>
                <div class="one-half">
                    <ul class="blog-category">
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 1</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 2</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 4</a></li>
                    </ul>
                </div>
                <div class="one-half last-column">
                    <ul class="blog-category">
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 1</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 2</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Category 4</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="decoration"></div>
    </div>
    <!-- Page Footer-->
    <div class="footer">
        <p class="center-text">Copyright 2015. All rights reserved.</p>
        <div class="footer-socials half-bottom">
            <a href="#" class="footer-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="footer-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="footer-google"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="footer-share show-share-bottom"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="footer-up"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>

</div>