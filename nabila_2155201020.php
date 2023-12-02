<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $cita_cita;

  // Methods
  function __construct($Nama, $Nim, $Mata_kuliah, $Dosen_killer, $Cita_cita){
    $this->Nama = $nama;
    $this->Nim = $Nim;
    $this->Mata_kuliah = $Mata_kuliah;
    $this->Dosen_killer = $Dosen_killer;
    $this->Cita_cita = $Cita_cita; 
  }

  function get_nama() {
    return $this->Nama;
  }
  function set_nim($NIM) {
    return $this->nim = $NIM;
  }
  function get_matkul() {
    return $this->mata_kuliah;
  }
  function get_doskil() {
   return $this->matkul = $Mata_Kuliah;
  }
  function get_cita() {
   return $this->ciita_cita;
  }
  
  
}

$nabila = new Mahasiswa('nabila rahmi', '2155201020','program berorientai objek','iSTRIjhe');
echo $nabila->get_nama();
echo $nabila->get_nim();
$nabila->set_matkul();
echo $nabila->get_matkul();
$nabila->set_doskil();
echo $nabila->get_doskil();
?>