<?php

class mailer_new  
{
  private $config = [
    'mailtype'  => 'html',
    'charset'   => 'utf-8',
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',
    'smtp_user' => 'gamehafidz08@gmail.com',
    'smtp_pass' => 'h44f11dz',
    'smtp_port' => 465,
    'crlf'      => "\r\n",
    'newline'   => "\r\n"
  ];

  private $CI;



  public function send($data)
  {
    $CI =& get_instance();
    $CI->load->library('email',$this->config);

      $CI->email->from('no-reply@invent.com', 'inventaris-Club');

        // Email penerima
      $CI->email->to($data['to']); // Ganti dengan email tujuan kamu

      // Subject email
      $CI->email->subject('Status Peminjamanmu');

      // Isi email
      $CI->email->message("Hallo ! <strong>".$data['name']."</strong> .<br><br> Status Peminjamanmu telah diperbarui.<br>Peminjaman <strong>".$data['obj']."</strong> dengan keterangan <p>".$data['keterangan']."</p> Pada Tanggal : ".$data['date_in'] ." Jam : ".$data['time_in']." <br>Sampai Tanggal : ".$data['date_out'] ." Jam : ".$data['time_out']." <br> Berstatus : <h3>".$data['status']."</h3>");

      // Tampilkan pesan sukses atau error
      if ($CI->email->send()) {
          echo "<script>alert('Email Terkirim')</script>";

      } else {
          echo "<script>alert('Error! email tidak dapat dikirim.')</script>";
      }    
  }
  
}


?>