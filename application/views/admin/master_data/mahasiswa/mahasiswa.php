<div class="container-fluid">
  <script>
    $(document).ready(function() {
      $('#import_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
          url: "<?php echo base_url() ?>api/mahasiswa_import",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            $('#file').val('');
            // alert(data);
            $("#importmahasiswaModal").modal('hide');
            window.location = "<?php echo site_url('mahasiswa'); ?>";
          }
        })
      });

    });
  </script>
  <?php
  if ($this->session->flashdata('add')) {
    $message = $this->session->flashdata('add');
    $heading = '#Tambah Mahasiswa';
  } else if ($this->session->flashdata('update')) {
    $message = $this->session->flashdata('update');
    $heading = '#Update Mahasiswa';
  } else if ($this->session->flashdata('delete')) {
    $message = $this->session->flashdata('delete');
    $heading = '#Delete Mahasiswa';
  } else if ($this->session->flashdata('import')) {
    $message = $this->session->flashdata('import');
    $heading = '#import Mahasiswa';
  }
  ?>
  <?php if (isset($message)) { ?>
    <script>
      $(document).ready(function() {
        $.toast({
          text: '<?php echo $message; ?>',
          heading: '<?php echo $heading; ?>',
          position: 'top-right',
          width: 'auto',
          showHideTransition: 'slide',
          icon: 'info',
          hideAfter: 5000
        })
      });
    </script>
  <?php } ?>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data mahasiswa</h1>
  <p class="mb-4">Data berikut merupakan kumpulan mahasiswa yang terdaftar di Jurusan <b>Teknik Informatika</b> - Universitas Halu Oleo</p>

  <!-- DataTales Example -->
  <div class="card mb-4" style="border-radius: 24px;">
    <div class="card-header py-3">
      <a href="#" class="btn btn-2 mr-2" data-toggle="modal" data-target="#mahasiswaModal">
        + Tambah Mahasiswa
      </a>

      <!-- mahasiswa Modal-->
      <div class="modal fade" id="mahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content br-radius">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah mahasiswa Baru</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <?php echo form_open_multipart("mahasiswa/input") ?>
            <div class="modal-body">
              <div class="form-group">
                <label for=""><b>Nim mahasiswa</b></label>
                <input type="text" class="form-control" name="mahasiswa_nim" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Nama mahasiswa</b></label>
                <input type="text" class="form-control"  name="mahasiswa_nama" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Angkatan</b></label>
                <input type="number" class="form-control" name="mahasiswa_angkatan" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Jenis Kelamin</b></label>
                <select class="form-control" name="mahasiswa_jk">
                  <option value=""></option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for=""><b>Nomor HP Mahasiswa</b></label>
                <input type="number" class="form-control" placeholder="ex: 0821xxxxxx" name="mahasiswa_no_hp">
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-2" type="submit">Tambah</button>
              <?php echo form_close(); ?>
              <button class="btn btn-3" type="button" data-dismiss="modal">Batal</button>

            </div>
          </div>
        </div>
      </div>

      <!-- <a href="#" class="btn btn-warning btn-icon-split btn-sm" data-toggle="modal" data-target="#importmahasiswaModal">
        <span class="icon text-white-50">
          <i class="fas fa-file-upload"></i>
        </span>
        <span class="text">Import Data</span>
      </a> -->

      <!-- Import Data mahasiswa Modal-->
      <div class="modal fade" id="importmahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Data mahasiswa</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <form method="post" id="import_form" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <a href="<?php echo base_url("upload/excel/format_mahasiswa.xlsx"); ?>">Download Format</a><br>
                  <label for=""><b>Import Data</b></label>
                  <input type="file" class="form-control" name="file" id="file" required accept=".xls, .xlsx">
                </div>

              </div>
              <div class="modal-footer">
                <input type="submit" name="import" value="Import" class="btn btn-primary" />
            </form>

            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

          </div>
        </div>
      </div>
    </div>



    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-3">
      <span class="icon">
        <i class="fa fa-refresh"></i>
      </span>
    </a>
  </div>
  <br>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="width: 5%;">No</th>
            <th>Nim mahasiswa</th>
            <th>Nama mahasiswa</th>
            <th>Angkatan</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telpon</th>
            <th style="width: 12%;">#</th>
          </tr>
        </thead>

        <tbody>
          <?php $no = 1;
          foreach ($mahasiswa as $key) { ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $key->mahasiswa_nim ?></td>
              <td><?php echo $key->mahasiswa_nama ?></td>
              <td><?php echo $key->mahasiswa_angkatan ?></td>
              <?php if ($key->mahasiswa_jk == 'L') { ?>
                <td>Laki-Laki</td>
              <?php } else if ($key->mahasiswa_jk == 'P') { ?>
                <td>Perempuan</td>
              <?php } ?>
              <td><?php echo $key->mahasiswa_no_hp ?></td>
              <td>
                <a href="#" class="btn btn-4" data-toggle="modal" data-target="#mahasiswaEditModal<?php echo $key->mahasiswa_id ?>">
                  <span class="text">
                    <i class="fa fa-edit"></i>
                  </span>
                </a>
                <a href="#" class="btn btn-5" data-toggle="modal" data-target="#mahasiswaRemoveModal<?php echo $key->mahasiswa_id ?>">
                  <span class="text">
                    <i class="fa fa-trash"></i>
                  </span>
                </a>

              </td>
            </tr>

            <!-- Looping Modal Area -->



            <div class="modal fade" id="mahasiswaEditModal<?php echo $key->mahasiswa_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content br=radius">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit mahasiswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <?php echo form_open_multipart("mahasiswa/edit") ?>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for=""><b>Nim mahasiswa</b></label>
                      <input type="text" class="form-control" name="mahasiswa_nim" required="required" value="<?php echo $key->mahasiswa_nim ?>">
                      <input type="hidden" class="form-control" name="mahasiswa_id" required="required" value="<?php echo $key->mahasiswa_id ?>">
                    </div>
                    <div class="form-group">
                      <label for=""><b>Nama mahasiswa</b></label>
                      <input type="text" class="form-control" name="mahasiswa_nama" required="required" value="<?php echo $key->mahasiswa_nama ?>">
                    </div>
                    <div class="form-group">
                      <label for=""><b>Angkatan</b></label>
                      <input type="text" class="form-control" name="mahasiswa_angkatan" required="required" value="<?php echo $key->mahasiswa_angkatan ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for=""><b>Nomor HP Mahasiswa</b></label>
                        <input type="number" class="form-control" name="mahasiswa_no_hp" value="<?php echo $key->mahasiswa_no_hp ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for=""><b>Jenis Kelamin</b></label>
                      <select class="form-control" name="mahasiswa_jk">
                        <option value=""></option>
                        <?php
                        if ($key->mahasiswa_jk == 'L') {
                        ?>
                          <option value="L" selected>Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        <?php
                        } else if ($key->mahasiswa_jk == 'P') { ?>
                          <option value="L">Laki-Laki</option>
                          <option value="P" selected>Perempuan</option>

                        <?php
                        } else { ?>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        <?php
                        } ?>
                      </select>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-2" type="submit">Edit</button>
                    <?php echo form_close(); ?>
                    <button class="btn btn-3" type="button" data-dismiss="modal">Batal</button>

                  </div>
                </div>
              </div>
            </div>
            <!-- mahasiswa Modal Remove-->
            <div class="modal fade" id="mahasiswaRemoveModal<?php echo $key->mahasiswa_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content br-radius">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus mahasiswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <?php echo form_open("mahasiswa/delete") ?>
                  <div class="modal-body">
                    Apakah anda yakin akan menghapus data mahasiswa <b><?php echo $key->mahasiswa_nama ?></b> ?
                    <input type="hidden" class="form-control" name="mahasiswa_id" value="<?php echo $key->mahasiswa_id ?>">
                    <input type="hidden" class="form-control" name="mahasiswa_photo" value="<?php echo $key->mahasiswa_photo ?>">
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-5" style="padding: 8px 16px;" type="submit">Hapus</button>
                    <?php echo form_close(); ?>
                    <button class="btn btn-3" type="button" data-dismiss="modal">Batal</button>

                  </div>
                </div>
              </div>
            </div>

            <!-- End Looping -->


          <?php $no++;
          } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- /.container-fluid -->