
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-center bg-no-repeat py-5 mt-lg-5" style="background-image: url(<?=base_url()?>temp/frontend/img/hero-bg.png);">
      <div class="row no-gutters pt-lg-5 mt-lg-5">
        <div class="col-xl-7 col-lg-8"><img class="d-block" src="<?=base_url()?>temp/frontend/img/hero-img.png" alt="Hero Image"></div>
        <div class="col-lg-4 pt-xl-5">
          <div class="px-3 px-lg-0 text-center text-lg-left">
            <h1 class="pt-md-5 pb-md-4 pt-3 pb-3 pt-md-0 pb-md-5">Tahfidz <br>Al-Quran</h1><a class="scroll-to btn btn-style-4 btn-gradient btn-icon-right btn-lg" href="<?=site_url("donasi")?>">Donasi<i class="fe-icon-arrow-down"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Statistics-->
    <section class="bg-white container-fluid border-top">
      <div class="row">
        <div class="col-md-4 col-sm-6 border-right py-5 border-bottom">
          <div class="animated-digits mx-auto text-center" data-number="<?=donasi("jumlah_donatur")?>">
            <h5 class="animated-digits-digit" style="font-size:22px"><span><?=donasi("jumlah_donatur")?></span> Orang</h5>
            <p class="animated-digits-text">Total Donatur</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 py-5 border-right border-bottom">
          <div class="animated-digits mx-auto text-center" >
            <h5 class="animated-digits-digit" style="font-size:22px">Rp.<span><?=format_rupiah(donasi("jumlah_donasi"))?></span></h5>
            <p class="animated-digits-text">Jumlah Donasi</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 py-5 border-right border-bottom">
          <div class="animated-digits mx-auto text-center">
            <h5 class="animated-digits-digit" style="font-size:22px">Rp.<span><?=format_rupiah(donasi("jumlah_donasi_tersalurkan"))?></span></h5>
            <p class="animated-digits-text">Donasi Tersalurkan</p>
          </div>
        </div>
      </div>
    </section>




    <section class="container pb-4 mb-5 pt-5">
      <div class="row">
        <!-- Top Sellers-->
        <div class="col-md-6 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">Donatur</h3>
            <?php foreach ($donatur as $donaturs): ?>
              <?php $nama = $donaturs->nama; ?>
              <a class="featured-product">
                <div class="featured-product-thumb">
                  <img src="<?=img_alpha($nama)?>" alt="Product Image">
                </div>
                <div class="featured-product-info">
                  <h5 class="featured-product-title"><?=($donaturs->is_anonim=="1")?"Hamba Allah":"$nama"?></h5>
                  <span class="featured-product-price">
                    &nbsp;<?=$donaturs->name?>
                  </span>
                  <span class="featured-product-price">
                    &nbsp;Rp.<?=format_rupiah($donaturs->donasi)?>
                  </span>
                </div>
              </a>
            <?php endforeach; ?>

          </div>
        </div>



        <div class="col-md-6 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">Donasi Ke</h3>
            <div class="row">
              <?php $bank = $this->db->get_where("bank",["is_delete"=>"0"]); ?>
              <?php foreach ($bank->result() as $key): ?>
                <div class="col-sm-6 mb-30 pb-2">
                    <div class="card border">
                      <div class="card-body">
                        <img src="<?=base_url("temp/img_manager/bank/thumbs/$key->image")?>" width="200" alt="">
                        <p class="card-text text-sm text-center">
                          <ul style="list-style:none">
                            <li>BANK : <?=strtoupper($key->bank)?></li>
                            <li>NO.REK : <?=$key->no_rek?></li>
                            <li>NAMA REK : <?=strtoupper($key->nama_rek)?></li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  </div>
              <?php endforeach; ?>
            </div>


          </div>
        </div>
      </div>

    </section>


    <section class="bg-center-top bg-no-repeat bg-cover pb-4 mb-5" style="background-image: url(<?=base_url()?>temp/frontend/img/homepages/mobile-app-showcase/cta-bg.jpg);">
      <div class="container py-5 text-center">
        <div class="row justify-content-center pt-3">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <p class="text-white opacity-20" style="font-size:18px;">
              Muliakan Hafidz Quran adalah program pemberian beasiswa kepada santri penghafal Al-Quran yang ada di Pondok Pesantren/Rumah Tahfidz . Santri penghafal Al-Quran mendapat pendampingan dan pembinaan langsung dari da’i atau guru mengaji yang sudah terjamin kualitas pengajarannya.
            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="container pb-4 mb-2">
      <div class="row">
        <!-- Top Sellers-->
        <div class="col-md-5 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">Foto Terbaru</h3>
            <div class="d-flex justify-content-between mb-3">
              <?php foreach ($foto as $fotos): ?>
                <a class="gallery-item mb-2 mr-2" href="<?=base_url()?>temp/img_manager/media_foto/<?=$fotos->image?>" data-fancybox="gallery1" data-options="{&quot;caption&quot;: &quot;<?=$fotos->image_name?>&quot;}">
                  <img src="<?=base_url()?>temp/img_manager/media_foto/thumbs/<?=$fotos->image?>" alt="Gallery Image" style="height:100%">
                </a>
              <?php endforeach; ?>

            </div>

            <h3 class="widget-title">Video Terbaru</h3>
            <div class="d-flex justify-content-between">
              <?php foreach ($video as $videos): ?>
                <?php $image_yt = explode("=",$videos->url) ?>
                <a class="gallery-item type-video mb-2" href="<?=$videos->url?>&amp;amp;autoplay=1&amp;amp;rel=0&amp;amp;controls=0&amp;amp;showinfo=0" data-options="{&quot;caption&quot;: &quot;<?=$videos->judul?>&quot;}" data-fancybox="single" data-width="1000" data-height="563">
                  <img src="http://i3.ytimg.com/vi/<?=$image_yt[1]?>/hqdefault.jpg" alt="Gallery Image">
                </a>
              <?php endforeach; ?>

            </div>

          </div>
        </div>


        <div class="col-md-7 col-sm-6">
          <div class="widget widget-featured-posts">
              <h4 class="widget-title">Artikel Terbaru</h4>
              <?php foreach ($news as $artikel): ?>
                <a class="featured-post" href="<?=site_url("news/detail/".$artikel->id_news."/".$artikel->slug)?>">
                  <div class="featured-post-thumb">
                    <?php if ($artikel->image==""): ?>
                      <img src="<?=base_url()?>temp/img_manager/default.png" alt="Post Thumbnail">
                      <?php else: ?>
                        <img src="<?=base_url()?>temp/img_manager/news/thumbs/<?=$artikel->image?>" alt="Post Thumbnail">
                    <?php endif; ?>
                  </div>
                  <div class="featured-post-info">
                    <div class="featured-post-meta">
                      <span class="text-primary opacity-70"><i class="fe-icon-clock"></i><?=date("d/m/Y",strtotime($artikel->created_at))?></span>
                      <span class="ml-3"><i class="fe-icon-link"></i><?=$artikel->category?></span>
                    </div>
                    <div class="featured-post-title"><?=ucfirst($artikel->title)?>.</div>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>


            <div class="text-center">
              <?php $cat = $this->db->get_where("category",["delete"=>"0"]) ?>
              <?php foreach ($cat->result() as $category): ?>
                <a class="tag-link" href="#"><?=$category->category?></a>
              <?php endforeach; ?>
              </div>
            </div>

        </div>

      </div>
    </section>
