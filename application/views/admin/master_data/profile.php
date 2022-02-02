<style>
    .container {
      padding: 50px 200px;
    }
    .box {
      position: relative;
      background: #ffffff;
      width: 100%;
    }
    .box-header {
      color: #444;
      display: block;
      padding: 10px;
      position: relative;
      border-bottom: 1px solid #f4f4f4;
      margin-bottom: 10px;
    }
    .box-tools {
      position: absolute;
      right: 10px;
      top: 5px;
    }
    .dropzone-wrapper {
      border: 2px dashed #91b0b3;
      color: #92b0b3;
      position: relative;
      height: 150px;
    }
    .dropzone-desc {
      position: absolute;
      margin: 0 auto;
      left: 0;
      right: 0;
      text-align: center;
      width: 40%;
      top: 50px;
      font-size: 16px;
    }
    .dropzone,
    .dropzone:focus {
      position: absolute;
      outline: none !important;
      width: 100%;
      height: 150px;
      cursor: pointer;
      opacity: 0;
    }
    .dropzone-wrapper:hover,
    .dropzone-wrapper.dragover {
      background: #ecf0f5;
    }
    .preview-zone {
      text-align: center;
    }
    .preview-zone .box {
      box-shadow: none;
      border-radius: 0;
      margin-bottom: 0;
    }
</style>

<div class="container-fluid">
  <?php 
    if($this->session->flashdata('add')){ 
      $message = $this->session->flashdata('add');
      $heading = '#Tambah User';
    }else if($this->session->flashdata('update')){ 
      $message = $this->session->flashdata('update');
      $heading = '#Update User';
      $icon    = 'info';
    }else if($this->session->flashdata('delete')){
      $message = $this->session->flashdata('delete');
      $heading = '#Delete User';  
    } else if($this->session->flashdata('gagal')){
      $message = $this->session->flashdata('gagal');
      $heading = '#Update User';  
      $icon    = 'error';
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
        icon: '<?php echo $icon?>',
        hideAfter: 5000
      })
    });
  </script>
  <?php } ?>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Profil : <?php echo $profile[0]->user_fullname?></h1>
  
  <hr>
        

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="<?php echo site_url('user/profile')?>" class="btn btn-3">
        <span class="icon">
          <i class="fa fa-refresh"></i>
        </span>
      </a>
    </div>
    <div class="card-body">
      <?php echo form_open_multipart("user/update_profile")?>
      <div style="overflow-x: auto;">
        <div class="row">
          <div class="col-md-3">
            <?php if($this->session->userdata('user_photo')!=""){?>
              <center><img src="<?php echo base_url()?>upload/user/<?php echo $this->session->userdata('user_photo');?>" style="border-radius: 50%" alt="User profile picture" height="200"></center>
              <?php }else{ ?>
              <center><img src="<?php echo base_url()?>upload/user/default_image.png" style="border-radius: 50%" alt="User profile picture" height="200"></center>
              <?php } ?>
              <br>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  Nama Pengguna<br> <b><?php echo $this->session->userdata('user_fullname')?></b>
                </li>
                <li class="list-group-item">
                  Group<br> <b><?php  echo "<small class='text-success'><b>".$profile[0]->group_name."</b></small>"; ?></b>
                </li>
                
              </ul>
              <br>
              <br>
          </div>
          <div class="col-md-9">
            <table id="example1" class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width: 30%">Username</td>
                  <td><input type="text" class="form-control" readonly placeholder="Username" name="user_name" value="<?php echo $profile[0]->user_name;?>"></td>
                </tr>
                <tr>
                  <td style="width: 30%">Nama</td>
                  <td><input type="text" class="form-control" placeholder="Nama Pengguna" name="user_fullname" value="<?php echo $profile[0]->user_fullname;?>"></td>
                </tr>
                
               
                <tr>
                  <td style="width: 30%">Foto</td>
                  <td>
                      <div class="preview-zone hidden">
                        <div class="box box-solid">
                         <div class="box-body"></div>
                        </div>
                       </div>
                        <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                         <i class="glyphicon glyphicon-download-alt"></i>
                         <p>Choose an image file or drag it here.</p>
                        </div>
                        <input type="file" name="userfile" class="dropzone">
                       </div>
                      <input type="file" class="form-control" name="userfile">
                    </td>
                   
                </tr>
                <tr>
                  <td style="width: 30%">Password</td>
                  <td>
                    <input type="hidden" class="form-control" name="user_id"  value="<?php echo $profile[0]->user_id?>">
                    <input type="hidden" class="form-control" name="oldpassword"  value="<?php echo $profile[0]->user_password?>">
                    <input type="password" class="form-control" name="checkoldpassword" placeholder="Password Lama" style="margin-bottom: 3px;">
                    <input type="password" class="form-control" name="password" placeholder="Password Baru" style="margin-bottom: 3px;">
                    <input type="password" class="form-control" name="matchpassword" placeholder="Konfirmasi Password Baru">
                  </td>
                </tr>
                

              </tbody>
            </table>
            <hr>
            <button type="submit" class="btn btn-2" style="float:right"><i class="ti-save"></i> Update Profil</button><br><br><br>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script>
    /**
     *
     * app.js
     *
     */
    function readFile(input) {
     if (input.files && input.files[0]) {
     var reader = new FileReader();
     
     reader.onload = function (e) {
     var htmlPreview = 
     '<img width="200" src="' + e.target.result + '" />'+
     '<p>' + input.files[0].name + '</p>';
     var wrapperZone = $(input).parent();
     var previewZone = $(input).parent().parent().find('.preview-zone');
     var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
     
     wrapperZone.removeClass('dragover');
     previewZone.removeClass('hidden');
     boxZone.empty();
     boxZone.append(htmlPreview);
     };
     
     reader.readAsDataURL(input.files[0]);
     }
    }
    function reset(e) {
     e.wrap('<form>').closest('form').get(0).reset();
     e.unwrap();
    }
    $(".dropzone").change(function(){
     readFile(this);
    });
    $('.dropzone-wrapper').on('dragover', function(e) {
     e.preventDefault();
     e.stopPropagation();
     $(this).addClass('dragover');
    });
    $('.dropzone-wrapper').on('dragleave', function(e) {
     e.preventDefault();
     e.stopPropagation();
     $(this).removeClass('dragover');
    });
    $('.remove-preview').on('click', function() {
     var boxZone = $(this).parents('.preview-zone').find('.box-body');
     var previewZone = $(this).parents('.preview-zone');
     var dropzone = $(this).parents('.form-group').find('.dropzone');
     boxZone.empty();
     previewZone.addClass('hidden');
     reset(dropzone);
    });
</script>