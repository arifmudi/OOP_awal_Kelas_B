<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa{
  // Properties
  private $nama;
  private $nim;
  private $mata_kuliah;
  private $dosen_killer;
  private $citacita;
  private $hobi;

  public function __construct($nama, $nim, $mata_kuliah, $dosen_killer, $citacita){
    $this->nama =$nama;
    $this->nim =$nim;
    $this->mata_kuliah =$mata_kuliah;
    $this->dosen_killer =$dosen_killer;
    $this->citacita =$citacita;
    $this->hobi =$hobi;
   }

  // Methods
  function get_nama() {
    return $this->nama;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_mata_kuliah() {
    return $this->mata_kuliah;
  }
  function get_dosen_killer() {
    return $this->dosen_killer;
  }
    function get_citacita() {
    return $this->citacita;
  }
    function get_hobi() {
    return $this->hobi;
  }
}
  class universitas extends mahasiswa {
  public function salam() {
echo 'Selamat Datang Di Kampus Kami';
  }
}

$sri_wiji_astuti = new universitas('Sri_Wiji_Astuti', '2255201058', 'pbo', 'arif mudi priyanto.s.t.m.kom', 'pengusaha','membaca');
echo $sri_wiji_astuti ->salam();
echo "<br>";
echo $sri_wiji_astuti ->get_nama();
echo "<br>";
echo $sri_wiji_astuti ->get_nim();
echo "<br>";
echo $sri_wiji_astuti ->get_mata_kuliah();
echo "<br>";
echo $sri_wiji_astuti ->get_dosen_killer();
echo "<br>";
echo $sri_wiji_astuti ->get_citacita();
echo "<br>";
echo $sri_wiji_astuti ->get_hobi();




?>
 
</body>
</html>
