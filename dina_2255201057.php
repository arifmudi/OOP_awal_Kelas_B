
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
  private $citacita;

  public function __construct($Nama, $Nim, $MataKuliah, $DosenKiller, $citacita){
    $this->Nama = $Nama;
    $this->Nim = $Nim;
    $this->MataKuliah = $MataKuliah;
    $this->DosenKiller = $DosenKiller;
    $this->citacita = $citacita;
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
  function get_citacita() {
    return $this->citacita;
  }
}

$dina = new Mahasiswa('dina','2255201057','PBO','PakArif', 'jaya');
echo $dina->get_Nama();
echo "<br>";
echo $dina->get_Nim();
echo "<br>";
echo $dina->get_MataKuliah();
echo "<br>";
echo $dina->get_DosenKiller();
echo "<br>";
echo $dina->get_citacita();
?>

</body>
</html>
