<section class="page-title d-flex pt-5" aria-label="Page title" style="background-image: url(<?= base_url() ?>temp/frontend/img/page-title/blog-pattern.jpg);">
      <div class="container text-left align-self-center pt-5 mt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Artikel</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">Artikel</h1>
      </div>
    </section>

<section class="container pb-5 mb-3">

    <div class="row">
      <div class="col-lg-9 m-t-20">
        <!-- post -->
        <div id="content-post" class="widget widget-featured-posts"></div>


        <div class="pagination-results mt-5">
          <nav class="pagination justify-content-center" id="navigation"></nav>
        </div>

      </div>




      <!-- sidebar -->
      <div class="col-lg-3 m-t-20">
        <div class="sidebar">



          <!-- widget tags -->
          <div class="widget widget-tags">
            <h5 class="widget-title">Category</h5>
            <div class="post-tags">
              <?php foreach ($cat as $cats) : ?>
                <a href="#" class="tag-link"><?= $cats->category ?></a>
              <?php endforeach; ?>
            </div>
          </div>


          <!-- widget_video -->

          <?= widget_video("Video", 1) ?>

        </div>
      </div>
    </div>

</section>


<script type="text/javascript">
  $(document).ready(function() {

    function load_data(page) {
      $.ajax({
        url: "<?php echo base_url(); ?>news/page/" + page,
        method: "GET",
        dataType: "json",
        success: function(data) {
          $('#navigation ul li a').addClass('page-link');
          $('#content-post').hide().fadeIn(300).html(data.data);
          $('#navigation').hide().fadeIn(300).html(data.pagination_link);
        }
      });
    }

    load_data(1);

    $(document).on("click", ".pagination li a", function(event) {
      event.preventDefault();
      var page = $(this).data("ci-pagination-page");
      load_data(page);
    });

  });
</script>
