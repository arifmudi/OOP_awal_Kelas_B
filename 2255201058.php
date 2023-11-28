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
  private $citacita;

  public function __construct($name, $nim, $mata_kuliah, $dosen_killer, $citacita){
    $this->nama =$name;
    $this->nim =$nim;
    $this->mata_kuliah =$mata_kuliah;
    $this->dosen_killer =$dosen_killer;
    $this->citacita =$citacita;

  // Methods
  function get_name() {
    return $this->name;
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
}

$sri_wiji_astuti = new mahasiswa('Sri_Wiji_Astuti', '2255201058', 'pbo', 'arif mudi priyanto.s.t.m.kom', 'pengusaha');
echo $sri_wiji_astuti ->get_name();
echo "<br>";
echo $sri_wiji_astuti ->get_nim();
echo "<br>";
echo $sri_wiji_astuti ->get_mata_kuliah();
echo "<br>";
echo $sri_wiji_astuti ->get_dosen_killer();
echo "<br>";
echo $sri_wiji_astuti ->get_citacita();





?>
 
</body>
</html>
