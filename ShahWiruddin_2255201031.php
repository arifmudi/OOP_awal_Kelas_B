<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties 
  private $Nama;
  private $NIM;
  private $MataKuliah;
  private $dosenkiller;

  // Methods
  function set_Nama($Nomo) {
    $this->Nama = $Nomo;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_NIM($NIM){
    $this-> NIM = $NIM;
  }
  function get_NIM(){
    return $this->NIM;
  }
  function set_MataKuliah($MataKuliah){
    $this-> MataKuliah = $MataKuliah;
  }
  function get_MataKuliah(){
    return $this -> MataKuliah;
  }
  function set_dosenkiller($dosenkiller){
    $this -> dosenkiller = $dosenkiller;
  }
  function get_dosenkiller(){
    return $this -> dosenkiller;
  }
}

$ShahWiruddin = new Mahasiswa();
$ShahWiruddin->set_Nama('ShahWiruddin');
echo $ShahWiruddin->get_Nama();
echo "<br>";
$ShahWiruddin->set_NIM('2255201031');
echo $ShahWiruddin->get_NIM();
echo "<br>";
$ShahWiruddin->set_MataKuliah('PBO');
echo $ShahWiruddin->get_MataKuliah();
echo "<br>";
$ShahWiruddin->set_dosenkiller('Megawati');
echo $ShahWiruddin->get_dosenkiller();

?>
 
</body>
</html>