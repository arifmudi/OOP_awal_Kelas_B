<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa{
  // Properties
  private $name;
  private $nim;
  private $mata_kuliah;
  private $dosen_killer;

  // Methods
  function __construct ($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $cita_cita ) {
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
   function set_mata_kuliah($mata_kuliah) {
    $this->mata_kuliah= $mata_kuliah;
  }
  function get_mata_kuliah() {
    return $this->mata_kuliah;
  }
  function set_dosen_killer($dosen_killer) {
    $this->dosen_killer= $dosen_killer;
  }
  function get_dosen_killer() {
    return $this->dosen_killer;
  }
}

$dina = new mahasiswa();
$dina->set_name('dina');
$dina->set_nim('2255201057');
$dina->set_mata_kuliah('pbo');
$dina->set_dosen_killer('PakArif');

echo $dina->get_name();
echo "<br>";
echo $dina ->get_nim();
echo "<br>";
echo $dina->get_mata_kuliah();
echo "<br>";
echo $dina ->get_dosen_killer();
?
 
</body>
</html>
