<section class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(<?=base_url()?>temp/frontend/img/pages/help-hero-bg.jpg);position:relative">
  <div class="container text-left align-self-center">
    <h3 class="page-title-heading text-white" style="font-size:26px;position:absolute;bottom:10px;"><?= $row->title ?></h3>
  </div>
</section>

<section class="container pb-5 mb-2">
      <div class="row">
        <!-- Content-->
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                  <?= $row->deskripsi ?>
                </div>
            </div>

        </div>
      </div>
    </section>
