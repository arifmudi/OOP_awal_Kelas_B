<?php
class Mahasiswa {
  // Properties
  public $Nama;
  public $NIM;
  public $Mata_Kuliah;
  public $Dosen_Killer;


  // Methods
  function set_nama($nama) {
    $this->nama = $nama;
  }
  function get_nama() {
    return $this->nama;
  }
  function set_nim($NIM) {
    $this->nim = $NIM;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($Mata_Kuliah) {
    $this->matkul = $Mata_Kuliah;
  }
  function get_matkul() {
    return $this->matkul;
  }
  function set_doskil($Dosen_Killer) {
    $this->doskil = $Dosen_Killer;
  }
  function get_doskil() {
    return $this->doskil;
  }
}

$nabila = new Mahasiswa();
$nabila->set_nama('nabila rahmi');
echo $nabila->get_nama();
$nabila->set_nim('2155202020');
echo "\n";
echo $nabila->get_nim();
$nabila->set_matkul('PBO');
echo $nabila->get_matkul();
$nabila->set_doskil('pak arif mudi priyatno');
echo $nabila->get_doskil();
?>