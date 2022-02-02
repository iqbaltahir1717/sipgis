<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller {
  function __construct() {
    parent::__construct();
    error_reporting(0);
    $this->load->model("m_setting");
    $this->load->model("m_proposal");
    $this->load->model("m_mahasiswa");
    $this->load->model("m_dosen");
  }
  
  public function index()
  {
    $this->load->view("attribute/front/index");
  }

  public function skripsi_pr() {
    redirect('front/skripsi/'.$this->input->post('cari_sertifikat'));
  }
    function distance($source, $dest)
      {
          if ($source == $dest) {
              return 0;
          }

          $slen = strlen($source);
          $dlen = strlen($dest);

          if ($slen == 0) {
              return $dlen;
          } else {
              if ($dlen == 0) {
                  return $slen;
              }
          }

          $prevRow = range(0, $dlen);

          for ($i = 0; $i < $slen; $i++) {
              $thisRow = array($i + 1);
              $char = $source[$i];
              $prev_char = $source[$i - 1] ?? '';
              for ($j = 0; $j < $dlen; $j++) {
                  $cost = $char == $dest[$j] ? 0 : 1;

                  $thisRow[$j + 1] = min(
                      $prevRow[$j + 1] + 1,   // deletion
                      $thisRow[$j] + 1,      // insertion
                      $prevRow[$j] + $cost    // substitution
                  );

                  if ($i > 0 && $j > 0 && $char == $dest[$j - 1] && $prev_char == $dest[$j]) {
                      $thisRow[$j + 1] = min(
                          $thisRow[$j + 1],
                          $preprevRow[$j - 1] + $cost // transposition
                      );
                  }
              }
              $preprevRow = $prevRow;
              $prevRow = $thisRow;
          }
          return $prevRow[$j];
      }
  
  public function skripsi() {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['skripsi'] = $this->m_skripsi->fetch_data_verif(1);
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
    if ($this->uri->segment(3)!=null) {
      $cari = $this->uri->segment(3);

      // Starting clock time in seconds
      $start_time = microtime(true);
      $a=1;
      
      foreach($data['skripsi'] as $s){
        $pecah_cari = explode("%20",$cari);
        $pecah_target = explode(" ", $s->skripsi_judul);
        if($pecah_cari<$pecah_target){

        }
        $count_laven_dis = 0;
        $count_laven = 0;
        
        for ($i = 0; $i < count($pecah_cari); $i++) {
          for ($j = 0; $j < count($pecah_target); $j++) {
            $laven_dis = $this->distance(strtolower($pecah_cari[$i]), strtolower($pecah_target[$j]))  . PHP_EOL . "<br>" . PHP_EOL;
            
            if($laven_dis == 0){
              $count_laven_dis++;
              $data['typo'] ='';
              $count_laven  = $laven_dis;
              if(strlen($pecah_cari[$i])<=strlen($pecah_target[$j])){
                $jumlah_huruf_terbanyak = strlen($pecah_target[$j]);
              }else{
                $jumlah_huruf_terbanyak = strlen($pecah_cari[$i]);
              }
            }else if($laven_dis <= 2 && $laven_dis >= 1) {
              $data['typo'] = strtolower($pecah_cari[$i]);
              $data['typo_perbaikan'] = strtolower($pecah_target[$j]);
              $count_laven_dis++;
              $count_laven  = $laven_dis;

              if(strlen($pecah_cari[$i])<=strlen($pecah_target[$j])){
                $jumlah_huruf_terbanyak = strlen($pecah_target[$j]);
              }else{
                $jumlah_huruf_terbanyak = strlen($pecah_cari[$i]);
              }
            }
          }
        }
        if($count_laven_dis>=1){
          if(count($pecah_cari)==1){
            $data['data'][] = [round((1-$count_laven/$jumlah_huruf_terbanyak)*100,2),$count_laven_dis,$s->skripsi_id,$s->skripsi_judul,$s->mahasiswa_nim,$s->skripsi_file_separuh];
          }else if(count($pecah_cari)>1){
            $data['data'][] = [round(($count_laven_dis/count($pecah_cari))*100,2),$count_laven_dis,$s->skripsi_id,$s->skripsi_judul,$s->mahasiswa_nim,$s->skripsi_file_separuh];
          } 
        }

        rsort($data['data']); 

        // End clock time in seconds
        $end_time = microtime(true);
          
        // Calculate script execution time
        $data['execution_time'] = ($end_time - $start_time);

        #Config Pagination
        $config = array();
        $config["base_url"] = base_url()."front/proposal/".$cari."/";
        $config["total_rows"] = count($data['data']);
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        //$config["num_links"] = floor($choice);
        $config['attributes']      = array('class' => 'page-link');
        $config['full_tag_open']   = '<ul class="pagination">';
        $config['full_tag_close']  = '</ul>';
        $config['first_link']      = 'first';
        $config['last_link']       = 'last';
        $config['prev_link']       = '&lt';
        $config['next_link']       = '&gt';
        $config['first_tag_open']  = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open']   = '<li class="page-item">';
        $config['prev_tag_close']  = '</li>';
        $config['next_tag_open']   = '<li class="page-item">';
        $config['next_tag_close']  = '</li>';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        $config['cur_tag_open']    = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']   = '</a></li>';
        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';
        if($this->uri->segment(4)=="") {
          $data['number']=0;
        } else {
          $data['number'] = $this->uri->segment(4);
        }
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4))?$this->uri->segment(4) : 0;
        $data['links'] = $this->pagination->create_links();
        
        $data['list'] = array_slice($data['data'],$page,$config["per_page"]);
      }

    
      #Load Data

      $this->load->view("attribute/front/header");
      $this->load->view("attribute/front/skripsi", $data);
      $this->load->view("attribute/front/footer");
    }

  }
}
?>