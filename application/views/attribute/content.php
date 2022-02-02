<div class="container-fluid ml-3" style="padding:0 50px">
  <h1 class="h5 mb-4 text-gray-600 font-2">Hai, <div class="mr-2 d-lg-inline text-gray-600">
          <?php echo ($this->session->userdata('user_fullname')) ?>
        </div></h1>
  <h2 class="color-1 font-2 font-weight-bold">Selamat datang kembali 👋</h2><br><br>

<?php if($this->session->userdata('group_id')==1){?>
  <div class="row center-this">
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-1">
              <div class="center-this h1 mb-2"><?php echo $proposal;?></div>
              <div class="center-this mb-1">Proposal</div>
              <p class="center-this text-center mb-4">Total proposal yang masuk</p>
              <a  href="<?php echo site_url('plagiarisme') ?>" class="btn btn-1 center-this">Cek Plagiarisme</a>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
          <div class="center-this h1 mb-2"><?php echo $dosen?></div>
          <div class="center-this mb-1">Dosen</div>
          <p class="center-this text-center mb-4">Total jumlah dosen</p>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
              <div class="center-this h1 mb-2"><?php echo $mahasiswa?></div>
              <div class="center-this mb-1">Mahasiswa</div>
              <p class="center-this text-center mb-4">Total jumlah mahasiswa</p>
        </div>
    </div>
  </div>
<?php }?>
<?php if($this->session->userdata('group_id')==2){?>
  <div class="row center-this">
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-1">
              <div class="center-this h1 mb-2"><?php echo $proposal;?></div>
              <div class="center-this mb-1">Proposal</div>
              <p class="center-this text-center mb-4">Total proposal yang masuk</p>
              <a  href="<?php echo site_url('plagiarisme') ?>" class="btn btn-1 center-this">Cek Plagiarisme</a>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
          <div class="center-this h1 mb-2"><?php echo $dosen?></div>
          <div class="center-this mb-1">Dosen</div>
          <p class="center-this text-center mb-4">Total jumlah dosen</p>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
              <div class="center-this h1 mb-2"><?php echo $mahasiswa?></div>
              <div class="center-this mb-1">Mahasiswa</div>
              <p class="center-this text-center mb-4">Total jumlah mahasiswa</p>
        </div>
    </div>
  </div>
<?php }?>
<?php if($this->session->userdata('group_id')==3){?>
  <div class="row center-this">
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-1">
              <div class="center-this h1 mb-2"><?php echo $proposal;?></div>
              <div class="center-this mb-1">Proposal</div>
              <p class="center-this text-center mb-4">Total proposal yang masuk</p>
              <!--<a  href="<?php echo site_url('plagiarisme') ?>" class="btn btn-1 center-this">Cek Plagiarisme</a>-->
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
          <div class="center-this h1 mb-2"><?php echo $dosen?></div>
          <div class="center-this mb-1">Dosen</div>
          <p class="center-this text-center mb-4">Total jumlah dosen</p>
        </div>
    </div>
    <div class="col-xl-4 col-md-4 mb-4">
      <div class="card card-2">
              <div class="center-this h1 mb-2"><?php echo $mahasiswa?></div>
              <div class="center-this mb-1">Mahasiswa</div>
              <p class="center-this text-center mb-4">Total jumlah mahasiswa</p>
        </div>
    </div>
  </div>
<?php }?>
</div>
