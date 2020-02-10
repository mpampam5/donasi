<!DOCTYPE HTML>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title>Idea Digital Indonesia</title>

    <link href="<?= base_url() ?>temp/mobile/styles/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>temp/mobile/styles/framework.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>temp/mobile/styles/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>temp/mobile/styles/swipebox.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>temp/mobile/styles/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>temp/mobile/styles/animate.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url() ?>temp/mobile/scripts/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>temp/mobile/scripts/jqueryui.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>temp/mobile/scripts/framework.plugins.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>temp/mobile/scripts/custom.js"></script>

    <style>
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

<body>

    <div id="preloader">
        <div id="status">
            <p class="center-text">
                Loading the content...
                <em>Loading depends on your connection speed!</em>
            </p>
        </div>
    </div>

    <div class="navbar-bottom pl-3 pr-3">
        <div class="row">
            <div class="one-fourth">
                <a href="<?= site_url('mobile') ?>"><i class="fa fa-home" style="color: #ffc107"></i><br>Home</a>
            </div>
            <div class="one-fourth">
                <a href="<?= site_url('mobile/about') ?>"><i class="fa fa-info" style="color: #ffc107"></i><br>About</a>
            </div>
            <div class="one-fourth">
                <a href="<?= site_url('mobile/project') ?>"><i class="fa fa-file-code-o" style="color: #ffc107"></i><br>Project</a>
            </div>
            <div class="one-fourth last-column">
                <a href="<?= site_url('mobile/ask') ?>"><i class="fa fa-question-circle" style="color: #ffc107"></i><br>Ask Us</a>
            </div>
        </div>
    </div>

    <div class="all-elements">
        <div class="snap-drawers">
            <!-- Left Sidebar -->
            <div class="snap-drawer snap-drawer-left">
                <div class="sidebar-header">
                    <a href="https://maps.google.com/?q=<?= $alamat ?>" target="_blank"><i class="fa fa-map-marker"></i></a>
                    <a href="https://wa.me/<?= $whatsapp ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="tel:<?= $telepon ?>" target="_blank"><i class="fa fa-phone"></i></a>
                    <a href="mailto:<?= $email ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    <a class="sidebar-close" href="#"><i class="fa fa-times"></i></a>
                </div>
                <!-- <a href="#" class="sidebar-logo"></a> -->
                <img src="<?= base_url() ?>temp/logo.png" style="width: 50%" class="center-socials" alt="">
                <div class="sidebar-decoration"></div>
                <ul class="sidebar-menu">
                    <!-- class "active-menu" if active -->
                    <li class=""><a href="<?= base_url() ?>mobile"><i class="fa fa-home"></i>Home<i class="fa fa-circle"></i></a></li>
                    <li class=""><a href="<?= base_url() ?>mobile/about"><i class="fa fa-info"></i>About<i class="fa fa-circle"></i></a></li>
                    <li class=""><a href="<?= base_url() ?>mobile/article"><i class="fa fa-pencil"></i>Article<i class="fa fa-circle"></i></a></li>
                    <li class="has-submenu">
                        <a class="deploy-submenu" href="#"><i class="fa fa-youtube-play"></i>Gallery<i class="fa fa-plus"></i></a>
                        <ul class="submenu">
                            <li><a href="<?= base_url() ?>mobile/photos"><i class="fa fa-angle-right"></i>Photos<i class="fa fa-circle"></i></a></li>
                            <li><a href="<?= base_url() ?>mobile/videos"><i class="fa fa-angle-right"></i>Videos<i class="fa fa-circle"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>mobile/project"><i class="fa fa-pencil"></i>Project<i class="fa fa-circle"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-pencil"></i>Team<i class="fa fa-circle"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-envelope"></i>Contact Us<i class="fa fa-circle"></i></a></li> -->
                    <li><a href="#" class="sidebar-close"><i class="fa fa-times"></i>Close<i class="fa fa-circle"></i></a></li>
                </ul>
                <div class="sidebar-copyright">
                    Copyright 2020. All rights reserved.
                </div>
                <!-- <div class="center-socials">
                    <a href="#" class="facebook-color facebook-social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google-color google-social"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="twitter-color twitter-social"><i class="fa fa-twitter"></i></a>
                </div> -->
            </div>
        </div>



        <!-- Page Content-->