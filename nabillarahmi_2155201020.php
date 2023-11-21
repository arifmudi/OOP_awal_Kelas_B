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

$nabilla = new Mahasiswa();
$nabilla->set_nama('nabilla rahmi');
echo $nabilla->get_nama();
$nabilla->set_nim('2155202020');
echo "\n";
echo $nabilla->get_nim();
$sekar->set_matkul('PBO');
echo $nabilla->get_matkul();
$nabilla->set_doskil('pak arif mudi priyatno');
echo $sekar->get_doskil();
?>
