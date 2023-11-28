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
  private $citacita;


  // Methods
  function __construct($nama,$nim,$mataKuliah,$dosenKiler,$citacita) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->mataKuliah= $mataKuliah;
    $this->dosenKiler = $dosenKiler;
    $this->citacita = $citacita;
  }
  function get_nama() {
    return $this->nama;
  } 
  function get_nim() {
    return $this->nim; 
  }
  function get_mataKuliah() {
    return $this->mataKuliah;
  }
  function get_dosenKiler() {
    return $this->dosenKiler;
  }
  function get_citacita() {
    return $this->citacita;
 }
}

$WindiDwiRikasari = new mahasiswa('WindiDwiRikasari','2255201038','pbo','wanda','berhasil');
echo $WindiDwiRikasari->get_nama();
echo "<br>";
echo $WindiDwiRikasari->get_nim();
echo "<br>";
echo $WindiDwiRikasari->get_mataKuliah();
echo "<br>";
echo $WindiDwiRikasari->get_dosenKiler();
echo "<br>";
echo $WindiDwiRikasari->get_citacita();


?>
 
</body>
</html>
