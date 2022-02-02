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
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Proposal</h1>
  <p class="mb-4">Data berikut merupakan kumpulan Proposal yang masuk di Jurusan <b>Teknik Informatika</b> - Universitas Halu Oleo</p>
  <!-- DataTales Example -->
  <div class="card mb-4">
    <div class="card-header py-3">
    <?php if($this->session->userdata('group_id') == 3){ if($proposal == false){?>
      <a href="<?php echo site_url('proposal/add')?>" class="btn btn-2">
        Upload Proposal
      </a>
      
      <?php } } else{ ?>
      <a href="<?php echo site_url('proposal/add')?>" class="btn btn-2">
        <span class="text">Upload Proposal</span>
      </a>
      <?php } ?>
      

      <!-- proposal Modal-->
    
      <a href="<?php echo site_url('proposal')?>" class="btn btn-3">
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
              <th>Nim Mahasiswa</th>
              <th>Nama Mahasiswa</th>
              <th>Judul Proposal</th>
              <th style="width: 12%;">#</th>
            </tr>
          </thead>
          
          <tbody>
            <?php $no=1; foreach($proposal as $key){?>
            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $key->mahasiswa_nim?></td>
              <td>
                <?php foreach ($mahasiswa as $keys) {
                if($key->mahasiswa_nim == $keys->mahasiswa_nim){
                  ?>
                  <?php echo $keys->mahasiswa_nama?>
                  <?php 
                  }
                } ?>
                </td>
              <td><?php echo $key->proposal_judul?></td>
                <td>
                <a href="<?php echo site_url('proposal/update/'.$key->proposal_id)?>" class="btn btn-4" >
                  <span class="text">
                    <i class="fa fa-edit"></i>
                  </span>
                </a>
                <a href="#" class="btn btn-5" data-toggle="modal" data-target="#proposalRemoveModal<?php echo $key->proposal_id?>">
                  <span class="text">
                    <i class="fa fa-trash"></i>
                  </span>
                </a>
                <a href="<?php echo base_url()?>upload/proposal_full/<?php echo $key->proposal_file ?>" class="btn btn-6" target="blank">
                  <span class="text">
                    <i class="fa fa-download"></i>
                  </span>
                </a>
              </td>
            </tr>

            <!-- Looping Modal Area -->

            
          

            <!-- proposal Modal Remove-->
            <div class="modal fade" id="proposalRemoveModal<?php echo $key->proposal_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content br-radius">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus proposal</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <?php echo form_open("proposal/delete")?>
                  <div class="modal-body">
                    Apakah anda yakin akan menghapus data proposal <b><?php echo $key->proposal_name ?></b> ?
                    <input type="hidden" class="form-control" name="proposal_id" value="<?php echo $key->proposal_id?>">
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