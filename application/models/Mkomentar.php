<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkomentar extends CI_Model {

  public function getAllKomentar(){
    return $this->db->get('komentar')->result_array();
  }

  public function getAllKomentarSearchString($search = null){
    if($search){
      $arr = explode(' ', $search);
      $x = 0;
      foreach ($arr as $search) {
        $this->db->or_like('isi_komentar' , $search[$x]);
        $x++;
      }
    }
    return $this->db->get('komentar')->result_array();
  }

  public function getKomentarById($id_komentar){
    return $this->db->get_where('komentar',['id_komentar' => $id_komentar])->row_array();
  }

  private function date(){
    $this->load->helper('date');
    return date("d-m-Y G:i");
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahDataKomentar(){
    $id_komentar = $this->id();
    $data = array(
      'id_komentar' => $id_komentar,
      'isi_komentar' => $this->input->post('isi_komentar',true),
      'aspek_komentar' => $this->input->post('aspek_komentar',true),
      'file_komentar' => $this->uploadFile($id_komentar),
    );
    $this->db->insert('komentar',$data);
  }

  public function hapusDataKomentar($id_komentar){
    $this->db->where('id_komentar',$id_komentar);
    $this->db->delete('komentar');
    $this->deleteFile($id_komentar);
  }

  private function uploadFile($id_komentar){
    $config['upload_path'] = './upload/file/';
    $config['allowed_types'] = 'doc|docx|xls|xlsx|ppt|pptx|pdf';
    $config['file_name'] = $id_komentar;
    $config['overwrite'] = true;
    $config['detect_mime'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('file_komentar')) {
      return $this->upload->data("file_name");
    } else {
    print_r($this->upload->display_errors());
    return "default.jpg";
    }
  }

  private function deleteFile($id_komentar){
    $komentar = $this->getKomentarById($id_komentar);
    if ($komentar['file_komentar'] != "default.jpg"){
      $filename = explode(".", $komentar->file_komentar)[0];
      return array_map('unlink', glob(FCPATH."upload/komentar/$id_barang.*"));
    }
  }

}
