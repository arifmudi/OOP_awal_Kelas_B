<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $Cita_cita;


  // Methods
  function__construct($Nama, $NIM, $Mata_kuliah, $Dosen_Killer, $Cita_cita){
  $this->Nama = $Nama;
  $this->NIM = $NIM;
  $this->Mata_Kuliah = $Mata_Kuliah;
  $this->Dosen_Killer  = $Dosen_Killer;
  $this->Cita_cita = $Cita_cita;
}
  function get_nama() {
    return $this->Nama;
  }
  function get_nim() {
    return $this->NIM;
  }
  function get_nim($NIM) {
    $this->nim = $NIM;
  }
  function get_matkul() {
    return $this->Mata_Kuliah;
  }
  function set_dokil() {
    return $this->Dosen_Killer;
  }
  function get_cita() {
    return $this->Cita_cita;
  }
 
  
}

$roqi = new Mahasiswa('Roqi Nazif', '2155201028', 'PBO'
echo $roqi->get_nama();
echo $roqi->get_nim();
echo $roqi->get_matkul();
echo $roqi->get_dokil();
echo $roqi->get_cita();

