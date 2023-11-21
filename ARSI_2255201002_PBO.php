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

$ARSI_DEWI_SAPUTRI = new mahasiswa();
$ARSI_DEWI_SAPUTRI->set_name('ARSI_DEWI_SAPUTRI');
$ARSI_DEWI_SAPUTRI->set_nim('2255201002');
$ARSI_DEWI_SAPUTRI->set_mata_kuliah('pbo');
$ARSI_DEWI_SAPUTRI->set_dosen_killer('arif mudi priyanto');

echo $ARSI_DEWI_SAPUTRI ->get_name();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_nim();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_mata_kuliah();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_dosen_killer();






?>
 
</body>
</html>
