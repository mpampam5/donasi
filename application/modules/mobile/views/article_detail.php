<!-- Page Content-->
<div id="content" class="snap-content">
    <div class="header">
        <a href="#" class="sidebar-deploy"><i class="fa fa-navicon"></i></a>
        <h3>ARTICLE</h3>
        <!-- <a href="contact.html" class="contact-deploy"><i class="fa fa-envelope-o"></i></a> -->
    </div>
    <div class="decoration"></div>

    <div class="content">
        <h3><?= $data->title ?></h3>
        <?php
        if ($data->image != "") {
            $image_post = base_url("temp/img_manager/news/thumbs/" . $data->image);
        } else {
            $image_post = base_url("temp/default.png");
        }
        ?>
        <a href="<?= $image_post ?>" class="swipebox" title="<?= $data->title ?>">
            <img class="responsive-image" src="<?= $image_post ?>" alt="img">
        </a>
        <p style="margin-bottom:0px;"><i class="fa fa-calendar"></i><?= date('d/m/Y', strtotime($data->created_at)) ?></p>
        <p>
            <?= $data->description; ?>
        </p>


    </div>

</div>