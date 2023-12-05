<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $Cita_cita;

  // Methods
  function __construct($Name, $NIM, $Mata_kuliah, $Dosen_Killer, $Cita_cita) {
    $this->Nama = $Name;
    $this->NIM = $NIM;
    $this->Mata_Kuliah = $Mata_kuliah;
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

$selvi = new Mahasiswa('Devi Selvi Yanti','2155201006','program berorientasi objek','bapak arif mudi priyatno','istrisunwoo');
echo $selvi->get_nama();
echo "<br>";
echo $selvi->get_nim();
echo "<br>";
echo $selvi->get_matkul();
echo "<br>";
echo $selvi->get_dokil();
echo "<br>";
echo $selvi->get_cita();
?>
