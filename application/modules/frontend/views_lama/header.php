<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?= $title ?></title>
  <link rel="icon" href="<?= base_url() ?>temp/favicon.png" sizes="192x192" />
  <?= $this->meta_tags->generate_meta_tags(); ?>
  <?php include_once APPPATH . 'modules/backend/views/backend/pengaturan/meta.txt' ?>
  <!-- vendor css -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/plugins/animate/animate.min.css">
  <!-- plugins css -->
  <link href="<?= base_url() ?>temp/front/plugins/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <!-- theme css -->
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/css/theme.css">
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/css/custom.css">
  <link rel="stylesheet" href="<?= base_url() ?>temp/front/plugins/fancybox/dist/jquery.fancybox.min.css" />

  <!-- jquery -->
  <!-- vendor js -->
  <script src="<?= base_url() ?>temp/front/plugins/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url() ?>temp/front/plugins/popper/popper.min.js"></script>
  <script src="<?= base_url() ?>temp/front/plugins/bootstrap/js/bootstrap.min.js"></script>

  <style>
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
      text-decoration: none;
    }

    .float,
    .float:hover {
      text-decoration: none;
      color: white;
    }

    .my-float {
      margin-top: 16px;
    }

    .social-icons li:hover.social-icons-whatsapp a {
      background: #00d375;
    }

    .social-icons li:hover.social-icons-phone a {
      background: #e5c03c;
    }


    /* struktur organisasi */
    .struktur {
      height: 70px;
    }

    .foto {
      height: 220px !important;
    }

    /* bottom navbar */

    @media (min-width: 767px) {
      .navbar-bottom {
        display: none;
      }
    }

    .navbar-bottom {
      overflow: hidden;
      background-color: #fff;
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 101;
      border-top: #aaa;
    }

    .navbar-bottom a {
      /* float: left; */
      display: block;
      color: #aaa;
      text-align: center;
      padding: 13px 0px;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar-bottom a:hover {
      background: #f1f1f1;
      color: black;
    }

    .navbar-bottom a.active {
      background-color: #4CAF50;
      color: white;
    }
  </style>


</head>

<body class="fixed-header">
  <!-- <a href="https://wa.me/" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
  </a> -->
  <div class="navbar-bottom pl-3 pr-3">
    <div class="row">
      <div class="col-3">
        <a href="<?= site_url() ?>"><i class="fa fa-home" style="color: #ffc107"></i><br>Home</a>
      </div>
      <div class="col-3">
        <a href="<?= site_url('about') ?>"><i class="fa fa-info" style="color: #ffc107"></i><br>About</a>
      </div>
      <div class="col-3">
        <a href="<?= site_url('page/project') ?>"><i class="fa fa-file-code-o" style="color: #ffc107"></i><br>Project</a>
      </div>
      <div class="col-3">
        <a href="<?= site_url('ask') ?>"><i class="fa fa-commenting-o" style="color: #ffc107"></i><br>Ask Us</a>
      </div>
    </div>
  </div>
  <!-- header -->
  <header id="header">
    <div class="container">
      <div class="navbar-backdrop">
        <div class="navbar">
          <div class="navbar-left">
            <a class="navbar-toggle"><i class="fa fa-bars"></i></a>
            <a href="<?= base_url() ?>" class="logo"><img src="<?= base_url() ?>temp/logo.png" style="width:140px;height:50px;" alt="logo"></a>
            <nav class="nav">
              <?= get_menu(); ?>
            </nav>
          </div>
          <!-- <div class="nav navbar-right">
            <ul>
              <li class="hidden-xs-down"><a href="login.html"><i class="text-primary fa fa-sign-in"></i></a></li>
              <li class="hidden-xs-down"><a href="register.html"><i class="text-info fa fa-twitter"></i></a></li>
              <li><a data-toggle="search"><i class="fa fa-search"></i></a></li>
            </ul>
          </div> -->
        </div>
      </div>
      <div class="navbar-search">
        <div class="container">
          <form method="post">
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-times close"></i>
          </form>
        </div>
      </div>
    </div>
  </header>
  <!-- /header -->