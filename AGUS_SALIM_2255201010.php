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

$Agussalim = new Mahasiswa();
$Agussalim->set_Nama('Agussalim');
echo $Agussalim->get_Nama();
echo "<br>";
$Agussalim->set_NIM('2255201010');
echo $Agussalim->get_NIM();
echo "<br>";
$Agussalim->set_MataKuliah('PBO');
echo $Agussalim->get_MataKuliah();
echo "<br>";
$Agussalim->set_dosenkiller('Megawati');
echo $Agussalim->get_dosenkiller();

?>
 
</body>
</html>