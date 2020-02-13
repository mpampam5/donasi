<section class="page-title d-flex pt-5" aria-label="Page title" style="background-image: url(<?= base_url() ?>temp/frontend/img/page-title/blog-pattern.jpg);">
      <div class="container text-left align-self-center pt-5 mt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Galery</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Video</a>
            </li>
          </ol>
        </nav>
        <!-- <h1 class="page-title-heading">Detail Artikel</h1> -->
      </div>
    </section>

<div class="container pb-5">
      <div class="row">
        <!-- Project Gallery-->
        <div class="col-lg-8 mb-3 mx-auto">
          <div class="row">
            <?php foreach ($row as $video) : ?>
              <?php $image_yt = explode("=",$video->url) ?>
            <div class="col-sm-4 foto-gallery">
              <a class="gallery-item type-video mb-30" href="<?=$video->url?>&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-fancybox="sideGallery" data-options="{&quot;caption&quot;: &quot;<?= $video->judul ?>&quot;}">
                <div class="foto-content" style="background-image:url('http://i3.ytimg.com/vi/<?=$image_yt[1]?>/hqdefault.jpg')"></div>
              </a>
            </div>
            <?php endforeach ?>
          </div>
        </div>
        <!-- Project Details-->

      </div>
      <!-- Project Share-->

    </div>
