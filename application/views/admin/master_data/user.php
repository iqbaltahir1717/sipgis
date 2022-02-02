<div class="container-fluid">
<script>
    $(document).ready(function() {
      $('#import_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
          url: "<?php echo base_url() ?>api/user_import",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            $('#file').val('');
            // alert(data);
            $("#importuserModal").modal('hide');
            window.location = "<?php echo site_url('user'); ?>";
          }
        })
      });

    });
</script>
  <?php 
    if($this->session->flashdata('add')){ 
      $message = $this->session->flashdata('add');
      $heading = '#Tambah User';
    }else if($this->session->flashdata('update')){ 
      $message = $this->session->flashdata('update');
      $heading = '#Update User';
    }else if($this->session->flashdata('delete')){
      $message = $this->session->flashdata('delete');
      $heading = '#Delete User';  
    }else if ($this->session->flashdata('import')) {
      $message = $this->session->flashdata('import');
      $heading = '#import User';
    } 
  ?>
  <?php if(isset($message)){ ?>
  <script>
    $(document).ready(function(){
      $.toast({
        text : '<?php echo $message;?>',
        heading : '<?php echo $heading;?>',
        position : 'top-right',
        width : 'auto',
        showHideTransition : 'slide',
        icon: 'info',
        hideAfter: 5000
      })
    });
  </script>
  <?php } ?>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data User</h1>
  <p class="mb-4">Data berikut merupakan kumpulan User yang terdaftar di Jurusan <b>Teknik Informatika</b> - Universitas Halu Oleo</p>
  <hr>

  <!-- DataTales Example -->
  <div class="card mb-4">
    <div class="card-header py-3">
      <a href="#" class="btn btn-2" data-toggle="modal" data-target="#userModal">
        Tambah Akun Mahasiswa
      </a>

      <a href="#" class="btn btn-2" data-toggle="modal" data-target="#userModaldosen">
        Tambah Akun Dosen
      </a>

      <!-- user Modal-->
      <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content br-radius">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah User Mahasiswa Baru</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <?php echo form_open("user/input")?>
            <div class="modal-body">
            <div class="form-group">
              <label for=""><b>Nim Mahasiswa</b></label>
              <select class="form-control" name="id" required="required">
                <option value=""></option>
                <?php foreach($mahasiswa as $j){
                ?>
                <option value="<?php echo $j->mahasiswa_nim?>"><?php echo $j->mahasiswa_nim?></option>
                <?php  }?>
              </select>
            </div>

              <div class="form-group">
                <label for=""><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" placeholder="" name="user_fullname" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Group</b></label>
                <select class="form-control" name="group_id">
                  <option value="3">Mahasiswa</option>
                </select>
              </div>
              <hr>
              <div class="form-group">
                <label for=""><b>Username/Akun</b></label>
                <input type="text" class="form-control" placeholder="" name="user_name" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Password/Kata Sandi</b></label>
                <input type="text" class="form-control" placeholder="" name="user_password" required="required">
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

      <div class="modal fade" id="userModaldosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content br-radius">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah User Dosen Baru</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <?php echo form_open("user/input")?>
            <div class="modal-body">
              <div class="form-group">
                <label for=""><b>Id Dosen</b></label>
                <select class="form-control" name="id" required="required">
                  <option value=""></option>
                  <?php foreach($dosen as $j){
                  ?>
                  <option value="<?php echo $j->nomor_induk?>"><?php echo $j->nomor_induk?></option>
                  <?php  }?>
                </select>
              </div>

              <div class="form-group">
                <label for=""><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" placeholder="" name="user_fullname" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Group</b></label>
                <select class="form-control" name="group_id">
                  <option value="2">Dosen</option>
                </select>
              </div>
              <hr>
              <div class="form-group">
                <label for=""><b>Username/Akun</b></label>
                <input type="text" class="form-control" placeholder="" name="user_name" required="required">
              </div>
              <div class="form-group">
                <label for=""><b>Password/Kata Sandi</b></label>
                <input type="text" class="form-control" placeholder="" name="user_password" required="required">
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

      <!-- <a href="#" class="btn btn-warning btn-icon-split btn-sm" data-toggle="modal" data-target="#importmatakuliahModal">
        <span class="icon text-white-50">
          <i class="fas fa-file-upload"></i>
        </span>
        <span class="text">Import Data</span>
      </a> -->

      <!-- Import Data Matakuliah Modal-->
      <div class="modal fade" id="importmatakuliahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Data Matakuliah</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <form method="post" id="import_form" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <a href="<?php echo base_url("upload/excel/format_user.xlsx"); ?>">Download Format</a><br>
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


      <a href="<?php echo site_url('user')?>" class="btn btn-3">
        <span class="icon">
          <i class="fa fa-refresh"></i>
        </span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="width: 5%;">No</th>
              <th>Username</th>
              <th>Fullname</th>
              <th>Group</th>
              <th style="width: 12%;">#</th>
            </tr>
          </thead>
          
          <tbody>
            <?php $no=1; foreach($user as $key){?>
            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $key->user_name?></td>
              <td><?php echo $key->user_fullname?></td>
              <td><?php echo $key->group_name?></td>
              <td>
                <a href="#" class="btn btn-4" data-toggle="modal" data-target="#userEditModal<?php echo $key->user_id?>">
                  <span class="text">
                    <i class="fa fa-edit"></i>
                  </span>
                </a>
                <a href="#" class="btn btn-5" data-toggle="modal" data-target="#userRemoveModal<?php echo $key->user_id?>">
                  <span class="text">
                    <i class="fa fa-trash"></i>
                  </span>
                </a>

              </td>
            </tr>

            <!-- Looping Modal Area -->

            <!-- user Modal Edit-->
            <div class="modal fade" id="userEditModal<?php echo $key->user_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content br-radius">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <?php echo form_open("user/edit")?>
                  <div class="modal-body">

                    <div class="form-group">
                      <label for=""><b>Nama Lengkap</b></label>
                      <input type="hidden" class="form-control" name="user_id" value="<?php echo $key->user_id?>">
                      <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Pengguna..." name="user_fullname" required="required" value="<?php echo $key->user_fullname?>">
                    </div>
                    <div class="form-group">
                      <label for=""><b>Group</b></label>
                      <select class="form-control" name="group_id">
                        <option value="">.:: Pilih Group ::.</option>
                        <?php foreach ($group as $keys) { 
                                if($key->group_id==$keys->group_id){
                        ?>
                        <option value="<?php echo $key->group_id?>" selected><?php echo $key->group_name?></option>
                        <?php }else{ ?>
                        <option value="<?php echo $key->group_id?>"><?php echo $key->group_name?></option>
                        <?php }}?>
                        
                      </select>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for=""><b>Username/Akun</b></label>
                      <input type="text" class="form-control" placeholder="Masukkan Username/Akun..." name="user_name" required="required" value="<?php echo $key->user_name?>">
                    </div>
                    <div class="form-group">
                      <label for=""><b>Password/Kata Sandi</b></label>
                      <input type="text" class="form-control" placeholder="Masukkan Password..." name="user_password">
                      <br><span class="text-danger" style="font-size: 12px">*Isi Field password jika ingin mengganti password, jika tidak kosongkan</span>
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

            <!-- user Modal Remove-->
            <div class="modal fade" id="userRemoveModal<?php echo $key->user_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content br-radius">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <?php echo form_open("user/delete")?>
                  <div class="modal-body">
                    Apakah anda yakin akan menghapus data User <b><?php echo $key->user_name ?></b> ?
                    <input type="hidden" class="form-control" name="user_id" value="<?php echo $key->user_id?>">
                    <input type="hidden" class="form-control" name="user_name" value="<?php echo $key->user_name?>">
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


            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->