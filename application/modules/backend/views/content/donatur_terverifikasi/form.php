<section class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('backend')?>">Home</a></li>
      <li><a href="<?=site_url('backend/donatur_menunggu_verifikasi')?>"><?=ucfirst($temp_title)?></a></li>
      <li class="active"><?=ucfirst($button)?></li>
    </ol>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
              <h5 class="card-title"><?=ucfirst($button)?> <?=ucfirst($temp_title)?></h5>
            </div>
            <form action="<?=$action?>" id="form" autocomplete="off">
              <div class="card-block">
                  <div class="row">

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?=$nama?>">
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="<?=$telepon?>">
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?=$email?>">
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" id="provinsi" name="provinsi">
                              <?php $wil_provinsi =  $this->db->get("wil_provinsi"); ?>
                              <?php foreach ($wil_provinsi->result() as $prov): ?>
                                <option <?=($prov->id==$provinsi) ? "selected":""?> value="<?=$prov->id?>"><?=$prov->name?></option>
                              <?php endforeach; ?>
                            </select>
                            <!-- <input type="text"  placeholder="Provinsi" value="<?=$provinsi?>"> -->
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Donasi</label>
                            <input type="text" class="form-control" id="donasi" name="donasi" placeholder="Donasi" value="<?=$donasi?>">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Bank</label>
                            <select class="form-control" id="id_bank" name="id_bank">
                              <?php $bank =  $this->db->get_where("bank",["is_delete"=>"0"]); ?>
                              <?php foreach ($bank->result() as $provs): ?>
                                <option <?=($provs->id_rek==$id_bank) ? "selected":""?> value="<?=$provs->id_rek?>"><?=$provs->bank?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="<?=$image?>">
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="3" cols="80"><?=$keterangan?></textarea>
                          </div>
                        </div>

												<div class="col-md-12">
                          <div class="form-group">
                            <label>Tampilkan Sebagai Anonim</label>
                            <select class="form-control" id="is_anonim" name="is_anonim">
                              <option <?=($is_anonim=="0") ? "selected":""?> value="0">Tidak</option>
                              <option <?=($is_anonim=="1") ? "selected":""?> value="1">Ya</option>
                            </select>
                          </div>
                        </div>


                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Verifikasi</label>
                            <select class="form-control" id="is_verifikasi" name="is_verifikasi">
                              <option <?=($is_verifikasi=="0") ? "selected":""?> value="0">Tidak</option>
                              <option <?=($is_verifikasi=="1") ? "selected":""?> value="1">Ya</option>
                            </select>
                          </div>
                        </div>


                  </div>
              </div>
            <div class="card-footer">
              <a href="<?=site_url("backend")?>" class="btn btn-sm btn-info"><i class="fa fa-home"></i></a>
              <a href="<?=site_url('backend/'.$this->uri->segment(2))?>"  class="btn btn-sm btn-default"> kembali</a>
              <?php if ($button=="edit"): ?>
                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm pull-right"> Edit</button>
                <?php else: ?>
                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-sm pull-right"> Tambahkan Donatur</button>
              <?php endif; ?>
            </div>
          </form>

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
      $('.form-control').prop('readonly', true);
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
                              $('#alert').hide().fadeIn(500).html(json.alert);
                              $('.form-group').removeClass('.has-error')
                                              .removeClass('.has');
                                $('.alert').delay(2000).show(10, function(){
                                  $('.alert').fadeOut(500, function(){
                                    $('.alert').remove();
                                    location.href="<?=site_url('backend/'.$this->uri->segment(2))?>";
                                  });
                                })
                          }else {
                            $.each(json.alert, function(key, value) {
                              var element = $('#' + key);
                              $("#submit").prop('disabled',false)
                                          .text('<?=ucfirst($button)?>');
                              $('.form-control').prop('readonly', false);
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
