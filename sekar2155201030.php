
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

$sekar = new Mahasiswa();
$sekar->set_nama('Sekar melati');
echo $sekar->get_nama();
$sekar->set_nim('2155202030');
echo "\n";
echo $sekar->get_nim();
$sekar->set_matkul('PBO');
echo $sekar->get_matkul();
$sekar->set_doskil('pak arif mudi priyatno');
echo $sekar->get_doskil();
?>
 