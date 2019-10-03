  <?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Peminjaman extends CI_Controller {

    private $data = [
      'title' => 'Head-Peminjaman',
      'username' => 'custom',
      'data' => []
    ];

    public function __construct()
    {
      parent::__construct();
      $this->load->library('mailer_new');
      $this->load->model('M_jenis'); 
      $this->load->model('M_ruang'); 
      $this->load->model('M_barang'); 
      $this->load->model('M_pruang'); 
      $this->load->model('M_pbarang'); 
      if (!$this->session->login || $this->session->role != 3) {
        
        redirect('auth','refresh');
        
      }
      $this->data['username'] = $this->session->name;    
    }
    
    public function index()
    { 
      $this->data['pruang'] = $this->M_pruang->getPruang();
      $this->data['pbarang'] = $this->M_pbarang->getPbarang();
      $this->data['ruang'] = $this->M_ruang->getRuang();
      $this->data['barang'] = $this->M_barang->getInventaris();
      // echo json_encode($this->data['ruang']) ;
      $this->load->view('pimpinan/peminjaman',$this->data);
      
    }

    public function updateRuang()
    {
      $data = [
        'STATUS_PRUANG' => $this->input->post('acceptment')
      ];
      $mailer =  [
        'to' => NULL,
        'name' => NULL,
        'obj' => NULL,
        'keterangan' => NULL,
        'date_in' => NULL,
        'time_in' => NULL,
        'date_out' => NULL,
        'time_out' => NULL,
        'status' => NULL
      ];
      $id = $this->input->post('id');
      if ($this->M_pruang->update($data,$id)) {
        $get = $this->M_pruang->getwherePruang($id);
        if ($get!=NULL) {
          $mailer['to'] = $get->EMAIL_PRUANG;
          $mailer['name'] = $get->NAMA_PRUANG;
          $mailer['keterangan'] = $get->KETERANGAN_PRUANG;
          $in = explode(' ',$get->PRUANG_IN);
          $mailer['date_in'] = $in[0];
          $mailer['time_in'] = $in[1];
          $out = explode(' ',$get->PRUANG_OUT);
          $mailer['date_out'] = $out[0];
          $mailer['time_out'] = $out[1];
          if ($get->STATUS_PRUANG == 1) {
            $mailer['status'] = 'DISETUJUI';
          }else if($get->STATUS_PRUANG == -1){
            $mailer['status'] = 'DITOLAK';
          }else {
            $mailer['status'] = 'MASIH DALAM PROSES';
          }
          $mailer['obj'] = $get->NAMA_RUANG ." - " .$get->NAMA_GEDUNG; 
          $this->mailer_new->send($mailer);
        }
        redirect('pimpinan/peminjaman','refresh');    
      }else {

      }
    }

    public function updateBarang()
    {
      $data = [
        'STATUS_PBARANG' => $this->input->post('acceptment')
      ];
      $mailer =  [
        'to' => NULL,
        'name' => NULL,
        'obj' => NULL,
        'keterangan' => NULL,
        'date_in' => NULL,
        'time_in' => NULL,
        'date_out' => NULL,
        'time_out' => NULL,
        'status' => NULL
      ];
      $id = $this->input->post('id');
      if ($this->M_pbarang->update($data,$id)) {
        $get = $this->M_pbarang->getwherePbarang($id);
        if ($get!=NULL) {
          $mailer['to'] = $get->EMAIL_PBARANG;
          $mailer['name'] = $get->NAMA_PBARANG;
          $mailer['keterangan'] = $get->KETERANGAN_PBARANG;
          $in = explode(' ',$get->PBARANG_IN);
          $mailer['date_in'] = $in[0];
          $mailer['time_in'] = $in[1];
          $out = explode(' ',$get->PBARANG_OUT);
          $mailer['date_out'] = $out[0];
          $mailer['time_out'] = $out[1];
          if ($get->STATUS_PBARANG == 1) {
            $mailer['status'] = 'DISETUJUI';
          }else if($get->STATUS_PBARANG == -1){
            $mailer['status'] = 'DITOLAK';
          }else {
            $mailer['status'] = 'MASIH DALAM PROSES';
          }
          $mailer['obj'] = $get->NAMA_BARANG ." - " .$get->NAMA_RUANG ." - " .$get->NAMA_GEDUNG; 
          $this->mailer_new->send($mailer);
        }
        redirect('pimpinan/peminjaman','refresh');    
      }else {

      }
    }
  }

  /* End of file Ruang.php */
  ?>