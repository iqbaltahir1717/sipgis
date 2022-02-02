
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url()?>upload/setting/<?php echo $settings_app[0]->setting_logo?>" >
  <title><?php echo $settings_app[0]->setting_appname?></title>
  <!-- CSS Here -->
  <link rel="stylesheet" href="style.css">
  <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  <style type="text/css">
    body, html {
      margin: 0;
      padding: 0;
    }
      .fontPoppins{
        font-family: 'Poppins', sans-serif;
      }

    .body-1 {
      padding-top:15%;
      padding-right:calc(2rem + 40px);
      padding-left:calc(2rem + 40px);
      /* padding-bottom:19%; */
      margin:0;
      background-image: url("https://source.unsplash.com/Hcfwew744z4/");
      background-size:cover;
      background-color: #4d4d4d;
      background-repeat: no-repeat;
      background-size: cover;
      min-height:100vh;
      object-fit:cover
    } 

    .body-2{
      margin:0;
      padding:70px 80px 0 80px  ; 
      min-height:100vh; 
      overflow: hidden;
    }

    .center-this {
      /* padding: 20px; */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align:center;
    }

    .title-1{
      margin-bottom:20px;
      padding: 0 80px 0 80px;
      font-weight: bold;
      font-size: 24px;
      line-height: 132%;
      color: white;
      /* font-weight:600; */
      letter-spacing: 1px;
    }

    .col-md-12{
      padding:0;
      margin:0;
    }

    .col-md-6{
      /* padding:0; */
      margin:0;
    }

    .log-text{
      color:#494949;
      font-size:32px;
      font-weight:700;
      /* margin-top:calc(20vh + 20px) */
    }
    .log-text-title{
      margin-top:20px;
      color:#494949;
      font-size:14px;
      /* font-weight:700; */
    }
    span{
      color:#494949;
    }
    .alert{
      height:150px;
    }
    .input-log{
      margin:10px 0 20px 0;
      padding: 24px;
      border: 1px solid #80CDFF;
      box-sizing: border-box;
      border-radius: 11px;
    }

    .btn-login{
      /* margin:10px 0 20px 0; */
      margin:30px 0 30px 0;
      background: linear-gradient(132.67deg, #80CDFF 2.51%, #5297FF 101.34%);
      padding: 14px;
      color:#4d4d4d;
      border-radius: 11px;
      box-shadow: -6px -6px 12px rgba(156, 231, 255, 0.25), 6px 6px 12px rgba(108, 198, 227, 0.25);
      transition: box-shadow ease  0.5s;
      -o-transition: background ease  0.5s; /* Opera */
    }
    .btn-login:hover{transition: all 0.5s;
     box-shadow: inset -6px -6px 12px rgba(156, 231, 255, 0.25), inset 6px 6px 12px rgba(108, 198, 227, 0.25);
    }

    .row{
      margin:0
    }
    .blob1{
        position:absolute;
        z-index:-999;
        top: -40%;
        right:-40%;
    }
        .blob2{
        position:absolute;
        z-index:-999;
        top: 40%;
        right:40%;
    }
  </style>


</head>

<body class="fontPoppins">
  <div class="col-md-12">
    <div class="rowresponsive row">
      <div class="col-md-7 body-1">
          <div class="center-this">
            <img src="<?php echo base_url()?>upload/setting/<?php echo $settings_app[0]->setting_logo?>" height="150" class="">
          </div><br>
          <h3 class="title-1 center-this"><?php echo $settings_app[0]->setting_appname?></h2>
          <h4 class="text-white center-this" style="font-size:20px"><?php echo $settings_app[0]->setting_owner_name?> <br> Universitas Halu Oleo</h4>
      </div>        
      <div class="col-md-5 body-2">
            <svg class="blob1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
              <path id="blob" d="M405.5,336.5Q350,423,258,409Q166,395,92,322.5Q18,250,86,167.5Q154,85,264,60Q374,35,417.5,142.5Q461,250,405.5,336.5Z" fill="#d1d8e0"></path>
            </svg>
            <svg class="blob2" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
              <path id="blob" d="M405.5,336.5Q350,423,258,409Q166,395,92,322.5Q18,250,86,167.5Q154,85,264,60Q374,35,417.5,142.5Q461,250,405.5,336.5Z" fill="#d1d8e0"></path>
            </svg>
          <div class="alert">
          <?php echo form_open("home/login", "class='user'");
            if($this->session->flashdata('login')){
              echo "<div class='alert alert-danger alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4><i class='icon fa fa-ban'></i> Oopss!</h4>".$this->session->flashdata('login')."</div>";
            }
          ?>
          </div>
          <h4 class="log-text">Sign-In</h4>
          <p class = "log-text-title">Hai, Silahkan Masukkan Username dan Password untuk Masuk</p>
          <br>
          <span>Username</span>
          <input type="text" class="form-control input-log" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
          <span>Password</span>
          <br>
          <input type="password" class="form-control input-log" id="exampleInputPassword" placeholder="Masukkan Password" name="password">
          <button class="btn btn-login btn-block">Log In</button>
          <?php echo form_close(); ?>
      </div>  
    </div>
  </div>

  <!-- JavaScript Here -->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>
</body>
</html>
