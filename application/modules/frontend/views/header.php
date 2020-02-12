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
      <div class="px-4 pb-4">
        <h6>Menu</h6>
        <div class="d-flex justify-content-between pt-2">
          <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="<?=base_url()?>temp/frontend/img/flags/en.png" alt="English"/>English</a>
            <div class="dropdown-menu" style="min-width: 150px;"><a class="dropdown-item" href="#"><img src="<?=base_url()?>temp/frontend/img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="<?=base_url()?>temp/frontend/img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="<?=base_url()?>temp/frontend/img/flags/it.png" alt="Italiano"/>Italiano</a></div>
          </div><a class="btn btn-primary btn-sm btn-block" href="account-login.html"><i class="fe-icon-user"></i>&nbsp;Login</a>
        </div>
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->



          <!-- Account-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="account-orders.html">Account</a><a class="collapsed" href="#account-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-item"><a href="account-login.html">Login / Register</a></li>
                  <li class="dropdown-item"><a href="account-password-recovery.html">Password Recovery</a></li>
                  <li class="dropdown-item"><a href="account-orders.html">Orders List</a></li>
                  <li class="dropdown-item"><a href="account-profile.html">Profile Settings</a></li>
                  <li class="dropdown-item"><a href="account-address.html">Contact / Shipping Address</a></li>
                  <li class="dropdown-item"><a href="account-wishlist.html">Wishlist</a></li>
                  <li class="dropdown-item"><a href="account-tickets.html">My Tickets</a></li>
                  <li class="dropdown-item"><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Pages-->


        </div>
      </div>
      <div class="offcanvas-footer px-4 pt-3 pb-2 text-center"><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
    </div>
    <!-- Navbar: Floating-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper navbar-floating navbar-floating navbar-sticky">
      <div class="container">
        <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.html"><img src="<?=base_url()?>temp/frontend/img/logo/logo-dark.png" alt="CreateX"/></a></div>
        <div class="d-table-cell align-middle w-100 pl-md-3">
          <div class="navbar justify-content-end justify-content-lg-between">
            <!-- Search-->
            <form class="search-box" method="get">
              <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
            </form>
            <!-- Main Menu-->
            <?=get_menu()?>
            <div>
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
              </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="https://themes.getbootstrap.com/product/createx-multipurpose-template-ui-kit/" target="_blank">DONASI</a>
            </div>
          </div>
        </div>
      </div>
    </header>
