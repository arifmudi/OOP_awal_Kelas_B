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

$DesriInsani = new Mahasiswa();
$DesriInsani->set_Nama('DesriInsani');
echo $DesriInsani->get_Nama();
echo "<br>";
$DesriInsani->set_NIM('2255201016');
echo $DesriInsani->get_NIM();
echo "<br>";
$DesriInsani->set_MataKuliah('PBO');
echo $DesriInsani->get_MataKuliah();
echo "<br>";
$DesriInsani->set_dosenkiller('Melati');
echo $DesriInsani->get_dosenkiller();

?>
 
</body>
</html>
