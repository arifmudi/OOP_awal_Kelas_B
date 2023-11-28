
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
  $this->Mata_Kuliah = $<Mata_Kuliah;
  $this->Dosen_Killer = $Dosen_Killer;
  $this->Cita_cita = $Cita_cita;
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

$sekar = new Mahasiswa('Sekar Melati', '2155201030', 'PBO', 'pak arif mudi priyatno', 'istrijekey');
echo $sekar->get_nama();
echo $sekar->get_nim();
echo $sekar->get_matkul();
echo $sekar->get_doskil();
echo $sekar->get_cita();
?>
 
