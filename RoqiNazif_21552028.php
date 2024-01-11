<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties 
  private $Nama;
  private $nim;
  private $MataKuliah;
  private $dosenkiller;

  // Methods
  function set_Nama($nama) {
    $this->Nama = $nama;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_nim($nim){
    $this-> nim = $nim;
  }
  function get_nim(){
    return $this->nim;
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

$roqinazif = new Mahasiswa();
$roqinazif->set_Nama('roqinazif');
echo $roqinazif->get_Nama();
echo "<br>";
$roqinazif->set_nim('2155201028');
echo $roqinazif->get_nim();
echo "<br>";
$roqinazif->set_MataKuliah('PBO');
echo $roqinazif->get_MataKuliah();
echo "<br>";
$roqinazif->set_dosenkiller('pakarif');
echo $roqinazif->get_dosenkiller();

?>

</body>
</html>
