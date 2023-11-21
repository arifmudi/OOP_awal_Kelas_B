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
  function set_dosen_killer($Dosen_Killer) {
    $this->Dosen_Killer = $Dosen_Killer;
  }
  function get_dosen_killer() {
    return $this->Dosen_Killer;
  }
}

$almann = new Mahasiswa();
$almann->set_nama('Alman Azizi');
echo $almann->get_nama();
echo "\n";
$almann->set_nim('2255201001');
echo $almann->get_nim();
echo "\n";
$almann->set_matkul('pbo');
echo $almann->get_matkul();
echo "\n";
$almann->set_dosen_killer('pak arif ');
echo $almann->get_dosen_killer();
echo "\n";
