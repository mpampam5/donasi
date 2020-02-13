

  <section class="breadcrumbs">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="">Home</a></li>
      </ol>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mx-auto">
          <div class="card">
            <div class="card-body">
              <form id="form" action="<?=site_url("backend/home/action")?>" autocomplete="off">
                <div class="form-group">
                  <label for="">Jumlah Donatur (Orang)</label>
                  <input type="text" class="form-control" id="jumlah_donatur" name="jumlah_donatur" value="<?=donasi("jumlah_donatur")?>">
                </div>

                <div class="form-group">
                  <label for="">Jumlah Donasi (Rp)</label>
                  <input type="text" class="form-control" id="jumlah_donasi" name="jumlah_donasi" value="<?=donasi("jumlah_donasi")?>">
                </div>

                <div class="form-group">
                  <label for="">Jumlah Donasi Tersalurkan (Rp)</label>
                  <input type="text" class="form-control" id="jumlah_donasi_tersalurkan" name="jumlah_donasi_tersalurkan" value="<?=donasi("jumlah_donasi_tersalurkan")?>">
                </div>

                <button type="submit" id="submit" class="btn btn-primary btn-sm btn-block" name="submit">Simpan Perubahan</button>
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
                                $('#alert').hide().fadeIn(200).html(json.alert);
                                $('.form-group').removeClass('.has-error')
                                                .removeClass('.has');
                                  $('.alert').delay(1000).show(10, function(){
                                    $('.alert').fadeOut(200, function(){
                                      $('.alert').remove();
                                      location.href="<?=site_url('backend/home')?>";
                                    });
                                  })
                            }else {
                              $.each(json.alert, function(key, value) {
                                var element = $('#' + key);
                                $("#submit").prop('disabled',false)
                                            .text('Simpan Perubahan');
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
