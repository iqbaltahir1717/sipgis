<div class="container-fluid">
  <?php 
    if($this->session->flashdata('add')){ 
      $message = $this->session->flashdata('add');
      $heading = '#Tambah proposal';
    }else if($this->session->flashdata('update')){ 
      $message = $this->session->flashdata('update');
      $heading = '#Update proposal';
    }else if($this->session->flashdata('delete')){
      $message = $this->session->flashdata('delete');
      $heading = '#Delete proposal';  
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
  <script src="<?php echo base_url()?>assets/plugin-new/ckeditor/ckeditor.js"></script>
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data proposal</h1>
  <!-- <p class="mb-4">Data berikut merupakan kumpulan proposal yang berlaku di <b>Dinas Lingkungan Hidup dan Kehutanan</b> - Kota Kendari</p> -->
  <hr>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      
      <a href="<?php echo site_url('proposal')?>" class="btn btn-5" style="padding: 8px 16px;">
        Kembali
      </a>

      <a href="<?php echo site_url('proposal/edit')?>" class="btn btn-3">
        <span class="icon">
          <i class="fa fa-refresh"></i>
        </span>
      </a>
      
    </div>
    <div class="card-body">
      
      <?php echo form_open_multipart("proposal/edit")?>
      
      <div class="form-row">
        <div class="form-group col-8">
          <div class="form-group">
            <label for=""><b>Nama Mahasiswa</b></label>
            <select class="form-control" name="mahasiswa_nim" required="required">
              <option value="">-Pilih Mahasiswa-</option>
              <?php foreach($mahasiswa as $j){
                  if($proposal[0]->mahasiswa_nim==$j->mahasiswa_nim){
              ?>
              <option value="<?php echo $j->mahasiswa_nim?>" selected><?php echo $j->mahasiswa_nama?></option>
              <?php }else{ ?>
                <option value="<?php echo $j->mahasiswa_nim?>" ><?php echo $j->mahasiswa_nama?></option>
              <?php  } }?>
            </select>
          </div>
          <div class="form-group">
            <label for=""><b>Judul Proposal</b></label>
            <input type="text" class="form-control" name="proposal_judul" required="required" value="<?php echo $proposal[0]->proposal_judul ?>">
          </div>
          <div class="form-group">
            <label for=""><b>Latar Belakang</b></label>
            <textarea type="text" name="proposal_isi" class="form-control" aria-label="With textarea" id="proposal_isi" required="required" style="min-height:30em"><?php echo $proposal[0]->proposal_isi ?></textarea>
          </div>
        </div>
      
        <div class="form-group col-4" style="padding: 0 40px">
          <label for=""><b>Dosen Pembimbing</b></label>
          <select class="form-control mb-3" name="proposal_pembimbing_1" required="required">
            <option value="">Pembimbing 1</option>
            <?php foreach($dosen as $j){
                if($proposal[0]->proposal_pembimbing_1==$j->nomor_induk){
            ?>
            <option value="<?php echo $j->nomor_induk?>" selected><?php echo $j->dosen_nama?></option>
            <?php }else{ ?>
              <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  } }?>
          </select>
            <select class="form-control" name="proposal_pembimbing_2" required="required">
              <option value="">Pembimbing 2</option>
              <?php foreach($dosen as $j){
                  if($proposal[0]->proposal_pembimbing_2==$j->nomor_induk){
              ?>
              <option value="<?php echo $j->nomor_induk?>" selected><?php echo $j->dosen_nama?></option>
              <?php }else{ ?>
                <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
              <?php  } }?>
            </select>
            <br>
            <label for=""><b>Dosen Penguji</b></label>
            <select class="form-control mb-3" name="proposal_penguji_1" required="required">
              <option value="">Penguji 1</option>
              <?php foreach($dosen as $j){
                  if($proposal[0]->proposal_penguji_1==$j->nomor_induk){
              ?>
              <option value="<?php echo $j->nomor_induk?>" selected><?php echo $j->dosen_nama?></option>
              <?php }else{ ?>
                <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
              <?php  } }?>
            </select>
            <select class="form-control mb-3" name="proposal_penguji_2" required="required">
              <option value="">Penguji 2</option>
              <?php foreach($dosen as $j){
                  if($proposal[0]->proposal_penguji_2==$j->nomor_induk){
              ?>
              <option value="<?php echo $j->nomor_induk?>" selected><?php echo $j->dosen_nama?></option>
              <?php }else{ ?>
                <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
              <?php  } }?>
            </select>
            <select class="form-control mb-3" name="proposal_penguji_3" required="required">
              <option value="">Penguji 3</option>
              <?php foreach($dosen as $j){
                  if($proposal[0]->proposal_penguji_3==$j->nomor_induk){
              ?>
              <option value="<?php echo $j->nomor_induk?>" selected><?php echo $j->dosen_nama?></option>
              <?php }else{ ?>
                <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
              <?php  } }?>
            </select>
            <br>
            <label for=""><b>Upload File Proposal</b></label>
            <input type="hidden" class="form-control" name="proposal_id" value="<?php echo $proposal[0]->proposal_id ?>">
            <input type="file" class="form-control" name="proposal_full" value="<?php echo $proposal[0]->proposal_file_full ?>">
            <br>
            <i class="fa fa-fw fa-file-pdf"></i><span> &nbsp; <?php echo $proposal[0]->proposal_file ?></span>
            <br>
            <a target="blank" style="color:#80CDFF" href="<?php echo base_url()?>upload/proposal_full/<?php echo $proposal[0]->proposal_file ?>">Download File</a>
            <br><br>
            <button class="btn btn-2" type="submit">Update proposal</button>
            <?php echo form_close(); ?>
        </div>
      </div>
      
    </div>
  </div>

  <script type="text/javascript">
    CKEDITOR.replace( 'editor1' );
  </script>

</div>
<!-- /.container-fluid -->