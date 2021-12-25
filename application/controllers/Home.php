<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Mkomentar');
    }

    public function index(){
      $data['komentar'] = $this->Mkomentar->getAllKomentar();
      $this->load->view('index',$data);
    }

    public function search(){
     $search = $this->input->post('search');
     $data['komentar'] = $this->Mkomentar->getAllKomentarSearchString($search);

     $this->load->view('index',$data);
   }

    public function buatLaporan(){
      $this->form_validation->set_rules('isi_komentar','Laporan','required');
      if($this->form_validation->run() == FALSE){
        $this->load->view('buatLaporan');
      } else {
        $this->Mkomentar->tambahDataKomentar();
        redirect('Home');
      }
    }

    public function detailLaporan($id_komentar){
      $data['komentar'] = $this->Mkomentar->getKomentarById($id_komentar);
      $this->load->view('detailLaporan',$data);
    }

    public function hapusLaporan($id_komentar){
      $this->Mkomentar->hapusDataKomentar($id_komentar);
      redirect('Home');
    }

}
