<!-- /main -->

<!-- footer -->
<footer id="footer" class="mb-5">
  <div class="container">
    <div class="row wow fadeIn">

      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="row">
          <div class="col">
            <img src="<?= base_url() ?>temp/logo-footer.png" style="width:100%;height:100px" alt="">
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-3 col-lg-3">
        <h4 class="footer-title">Contact</h4>
        <div class="row">
          <div class="col">
            <ul>
              <li><a><i class="fa fa-globe"></i> <?= setting("domain") ?></a></li>
              <li><a><i class="fa fa-phone"></i> <?= setting("telepon") ?></a></li>
              <li><a><i class="fa fa-map-marker"></i> <?= setting("alamat") ?></a></li>
            </ul>
          </div>
        </div>
      </div>

      <?php
      $page = $this->db->select('id_halaman,title,slug')
        ->from('page')
        ->where('delete', '0')
        ->limit(5, 0)
        ->order_by('id_halaman', 'ASC')
        ->get();
      ?>

      <div class="col-sm-12 col-md-2 col-lg-2">
        <h4 class="footer-title">Page</h4>
        <div class="row">
          <div class="col">
            <ul>
              <?php foreach ($page->result() as $page) : ?>
                <li> <a href="<?= site_url("page/$page->slug") ?>"><?= substr($page->title, 0, 30) ?></a></li>
              <?php endforeach ?>

            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="row">
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6037031666065!2d119.46167897036132!3d-5.167275422821882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee38505a30fa7%3A0x6fba92a0a421c596!2sIDEA%20DIGITAL%20INDONESIA!5e0!3m2!1sid!2sid!4v1568342150457!5m2!1sid!2sid" frameborder="0" style="border:0;width:100%;max-height:200px;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>

    </div>


    <div class="footer-bottom">
      <div class="footer-social">
        <a href="https://www.instargam.com/ideadigitalindonesia" target="_blank" data-toggle="tooltip" title="youtube"><i class="fa fa-instagram"></i></a>
        <a href="https://facebook.com/" target="_blank" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/" target="_blank" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/" target="_blank" data-toggle="tooltip" title="youtube"><i class="fa fa-youtube"></i></a>
      </div>
      <p>Copyright &copy; <?= date("Y") ?> <a href="<?= setting("domain") ?>" target="_blank"><?= setting("title") ?></a>. All rights reserved.</p>
    </div>

  </div>
</footer>
<!-- /footer -->


<!-- plugins js -->
<script src="<?= base_url() ?>temp/front/plugins/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="<?= base_url() ?>temp/front/plugins/lightbox/lightbox.js"></script>
<script src="<?= base_url() ?>temp/front/plugins/owl-carousel/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>temp/front/plugins/wow/dist/wow.js"></script>
<script>
  wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    callback: function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  });
  wow.init();

  (function($) {
    "use strict";

    // Full Width Carousel
    $('.owl-slide').owlCarousel({
      nav: true,
      loop: true,
      autoplay: true,
      items: 1
    });

    $('.owl-carousel').owlCarousel({
      margin: 15,
      loop: true,
      dots: false,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        700: {
          items: 2
        },
        800: {
          items: 3
        },
        1000: {
          items: 4
        },
        1200: {
          items: 6
        }
      }
    });


    // lightbox
    $('[data-lightbox]').lightbox();
  })(jQuery);
</script>

<!-- theme js -->
<script src="<?= base_url() ?>temp/front/js/theme.js"></script>
</body>

</html>