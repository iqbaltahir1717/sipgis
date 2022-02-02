<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Plagiarisme extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            error_reporting(0);
            $this->load->model("m_proposal");
            $this->load->model("m_mahasiswa");
            $this->load->model("m_dosen");
            $this->load->model("m_setting");
            if (!($this->session->userdata('user_id'))) {
                redirect('home');
            }
        }
        public function index(){
            $setting['settings_app'] = $this->m_setting->fetch_setting();
            $this->load->view("attribute/header", $setting);
            $this->load->view("attribute/menus", $setting);
            $this->load->view("admin/master_data/plagiarisme");
            $this->load->view("attribute/footer", $setting);
        }
        public function proposal_cek(){
            $setting['settings_app'] = $this->m_setting->fetch_setting();
            $this->load->view("attribute/header", $setting);
            $this->load->view("attribute/menus", $setting);
            redirect('plagiarisme/proposal/'.$this->input->post('cari_proposal'));
            $this->load->view("attribute/footer", $setting);
        }
        
        public function proposal(){
        
            include "function.php";


            $setting['settings_app'] = $this->m_setting->fetch_setting();
            $data['proposal'] = $this->m_proposal->fetch_data();
            $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
            if ($this->input->post('cari_proposal')!=null) {
                $cari = $this->input->post('cari_proposal');

                // Starting clock time in seconds
                $start_time = microtime(true);
                
    
                $kgram = 4;
                $basis = 11;

                //casefolding
                $data_asli_casefolding = strtolower($cari);
                //filtering
                $data_asli_filtering =  strip_stopwords(clean($data_asli_casefolding));
                $output   = $stemmer->stem($data_asli_filtering);
                $x = katahubung($output);
                //tokenizing
                $bacangram =getNgrams("$x","$kgram", "$basis");
                
                
                $data['bacangram'] = implode("} {",$bacangram);
                $data['$output'] = $output;
                   
                  
                  
                foreach($data['proposal'] as $p){
                    
                    //casefolding
                    $data_uji_casefolding = strtolower($p->proposal_isi);
                    //filtering
                    $data_uji_filtering = strip_stopwords(clean($data_uji_casefolding));
                    $output2   = $stemmer->stem($data_uji_filtering);
                    $x2 = katahubung($output2);
                    //tokenizing
                    $bacangram2 =getNgrams("$x2","$kgram", "$basis");

                     
                    $resultintersect=array_intersect($bacangram,$bacangram2);   
                    $totals=count($resultintersect);  
                    $jtotalarray=count($bacangram);
                    $jtotalarray2=count($bacangram2);  
                    $x3=((2*$totals)/($jtotalarray+$jtotalarray2)*100);
                    
                    $data["data"][] = [$p->mahasiswa_nim,$p->proposal_judul,$p->proposal_file,$x3,$bacangram2];
                    rsort($data["data"]);
                    //similarity
                    // print_r($bacangram);die;

                    // End clock time in seconds
                    $end_time = microtime(true);
                    
                    $data['execution_time'] = ($end_time - $start_time);
                    $data['cari'] = $this->input->post('cari_proposal');
                    $data['x'] = $x;
                    
                    
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
            //   print_r($data['data']);die;

                #Load Data
                $this->load->view("attribute/header", $setting);
                $this->load->view("attribute/menus", $setting);
                $this->load->view("admin/master_data/plagiarisme_hasil", $data);
                $this->load->view("attribute/footer", $setting);
            }
        }
    }
?>