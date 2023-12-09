<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;

  // Methods
  function set_nama($Name) {
    $this->Nama = $Name;
  }
  function get_nama() {
    return $this->Nama;
  }
  function set_nim($NIM) {
    $this->NIM = $NIM;
  }
  function get_nim() {
    return $this->NIM;
  }
  function set_matkul($Mata_Kuliah) {
    $this->Mata_Kuliah = $Mata_Kuliah;
  }
  function get_matkul() {
    return $this->Mata_Kuliah;
  }
  function set_dokil($Dosen_Killer) {
    $this->Dosen_Killer = $Dosen_Killer;
  }
  function get_dokil() {
    return $this->Dosen_Killer;
  }
}

$Rofiq = new Mahasiswa();
$Rofiq->set_nama('Rofiq Nazif');
echo $Rofiq->get_nama();
$Rofiq->set_nim('2155201027');
echo $Rofiq->get_nim();
$Rofiq->set_matkul('program berorientasi objek');
echo $Rofiq->get_matkul();
$Rofiq->set_dokil('bapak arif mudi priyatno');
echo $Rofiq->get_dokil();
?>