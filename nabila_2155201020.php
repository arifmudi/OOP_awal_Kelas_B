<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $citacita;

  // Methods
  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
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
  function get_dosen_killer() {
    return $this->Dosen_Killer;
  }
  function get_citacita(){
    return $this->citacita;
  }
}

$nabila = new Mahasiswa ('nabila', '2155201020', 'pbo', 'pak arif', ''),
echo $nabila->get_nama();
echo "\n";
echo $nabila->get_nim();
echo "\n";
echo $nabila->get_matkul();
echo "\n";
echo $nabila->get_dosen_killer();
echo "\n";
echo $nabila->get_citacita();






?>

</body>
</html>
