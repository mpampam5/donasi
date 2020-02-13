  <section>
    <div class="container">
      <div class="toolbar-custom">
        <a class="btn btn-default btn-icon m-r-10 float-left hidden-xs-down" href="#" data-toggle="tooltip" title="refresh" data-placement="bottom" role="button"><i class="fa fa-refresh"></i></a>
        <div class="dropdown float-left">
          <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Platform <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item active" href="#">All Platform</a>
            <a class="dropdown-item" href="#">Playstation 4</a>
            <a class="dropdown-item" href="#">Xbox One</a>
            <a class="dropdown-item" href="#">Origin</a>
            <a class="dropdown-item" href="#">Steam</a>
          </div>
        </div>

        <div class="btn-group float-right m-l-5 hidden-xs-down" role="group">
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-th-large"></i></a>
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-bars"></i></a>
        </div>

        <div class="dropdown float-right">
          <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Date Added <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item active" href="#">Date Added</a>
            <a class="dropdown-item" href="#">Popular</a>
            <a class="dropdown-item" href="#">Newest</a>
            <a class="dropdown-item" href="#">Oldest</a>
          </div>
        </div>
      </div>
      <div class="row row-3 figure-effect">
        <?php foreach ($row as $foto) : ?>
          <div class="col-12 col-sm-6 col-md-4">
            <figure>
              <div class="figure-img">
                <a href="<?= base_url() ?>temp/img_manager/media_foto/<?= $foto->image ?>" data-fancybox="gallery">
                  <img src="<?= base_url() ?>temp/img_manager/media_foto/<?= $foto->image ?>" alt="">
                </a>
                <a class="figure-likes" href="#">576</a>
              </div>
            </figure>
          </div>
        <?php endforeach ?>

      </div>

      <div class="text-center m-t-30"><a class="btn btn-primary btn-shadow btn-rounded btn-effect btn-lg" href="#">Show More</a></div>
    </div>
  </section>

  <script src="<?= base_url() ?>temp/front/plugins/lightbox/lightbox.js"></script>
  <script>
    (function($) {
      "use strict";
      // lightbox
      $('[data-lightbox]').lightbox({
        disqus: 'gameforestyakuzieu'
      });
    })(jQuery);
  </script>
