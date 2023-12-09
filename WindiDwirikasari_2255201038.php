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
  private $hobby;

  // Methods
  function __construct($nama,$nim,$mataKuliah,$dosenKiler,$citacita,$hobby) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->mataKuliah= $mataKuliah;
    $this->dosenKiler = $dosenKiler;
    $this->citacita = $citacita;
    $this->hobby = $hobby;
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
 function get_hobby() {
    return $this->hobby;
 }
}
class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami';
  }
}

$WindiDwiRikasari = new Universitas('WindiDwiRikasari','2255201038','pbo','wanda','berhasil','makan');
echo $WindiDwiRikasari->salam();
echo "<br>";
echo $WindiDwiRikasari->get_nama();
echo "<br>";
echo $WindiDwiRikasari->get_nim();
echo "<br>";
echo $WindiDwiRikasari->get_mataKuliah();
echo "<br>";
echo $WindiDwiRikasari->get_dosenKiler();
echo "<br>";
echo $WindiDwiRikasari->get_citacita();
echo "<br>";
echo $WindiDwiRikasari->get_hobby();
?>
 
</body>
</html>
