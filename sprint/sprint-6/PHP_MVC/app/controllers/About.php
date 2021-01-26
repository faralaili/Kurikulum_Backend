<?php

class About extends Controller{

 public function index($nama ='kur-kur', $pekerjaan ='membasmi'){
  $data['nama'] = $nama;
  $data['pekerjaan'] = $pekerjaan;
  $data['title'] = 'Halaman About';
  $this->view('templates/header', $data);
  $this->view('about/index',$data);
  $this->view('templates/footer');
 }

 public function page()
 {
     $data['title'] = 'my pages';
     $this->view('templates/header', $data);
     $this->view('about/page',$data);
     $this->view('templates/footer');
  }
}
