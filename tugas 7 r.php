<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $Cita_cita;
  private $Hobi;

  // Methods
  function __construct($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $Cita_cita, $Hobi){
  $this->Nama = $Nama;
  $this->NIM = $NIM; 
  $this->Mata_Kuliah = $Mata_Kuliah;
  $this->Dosen_Killer = $Dosen_Killer;
  $this->Cita_cita = $Cita_cita;
  $this->Hobi = $Hobi;
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
  function get_hobi() {
    return $this->Hobi;
  }
}

// Universitas is inherited from Mahasiswa
class Universitas extends Mahasiswa {
  public function salam() {
    echo "selamat datang dikampus kami. "; 
  }
}

$selvi = new Universitas('Rofiq Nazif', '2155201027','program berorientasi objek','bapak arif mudi priyatno','istri sunwoo','travelling'  );
echo $rofiq->salam();   
echo "<br>";
echo $rofiq->get_nama();
echo "<br>";
echo $rofiq->get_nim();
echo "<br>";
echo $rofiq->get_matkul();
echo "<br>";
echo $rofiq->get_dokil();
echo "<br>";
echo $rofiq->get_cita();
echo "<br>";
echo $rofiq->get_hobi();
?>