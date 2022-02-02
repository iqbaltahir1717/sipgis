<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website SIPETAK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo base_url() ?>upload/setting/settinglogo1.png">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/jquery.timepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css">

</head>

  <body>

     <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-4   ">
      <a class="navbar-brand" href="<?php echo site_url('front') ?>">SIPETAK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a id="sec-1" href="#one" class="nav-link">Beranda</a></li>
          <li class="nav-item dropdown">
              <a href="<?php echo site_url('front/pak_kur')?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                <div class="dropdown-menu">
                    <a href="<?php echo site_url('front/pak_kur')?>" class="dropdown-item">Profil Pembuat</a>
                    <!--<a href="#" class="dropdown-item">Artikel/Jurnal</a>-->
                   
                </div>
          </li>
          
          <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pencarian</a>
                <div class="dropdown-menu">
                    <a href="<?php echo site_url('front/skripsi')?>" class="dropdown-item">Cari Skripsi TI</a>
                    <a href="<?php echo site_url('front/kp')?>" class="dropdown-item">Cari Proposal KP TI </a>
                </div>
          </li>
          <li class="nav-item cta cta-colored"><a href="<?php echo site_url('home')?>" class="nav-link">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url()?>assets/front/images/image_1.jpg');" data-stellar-background-ratio="0.5">

      <div class="overlay"></div>

      <div class="container">

        <div class="row no-gutters slider-text align-items-end justify-content-start">

          <div class="col-md-12 ftco-animate text-center mb-5">

            <?php if($this->uri->segment(2)=="skripsi"){?>

            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="#">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Cari Skripsi</span> </p>

            <h1 class="mb-3 bread">Cari Skripsi</h1>

            <?php }else if($this->uri->segment(2)=="kp"){?>

            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="#">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Cari Proposal KP</span> </p>
            <h1 class="mb-3 bread">Cari Proposal</h1>
            <?php }?>

          </div>

        </div>

      </div>

    </div>