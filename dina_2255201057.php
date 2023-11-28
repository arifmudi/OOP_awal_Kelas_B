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

  public function__construct($nama,$nim,$matakuliah,$dosenkiller,$citacita){
  $this->nama = $nama;
  $this->nim = $nim;
  $this->matakuliah = $matakuliah;
  $this->dosenkiller = $dosenkiller;
  $this->citacita = $citacita;
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

$dina = new mahasiswa('dina', '2255201057', 'pbo', 'PakArif');

echo $dina->get_name();
echo "<br>";
echo $dina ->get_nim();
echo "<br>";
echo $dina->get_mata_kuliah();
echo "<br>";
echo $dina ->get_dosen_killer();
echo "<br>";
echo $dina ->get_citacita();




?>
 
</body>
</html>
