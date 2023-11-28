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

$sri_utami= new mahasiswa();
$sri_utami->set_name('Sri_Utami');
$sri_utami->set_nim('2255201032');
$sri_utami->set_mata_kuliah('pbo');
$sri_utami->set_dosen_killer('Arif Mudi Priyanto.s.t.m.kom');

echo $sri_utami->get_name();
echo "<br>";
echo $sri_utami ->get_nim();
echo "<br>";
echo $sri_utami ->get_mata_kuliah();
echo "<br>";
echo $sri_utami->get_dosen_killer();






?>
 
</body>
</html>