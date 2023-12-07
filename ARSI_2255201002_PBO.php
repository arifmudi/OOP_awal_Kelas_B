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
  private $hobby;
  
  public function __construct($name, $nim, $mata_Kuliah, $dosen_killer, $cita_cita, $hobby){
    $this->name = $name;
    $this->nim = $nim;
    $this->mata_Kuliah = $mata_Kuliah;
    $this->dosen_killer = $dosen_killer;
    $this->cita_cita = $cita_cita;
    $this->hobby = $hobby;
  }
  
  function get_name(){
    return $this->name;
  }

  function get_nim() {
    return $this->nim;
  }

  function get_mata_Kuliah() {
    return $this->mata_Kuliah;
  }

  function get_dosen_killer() {
    return $this->dosen_killer;
  }

  function get_cita_cita() {
    return $this->cita_cita;
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

$ARSI_DEWI_SAPUTRI = new Universitas('ARSI','2255201002','pbo','arif mudi priyanto','arsitek dan pengusaha','masak');
echo $ARSI_DEWI_SAPUTRI ->Salam();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_name();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_nim();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_mata_Kuliah();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_dosen_killer();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_cita_cita();
echo "<br>";
echo $ARSI_DEWI_SAPUTRI ->get_hobby();

?>
 
</body>
</html>
