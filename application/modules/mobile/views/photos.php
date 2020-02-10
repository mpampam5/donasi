<!-- Page Content-->
<div id="content" class="snap-content">
    <div class="header">
        <a href="#" class="sidebar-deploy"><i class="fa fa-navicon"></i></a>
        <h3>PHOTOS</h3>
        <!-- <a href="contact.html" class="contact-deploy"><i class="fa fa-envelope-o"></i></a> -->
    </div>
    <div class="decoration"></div>

    <div class="content">
        <div class="container no-bottom">
            <h4>Gallery</h4>
            <p>Click to swipe gallery</p>
        </div>
        <ul class="gallery square-thumb">
            <?php foreach ($photos as $r) { ?>
                <li><a class="swipebox" href="<?= base_url() ?>temp/img_manager/media_foto/<?= $r->image ?>" title="An awesome gallery!"><img src="<?= base_url() ?>temp/img_manager/media_foto/<?= $r->image ?>" alt="img" /></a></li>
            <?php } ?>
        </ul>
        <div class="decoration"></div>
    </div>
</div>