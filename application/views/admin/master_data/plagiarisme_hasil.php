<div class="container-fluid font" style="padding:0 50px">
  <h1 class="h3 mb-2 text-gray-800 mb-3"><i class="fa fa-search fa-fw mr-2"></i>Cek Plagiarisme</h1>
  <p class="mb-5">Masukkan Latar Belakang anda terlebih dahulu untuk mengecek</p>
  <?php echo form_open("plagiarisme/proposal") ?>
  <textarea type="text" class="form-control br-radius textarea_editor text-area-cs" style="padding:30px;width:100%; min-height:300px" name="cari_proposal" required="required"></textarea>
  <br>


  <div class="row">
    <input class="btn btn-2 mr-2 submit" name="cari" type="submit" value="Cek Plagiarisme" style="padding: 12px 42px">

    <?php echo form_close(); ?>
    <a href="<?php echo site_url('plagiarisme') ?>" style="padding: 12px 16px" class="btn btn-3" name="cari">
      <span class="icon">
        <i class="fa fa-refresh"></i>
      </span>
    </a>
  </div>
  <br><br>

  <?php

  if ($data != null) {
  ?>

    <div class="d-flex">
      <p class="mr-3">K-gram = <span style="color:red"><?php echo $kgram ?></span></p>
      <p>Basis = <span style="color:red"><?php echo $basis ?></span></p>
    </div>
    <div class="row">
      <div class="col-6">
        <textarea type="text" class="form-control br-radius textarea_editor text-area-cs" style="padding:30px;width:100%; min-height:300px" disabled><?php echo $cari ?></textarea>
      </div>
      <div class="col-6">
        <textarea type="text" class="form-control br-radius textarea_editor text-area-cs" style="padding:30px;width:100%; min-height:300px" disabled><?php echo $x ?></textarea>
      </div>
    </div>
    <br>
    <textarea type="text" class="form-control br-radius textarea_editor text-area-cs" style="padding:30px;width:100%; min-height:300px" disabled>{<?php echo $bacangram ?>}</textarea>
    <br><br>
    <div class="heading-section ftco-animate">
      <p>Waktu Running <span style="color:#80CDFF; font-weight:800"><?php echo round($execution_time, 3) ?> </span> detik.</p>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="width: 5%;">No</th>
              <th style="width: 12%;">Nim Mahasiswa</th>
              <th style="width: 20%;">Nama Mahasiswa</th>
              <th>Judul Skripsi</th>
              <th style="width: 12%;">Kemiripan (%)</th>
              <th style="width: 12%;">#</th>
            </tr>
          </thead>

          <tbody>
            <?php $no = 1;
            foreach ($data as $ab => $key) { ?>
              <tr>
                <td style="text-align:center"><?php echo $no; ?></td>
                <td><?php echo $key[0] ?></td>
                <?php foreach ($mahasiswa as $keys) {
                  if ($key[0] == $keys->mahasiswa_nim) {
                ?>
                    <td><?php echo $keys->mahasiswa_nama ?></td>
                <?php
                  }
                } ?>
                <td><?php echo $key[1] ?></td>
                <td>
                  <?php if ($key[3] > 70) { ?>
                    <span style="color:red"><?php echo round($key[3], 1); ?>%</span>
                  <?php } elseif ($key[3] > 30 && $key[3] <= 70) {  ?>
                    <span style="color:orange"><?php echo round($key[3], 1); ?>%</span>
                    <?php } elseif ($key[3] > 0 && $key[3] <= 30) {
                    echo round($key[3], 1); ?>%<?php } ?>
                </td>
                <td>
                  <a href="<?php echo base_url() . 'upload/proposal_full/' . $key[2] ?>" class="btn btn-6" target="_blank">
                    <span class="text">
                      <i class="fa fa-download"></i>
                    </span>
                  </a>
                </td>
              </tr>

              <!-- End Looping -->


          <?php $no++;
            }
          } ?>
          </tbody>
        </table>
      </div>

    </div>

</div>