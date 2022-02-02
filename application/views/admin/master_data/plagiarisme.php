<div class="container-fluid font" style="padding:0 50px">
    <h1 class="h3 mb-2 text-gray-800 mb-3"><i class="fa fa-search fa-fw mr-2"></i>Cek Plagiarisme</h1>
    <p class="mb-5">Masukkan Latar Belakang anda terlebih dahulu untuk mengecek</p>
    <?php echo form_open("plagiarisme/proposal")?>
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
</div>