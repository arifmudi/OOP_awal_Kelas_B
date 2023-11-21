<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $Nim;
  private $MataKuliah;
  private $DosenKiller;

  // Methods
  function set_Nama($Nama) {
    $this->Nama = $Nama;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_Nim($Nim) {
    $this->Nim = $Nim;
  }
  function get_Nim() {
    return $this->Nim;
  }
  function set_MataKuliah($MataKuliah) {
    $this->MataKuliah = $MataKuliah;
  }
  function get_MataKuliah() {
    return $this->MataKuliah;
  }
  function set_DosenKiller($DosenKiller) {
    $this->DosenKiller = $DosenKiller;
  }
  function get_DosenKiller() {
    return $this->DosenKiller;
  }
  
}

$EraDwiMustika = new Mahasiswa();
$EraDwiMustika->set_Nama('EraDwiMustika');
echo $EraDwiMustika->get_Nama();
echo "<br>";
$EraDwiMustika->set_Nim('2255201017');
echo $EraDwiMustika->get_Nim();
echo "<br>";
$EraDwiMustika->set_MataKuliah('Pbo');
echo $EraDwiMustika->get_MataKuliah();
echo "<br>";
$EraDwiMustika->set_DosenKiller('era');
echo $EraDwiMustika->get_DosenKiller();

?>
 
</body>
</html>
