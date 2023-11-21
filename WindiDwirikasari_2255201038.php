<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $nama;
  private $nim;
  private $mataKuliah;
  private $dosenKiler;


  // Methods
  function set_nama($nama) {
    $this->nama = $nama;
  }
  function get_nama() {
    return $this->nama;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matakuliah($matakuliah) {
    $this->matakuliah = $matakuliah;
  }
  function get_matakuliah() {
    return $this->matakuliah;
  }
  function set_dosenkiler($dosenkiler) {
    $this->dosenkiler = $dosenkiler;
  }
  function get_dosenkiler() {
    return $this->dosenkiler;
  }
}

$WindiDwiRikasari = new mahasiswa();
$WindiDwiRikasari->set_nama('WindiDwiRikasari');
echo $WindiDwiRikasari->get_nama();
echo "<br>";
$WindiDwiRikasari->set_nim('2255201038');
echo $WindiDwiRikasari->get_nim();
echo "<br>";
$WindiDwiRikasari->set_matakuliah('pbo');
echo $WindiDwiRikasari->get_matakuliah();
echo "<br>";
$WindiDwiRikasari->set_dosenkiler('wanda');
echo $WindiDwiRikasari->get_dosenkiler();


?>
 
</body>
</html>
