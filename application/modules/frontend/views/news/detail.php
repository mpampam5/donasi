<section class="page-title d-flex pt-5" aria-label="Page title" style="background-image: url(<?= base_url() ?>temp/frontend/img/page-title/blog-pattern.jpg);">
      <div class="container text-left align-self-center pt-5 mt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Detail Artikel</a>
            </li>
          </ol>
        </nav>
        <!-- <h1 class="page-title-heading">Detail Artikel</h1> -->
      </div>
    </section>

    <div class="container pb-5 mb-3">
          <div class="row">
            <!-- Post Content-->
            <div class="col-lg-9 mx-auto">
              <!-- Single Post Meta-->
              <h4><?=ucfirst($news->title)?></h4>
              <div class="d-flex justify-content-between align-items-center pb-3">
                <div class="post-meta">
                  <a class="scroll-to text-sm" href="#"><i class="fe-icon-link"></i><?=$news->category?></a>
                  <span class="text-sm"><i class="fe-icon-clock"></i><?=date('d/m/Y',strtotime($news->created_at))?></span></div>
              </div>
              <hr class="mb-4">
              <!-- Carousel-->
              <?php if ($news->image!=""): ?>
                  <a href="<?=base_url("temp/img_manager/news/$news->image")?>" data-fancybox="gallery">
                    <!-- <div class="img-post"  style='background:url(<?=base_url("temp/img_manager/news/$news->image")?>);'></div> -->
                    <img src="<?=base_url("temp/img_manager/news/$news->image")?>" alt="" width="100%">
                  </a>
                <hr class="mb-4">
              <?php endif; ?>
              <div class="pb-4">
                <?=$news->description?>
              </div>


              <div class="d-sm-flex justify-content-between align-items-center border-top border-bottom mb-5 py-2">
                <div class="py-2">
                  <span class="dinline-block align-middle py-2 mr-2"><strong>Share:</strong></span>
                    <a class="social-btn sb-style-3 sb-facebook mb-0" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="socicon-facebook"></i></a>
                    <a class="social-btn sb-style-3 sb-twitter mb-0" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="socicon-twitter"></i></a>
                    <a class="social-btn sb-style-3 sb-pinterest mb-0" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="socicon-pinterest"></i></a>
                </div>
              </div>

              <!-- Entry Nanigation-->

            </div>

          </div>
        </div>
