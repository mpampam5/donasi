<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<section class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(<?=base_url()?>temp/frontend/img/pages/help-hero-bg.jpg);position:relative">
  <div class="container text-left align-self-center">
    <h3 class="page-title-heading text-white" style="font-size:26px;position:absolute;bottom:10px;">Donatur</h3>
  </div>
</section>

<section class="container pb-5 mb-2">
      <div class="row">
        <!-- Content-->
        <div class="col-xl-12 col-lg-8">
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

          
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tanggal</th>
                          <th>Nama</th>
                          <th>Provinsi</th>
                          <th>Jumlah Donasi</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
            </div>

        </div>
      </div>
    </section>


    <script type="text/javascript">
    $(document).ready(function() {
          $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
          {
              return {
                  "iStart": oSettings._iDisplayStart,
                  "iEnd": oSettings.fnDisplayEnd(),
                  "iLength": oSettings._iDisplayLength,
                  "iTotal": oSettings.fnRecordsTotal(),
                  "iFilteredTotal": oSettings.fnRecordsDisplay(),
                  "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                  "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
              };
          };

            var t = $("#table").dataTable({
                initComplete: function() {
                    var api = this.api();
                    $('#table_filter input')
                            .off('.DT')
                            .on('keyup.DT', function(e) {
                                if (e.keyCode == 13) {
                                    api.search(this.value).draw();
                        }
                    });
                },
                oLanguage: {
                    sProcessing: "Memuat Data..."
                },
                processing: true,
                serverSide: true,
                ajax: {"url": "<?=base_url()?>donatur/json", "type": "POST"},
                columns: [
                    {
                      "data": "id_donatur",
                      "orderable": false,
                    },
                    {"data":"is_created"},
                    {"data":"nama",
                      render:function(data,type,row,meta){
                          if (row.is_anonim == 1) {
                            return "Hamba Allah";
                          }else {
                            return data;
                          }
                      }
                    },
                    {"data":"provinsi"},
                    {"data":"donasi"},
                    {"data":"is_anonim","visible":false}
                ],
                order: [[0, 'desc']],
                rowCallback: function(row, data, iDisplayIndex) {
                    var info = this.fnPagingInfo();
                    var page = info.iPage;
                    var length = info.iLength;
                    var index = page * length + (iDisplayIndex + 1);
                    $('td:eq(0)', row).html(index);
                }
            });
    });
    </script>
