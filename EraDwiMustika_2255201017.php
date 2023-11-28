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
  private $Citacita;

  // Methods
  function __construct($Nama,$Nim,$MataKuliah,$DosenKiller,$Citacita) {
    $this->Nama = $Nama;
    $this->Nim = $Nim;
    $this->MataKuliah = $MataKuliah;
    $this->DosenKiller = $DosenKiller;
    $this->Citacita = $Citacita;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function get_Nim() {
    return $this->Nim;
  }
  function get_MataKuliah() {
    return $this->MataKuliah;
  }
  function get_DosenKiller() {
    return $this->DosenKiller;
  }
  function get_Citacita() {
    return $this->Citacita;
  }
  
}

$EraDwiMustika = new Mahasiswa('EraDwiMustika','2255201017','Pbo','era','sukses');
echo $EraDwiMustika->get_Nama();
echo "<br>";
echo $EraDwiMustika->get_Nim();
echo "<br>";
echo $EraDwiMustika->get_MataKuliah();
echo "<br>";
echo $EraDwiMustika->get_DosenKiller();
echo "<br>";
echo $EraDwiMustika->get_Citacita();

?>
 
</body>
</html>
