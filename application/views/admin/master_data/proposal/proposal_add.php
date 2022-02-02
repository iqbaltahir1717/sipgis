<div class="container-fluid">
  <?php 
    if($this->session->flashdata('add')){ 
      $message = $this->session->flashdata('add');
      $heading = '#Tambah Proposal';
    }else if($this->session->flashdata('update')){ 
      $message = $this->session->flashdata('update');
      $heading = '#Update Proposal';
    }else if($this->session->flashdata('delete')){
      $message = $this->session->flashdata('delete');
      $heading = '#Delete Proposal';  
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
  <h1 class="h3 mb-2 text-gray-800">Upload Proposal</h1>
  <hr>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      
      <a href="<?php echo site_url('proposal')?>" class="btn btn-5" style="padding: 8px 16px;">
        Kembali
      </a>

      <a href="<?php echo site_url('proposal/add')?>" class="btn btn-3">
        <span class="icon">
          <i class="fa fa-refresh"></i>
        </span>
      </a>
      
    </div>
    <div class="card-body">
      
      <?php echo form_open_multipart("proposal/input")?>
      <div class="form-row">
        <div class="form-group col-8">
          <div class="form-group">
            <label for=""><b>Nama Mahasiswa</b></label>
            <select class="form-control" name="mahasiswa_nim" required="required">
              <option value=""></option>
              <?php foreach($mahasiswa as $j){
              ?>
              <option value="<?php echo $j->mahasiswa_nim?>"><?php echo $j->mahasiswa_nama?></option>
              <?php  }?>
            </select>
          </div>
          <div class="form-group">
            <label for=""><b>Judul Proposal</b></label>
            <input type="text" class="form-control" name="proposal_judul" required="required">
          </div>
          <div class="form-group">
            <label for=""><b>Latar Belakang</b></label>
            <textarea type="text" name="proposal_isi" class="form-control" aria-label="With textarea"   id="proposal_isi" required="required" style="min-height:30em"></textarea>
          </div>
        </div>
        
        <div class="form-group col-4" style="padding: 0 40px">
          <label for=""><b>Dosen Pembimbing</b></label>
          <select class="form-control mb-3" name="proposal_pembimbing_1" required="required">
            <option value="">Pembimbing 1</option>
            <?php foreach($dosen as $j){
            ?>
            <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  }?>
          </select>

          <select class="form-control" name="proposal_pembimbing_2" required="required">
            <option value="">Pembimbing 2</option>
            <?php foreach($dosen as $j){
            ?>
            <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  }?>
          </select>
              <br>
          <label for=""><b> Dosen Penguji</b></label>
          <select class="form-control mb-3" name="proposal_penguji_1" required="required">
            <option value="">Penguji 1</option>
            <?php foreach($dosen as $j){
            ?>
            <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  }?>
          </select>
          <select class="form-control mb-3" name="proposal_penguji_2" required="required">
            <option value="">Penguji 2</option>
            <?php foreach($dosen as $j){
            ?>
            <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  }?>
          </select>
          <select class="form-control mb-3" name="proposal_penguji_3" required="required">
            <option value="">Penguji 3</option>
            <?php foreach($dosen as $j){
            ?>
            <option value="<?php echo $j->nomor_induk?>"><?php echo $j->dosen_nama?></option>
            <?php  }?>
          </select><br>
          <label for=""><b>Upload File Proposal</b></label>
          <input type="file" class="form-control" name="proposal_full" required="required" accept="application/pdf">
          <br>
          <button class="btn btn-2" type="submit">Tambah proposal</button>
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