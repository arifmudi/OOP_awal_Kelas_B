<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $Cita_cita;

  // Methods
  function __construct($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $Cita_cita){
  $this->Nama = $Nama;
  $this->NIM = $NIM; 
  $this->Mata_Kuliah = $Mata_Kuliah;
  $this->Dosen_Killer = $Dosen_Killer;
  $this->Cita_cita = $Cita_cita;
  }

  function get_nama() {
    return $this->Nama;
  }
  function get_nim() {
    return $this->NIM;
  }
  function get_matkul() {
    return $this->Mata_Kuliah;
  }
  function get_dokil() {
    return $this->Dosen_Killer;
  }
  function get_cita() {
    return $this->Cita_cita;
  }


}


$djoel = new Mahasiswa('Djoel jalalianifallah', '2155201008','program berorientasi objek','bapak arif mudi priyatno','jadi milyarder'  );
echo $djoel->get_nama();
echo $djoel->get_nim();
echo $djoel->get_matkul();
echo $djoel->get_dokil();
echo $djoel->get_cita();
?>
