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

$PutraRamadan = new Mahasiswa();
$PutraRamadan->set_Nama('PutraRamadan');
echo $PutraRamadan->get_Nama();
echo "<br>";
$PutraRamadan->set_NIM('2255201005');
echo $PutraRamadan->get_NIM();
echo "<br>";
$PutraRamadan->set_MataKuliah('PBO');
echo $PutraRamadan->get_MataKuliah();
echo "<br>";
$PutraRamadan->set_dosenkiller('Citra');
echo $PutraRamadan->get_dosenkiller();

?>
 
</body>
</html>