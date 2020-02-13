<section class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(<?=base_url()?>temp/frontend/img/pages/help-hero-bg.jpg);position:relative">
  <div class="container text-left align-self-center">
    <h3 class="page-title-heading text-white" style="font-size:26px;position:absolute;bottom:10px;">Donasi</h3>
  </div>
</section>

<section class="container pb-5 mb-2">
      <div class="row">
        <!-- Content-->
        <div class="col-xl-8 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                  <div class="content-form">
                    <?php $bank = $this->db->get_where("bank",["is_delete"=>"0"]); ?>
                    <div class="mt-3 mb-3">
                      <div class="row">
                      <?php foreach ($bank->result() as $key): ?>
                        <div class="col-sm-6 mb-30 pb-2">
                            <div class="card border">
                              <div class="card-body">
                                <img src="<?=base_url("temp/img_manager/bank/thumbs/$key->image")?>" width="200" alt="">
                                <p class="card-text text-sm text-center">
                                  <ul style="list-style:none">
                                    <li>BANK : <?=$key->bank?></li>
                                    <li>NO.REK : <?=$key->no_rek?></li>
                                    <li>NAMA REK : <?=$key->nama_rek?></li>
                                  </ul>
                                </p>
                              </div>
                            </div>
                          </div>
                      <?php endforeach; ?>
                    </div>
                    </div>
                    <form id="form" action="<?=site_url("donasi/action")?>" autocomplete="off">

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Nama</label>
                        <div class="col-8">
                          <input class="form-control" type="text" id="nama" name="nama">
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Telepon</label>
                        <div class="col-8">
                          <input class="form-control" type="text" id="telepon" name="telepon">
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Email</label>
                        <div class="col-8">
                          <input class="form-control" type="text" id="email" name="email">
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Jumlah Donasi</label>
                        <div class="col-8">
                          <input class="form-control" type="text" id="jumlah_donasi" name="jumlah_donasi">
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Provinsi</label>
                        <div class="col-8">
                          <select class="form-control" id="provinsi" name="provinsi">
                            <option value="">-- Pilih --</option>
                            <?php $qry = $this->db->get("wil_provinsi") ?>
                            <?php foreach ($qry->result() as $row): ?>
                              <option value="<?=$row->id?>"><?=$row->name?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Pilih Sebagai Anonim</label>
                        <div class="col-8">
                          <select class="form-control" id="is_anonim" name="is_anonim">
                            <option value="">-- pilih --</option>
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row align-items-center">
                        <label class="col-4 col-form-label text-muted" for="text-input">Kirim Ke Rekening Bank</label>
                        <div class="col-8">
                          <select class="form-control" name="rekening" id="rekening" >
                            <option value="">-- pilih --</option>
                            <?php foreach ($bank->result() as $rek): ?>
                              <option value="<?=$rek->id_rek?>"><?=$rek->bank?> | <?=$rek->nama_rek?> | <?=$rek->no_rek?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>

                      <div class="text-right">
                        <button class="btn btn-primary mb-3" type="submit" id="submit" name="submit">Donasi</button>
                      </div>

                    </form>
                  </div>
                </div>
            </div>

        </div>
      </div>
    </section>



    <script type="text/javascript">
      $("#form").submit(function(e){
          e.preventDefault();
          var me = $(this);
          $("#submit").prop('disabled',true)
                      .text('Memproses...');
          $('.text-danger').remove();
                      $.ajax({
                            url             : me.attr('action'),
                            type            : 'post',
                            data            :  new FormData(this),
                            contentType     : false,
                            cache           : false,
                            dataType        : 'JSON',
                            processData     :false,
                            success:function(json){
                              if (json.success==true) {
                                $(".content-form").hide().fadeIn(500).html(json.alert);
                              }else {
                                $.each(json.alert, function(key, value) {
                                  var element = $('#' + key);
                                  $("#submit").prop('disabled',false)
                                              .text('Donasi');
                                  $(element)
                                  .closest('.form-group')
                                  .find('.text-danger').remove();
                                  $(element).after(value);
                                });
                              }
                            }
                      });
      });
    </script>
