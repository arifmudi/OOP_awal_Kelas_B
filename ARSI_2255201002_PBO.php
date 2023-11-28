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
  private $cita_cita;
  
  // Methods
  function 
  __construct($name,$nim,$mata_kuliah,$dosen_killer,$cita_cita){
    $this->name = $name;
    $this->nim = $nim;
    $this->mata_kuliah = $mata_kuliah;
    $this->dosen_killer = $dosen_killer;
    $this->cita_cita = $cita_cita;
  }
  
  function get_name(){
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

  function get_cita_cita() {
    return $this->cita_cita;
  }
}

$ARSI_DEWI_SAPUTRI = new mahasiswa('ARSI_DEWI_SAPUTRI','2255201002','pbo','arif mudi priyanto','arsitek dan pengusaha');


echo $ARSI_DEWI_SAPUTRI ->get_name();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_nim();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_mata_kuliah();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_dosen_killer();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_cita_cita();







?>
 
</body>
</html>
