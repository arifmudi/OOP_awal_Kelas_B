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

$roqi = new Mahasiswa();
$roqi->set_nama('Roqi Nazif');
echo $roqi->get_nama();
$roqi->set_nim('2155201028');
echo "\n";
echo $roqi->get_nim();
$roqi->set_matkul('PBO');
echo $roqi->get_matkul();
$roqi->set_doskil('pak arif mudi priyatno');
echo $roqi->get_doskil();
?>
