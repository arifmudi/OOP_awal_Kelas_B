<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_kuliah;
  private $Dosen_killer;

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
    function set_Mata_kuliah($Mata_kuliah) {
    $this->Mata_kuliah = $Mata_kuliah;
  }
  function get_Mata_kuliah() {
    return $this->Mata_kuliah;
  }
    function set_Dosen_killer($Dosen_killer) {
    $this->Dosen_killer = $Dosen_killer;
  }
  function get_Dosen_killer() {
    return $this->Dosen_killer;
  }
}

$nata = new Mahasiswa();

$nata->set_Nama('nata');
$nata->set_NIM('2255201007');
$nata->set_Mata_kuliah('pbo');
$nata->set_Dosen_killer('pak arif');

echo $nata->get_Nama();
echo "<br>";
echo $nata->get_NIM();
echo "<br>";
echo $nata->get_Mata_kuliah();
echo "<br>";
echo $nata->get_Dosen_killer();
?>
 
</body>
</html>