//Tugas Function

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

  // Methods
  function set_Nama($Nama) {
    $this->Nama = $Nama;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_NIM($NIM) {
    $this->NIM = $NIM;
  }
  function get_NIM() {
    return $this->NIM;
  }
  function set_Mata_Kuliah($Mata_Kuliah) {
    $this->Mata_Kuliah = $Mata_Kuliah;
  }
  function get_Mata_Kuliah() {
    return $this->Mata_Kuliah;
  }
  function set_Dosen_Killer($dk) {
    $this->Dosen_Killer = $dk;
  }
  function get_Dosen_Killer() {
    return $this->Dosen_Killer;
  }
}

$fathan = new Mahasiswa();
$fathan->set_Nama('fathan');
$fathan->set_NIM('2155201033');
$fathan->set_Mata_Kuliah('PBO');
$fathan->set_Dosen_Killer('Pak_Arif');

echo $fathan->get_Nama();
echo "<br>";
echo $fathan->get_NIM();
echo "<br>";
echo $fathan->get_Mata_Kuliah();
echo "<br>";
echo $fathan->get_Dosen_Killer();
?>
 
</body>
</html>
