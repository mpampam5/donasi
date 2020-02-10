  <section>
    <div class="container">

      <div class="row row-5">
        <?php foreach ($row as $video) : ?>
          <?php $gambar = str_replace("https://www.youtube.com/watch?v=", "", $video->url); ?>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="card card-video">
              <div class="card-img">
                <a href="<?= $video->url ?>" data-fancybox="gallery">
                  <img src="https://img.youtube.com/vi/<?= $gambar ?>/maxresdefault.jpg">
                </a>
                <!-- <div class="card-meta">
                <span>4:32</span>
              </div> -->
              </div>
              <div class="card-block">
                <h4 class="card-title"><a href="<?= $video->url ?>"><?= $video->judul ?></a></h4>
                <div class="card-meta">
                  <!-- span><i class="fa fa-clock-o"></i> 2 hours ago</span>
                <span>423 views</span> -->
                </div>
                <!-- <p><?= $video->keterangan ?></p> -->
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>

      <!--  <div class="pagination-results m-t-10">
        <span>Showing 10 to 20 of 48 videos</span>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="separate"><span>...</span></li>
            <li class="page-item"><a class="page-link" href="#">25</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
          </ul>
        </nav>
      </div> -->
    </div>
  </section>


  <script type="text/javascript">
    $("a.more").fancybox({
      'titleShow': false,
      'transitionIn': 'elastic',
      'transitionOut': 'elastic'
    });
  </script>