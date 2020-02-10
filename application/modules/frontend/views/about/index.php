<section class="hero hero-game" style="background-image: url('<?= base_url() ?>temp/front/banner-news.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="hero-block text-center">
      <div class="hero-center">
        <h2 class="hero-title">ABOUT</h2>
      </div>
    </div>
  </div>
</section>

<section class="wow fadeIn">
  <div class="container">
    <div class="heading-home">
      <i class="fa fa-question"></i>
      <h2>Who We Are?</h2>
      <h4>Professional Web Designer & Web Developer,</h4>
      <h4>IT Solution & IT Support</h4>
      <p>
        <b>IDEA DIGITAL INDONESIA</b> merupakan Perusahaan IT yang berfokus pada layanan Profesional Web Designer, Web Developer, Desktop Developer & Android Developer serta penyediaan Solusi IT sejak tahun 2017.
      </p>
      <p>
        Perusahaan ini didirikan & dikelola oleh orang-orang yang memiliki passion di bidang IT. Di awal tahun 2017 Perusahaan Penyedia Jasa Pembuatan Aplikasi di Makassar belum sebanyak sekarang. Demikian pula tools yang tersedia untuk perusahaan pembuatan aplikasi pun masih sedikit, sehingga modul yang berisi puluhan ribu baris koding harus dibuatnya. Seiring berjalannya waktu jumlah service semakin meningkat.
      </p>

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
          $('#content-post').html(data.data);
          $('#navigation').fadeIn(1000).html(data.pagination_link);
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