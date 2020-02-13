<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$title?>
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="multipurpose, portfolio, blog, shop, e-commerce, modern, flat style, responsive,  business, corporate, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?=base_url()?>temp/frontend/css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?=base_url()?>temp/frontend/css/theme.min.css">

    <link rel="stylesheet" media="screen" href="<?=base_url()?>temp/frontend/css/custom.css">
    <!-- Modernizr-->
    <script src="<?=base_url()?>temp/frontend/js/modernizr.min.js"></script>

    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="<?=base_url()?>temp/frontend/js/vendor.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4 pb-1">
        <h6>Menu</h6>
        <div class="d-flex justify-content-between pt-2">
            <a class="btn btn-primary btn-sm btn-block" href="<?=site_url("donasi")?>">&nbsp;Donasi</a>
        </div>
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 0px); top: 120px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">

          <?=get_menu_mobile()?>



        </div>
      </div>

    </div>
    <!-- Navbar: Floating-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-floating navbar-floating navbar-sticky">
      <div class="container">
        <div class="d-table-cell align-middle pr-md-3">
          <a class="navbar-brand mr-1" href="<?=site_url()?>">
            <!-- <img src="<?=base_url()?>temp/frontend/img/logo/logo-dark.png" alt="CreateX"/> -->
            <h5><?=strtoupper(setting("title"))?></h5>
          </a>
        </div>
        <div class="d-table-cell align-middle w-100 pl-md-3">
          <div class="navbar justify-content-end justify-content-lg-between">
            <!-- Main Menu-->
            <?=get_menu()?>
            <div>
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
              </ul>
              <a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="<?=site_url("donasi")?>">DONASI</a>
            </div>
          </div>
        </div>
      </div>
    </header>
