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
  private $Hobby;

  // Methods
  function __construct($Nama,$Nim,$MataKuliah,$DosenKiller,$Citacita,$Hobby) {
    $this->Nama = $Nama;
    $this->Nim = $Nim;
    $this->MataKuliah = $MataKuliah;
    $this->DosenKiller = $DosenKiller;
    $this->Citacita = $Citacita;
    $this->Hobby = $Hobby;
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
  function get_Hobby() {
    return $this->Hobby;
  }
  
}

class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami';
  }
}

$EraDwiMustika = new Universitas('EraDwiMustika','2255201017','Pbo','era','sukses','dolan');
echo $EraDwiMustika->Salam();
echo "<br>";
echo $EraDwiMustika->get_Nama();
echo "<br>";
echo $EraDwiMustika->get_Nim();
echo "<br>";
echo $EraDwiMustika->get_MataKuliah();
echo "<br>";
echo $EraDwiMustika->get_DosenKiller();
echo "<br>";
echo $EraDwiMustika->get_Citacita();
echo "<br>";
echo $EraDwiMustika->get_Hobby();

?>
 
</body>
</html>
