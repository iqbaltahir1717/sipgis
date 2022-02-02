<section class="ftco-section-parallax" id="two">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">

          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Masukkan Judul Skripsi Untuk Mencari Skripsi</h2>

            <?php echo form_open("front/skripsi_pr")?>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <div class="form-group d-flex mb-20">
                    <input type="text" class="form-control" placeholder="Masukkan kata pencarian Anda" name="cari_sertifikat" required="required">
                    <input type="submit" value="Cari" class="submit px-3" name="cari">
                  </div>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          
          <div class="text-center heading-section heading-section-white ftco-animate">
          <!--  <div class="container-fluid">-->
          <!--    <div class="col-md-25">-->
                <?php
                
                if($list!=null){
                ?>
                <?php if($typo!='' && $list[0][0]!=100){
                  ?>
                 <p>apakah kata <?php echo $typo?> typo ?  <br> Sistem menemukan kata yang cocok yaitu <?php echo $typo_perbaikan?> </p>
                <?php } ?>
                <p>Waktu Running <?php echo $execution_time?> sec</p>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" width="100%" cellspacing="0" style="color:white;">
                        <thead>
                            <tr>
                              <th style="width: 5%;">No</th>
                              <th style="width: 5%;">#</th>
                              <th style="width: 15%;">Nim Mahasiswa</th>
                              <th style="width: 15%;">Nama Mahasiswa</th>
                              <th>Judul Skripsi</th>
                              <th style="width: 12%;">Banyak Kata Yang Sama</th>
                              <th>Kemiripan (%)</th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php $no = 1;
                          foreach ($list as $ab=>$key) { 
                            ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td>
                                <a href="<?php echo base_url() . 'upload/skripsi_sebagian/'.$key[5]?>" class="btn btn-warning btn-icon-split btn-sm" target="_blank">
                                  <span class="text">
                                    <i class="fa fa-eye"></i>
                                  </span>
                                </a>
                
                              </td>
                              <td><?php echo $key[4]?></td>
                                <?php foreach ($mahasiswa as $keys) {
                                if($key[4] == $keys->mahasiswa_nim){
                                  ?>
                                  <td><?php echo $keys->mahasiswa_nama?></td>
                                  <?php 
                                  }
                                } ?>
                
                              <td><?php echo $key[3]?></td>
                              <td><?php echo $key[1]?></td>
                              <td><?php echo $key[0]?>%</td>
                            </tr>

                        <?php $no++;
                          }
                        } ?>
                        </tbody>
                      </table>
                      <p style="color:white"></p>
                      <hr>
                    </div>
                  </div>
                     <div class="text-right"><?php echo $links; ?></div> 
          <!--    </div>-->
          <!--  </div>-->
          </div>
        </div>
      </div>
    </div>
    
  </section>