<!-- Page Content-->
<div id="content" class="snap-content">
    <div class="header">
        <a href="#" class="sidebar-deploy"><i class="fa fa-navicon"></i></a>
        <h3>VIDEOS</h3>
        <!-- <a href="contact.html" class="contact-deploy"><i class="fa fa-envelope-o"></i></a> -->
    </div>

    <div class="decoration"></div>

    <div class="content">
        <div class="container no-bottom">
            <h3>Video Page</h3>
        </div>

        <div class="decoration"></div>

        <?php foreach ($videos as $r) { ?>
            <div>
                <iframe class="responsive-video" src="<?= $r->url ?>"></iframe>
                <h4><?= $r->judul ?></h4>
                <p><?= $r->keterangan ?></p>
            </div>
            <div class="decoration"></div>

        <?php } ?>
    </div>

</div>