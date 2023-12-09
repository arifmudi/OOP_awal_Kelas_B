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

$dandy = new Mahasiswa();
$dandy->set_nama('dandy aditya rifael');
echo $dandy->get_nama();
$dandy->set_nim('2155201005');
echo $dandy->get_nim();
$dandy->set_matkul('program berorientasi objek');
echo $dandy->get_matkul();
$dandy->set_dokil('bapak arif mudi priyatno');
echo $dandy->get_dokil();
?>