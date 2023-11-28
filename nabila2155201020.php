<?php
class Mahasiswa {
  // Properties
  public $Nama;
  public $NIM;
  public $Mata_Kuliah;
  public $Dosen_Killer;
  public $Cita_cita;

  // Methods
  function __construct($Nama, $Mata_kuliah, $Dosen_killer, $cita_cita){
  $this->Nama = $Nama;
  $this->NIM = $NIM;
  $this->mata_kuliah  = $mata_kuliah;
  $this->Dosen_killer = $Dosen_killer;
  $this->cita_cita = $cita_cita;
  }
  function get_nama() {
    return $this->nama;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_matkul() {
    return $this->matkul;
  }
  function get_doskil() {
    return $this->doskil;
  }
  function get_cita() {
    return $this->Cita_cita;
  }
}

$nabila = new Mahasiswa('nabila rahmi', '2155201020', 'pemrograman berorientasi objek','istritae);
echo $nabila->get_nama();
echo $nabila->get_nim();
echo $nabila->get_matkul();
echo $nabila->get_doskil();
echo $nabila->get_cita();
?>
