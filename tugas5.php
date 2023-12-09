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

$Roqi = new Mahasiswa();
$Roqi->set_nama('Roqi Nazif');
echo $Roqi->get_nama();
$Roqi->set_nim('2155201028s');
echo $Roqi->get_nim();
$Roqi->set_matkul('program berorientasi objek');
echo $Roqi->get_matkul();
$Roqi->set_dokil('bapak arif mudi priyatno');
echo $Roqi->get_dokil();
?>