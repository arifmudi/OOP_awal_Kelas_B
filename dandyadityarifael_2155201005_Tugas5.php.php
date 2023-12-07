

<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;

  // Methods
  function __construct ($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $cita_cita ) {
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->Mata_Kuliah = $Mata_Kuliah;
    $this->Dosen_Killer = $Dosen_Killer;
  }
  function get_Nama() {
    return $this->Nama;
 }
  function get_NIM() {
    return $this->NIM;
  }
  function get_Mata_Kuliah() {
    return $this->Mata_Kuliah;
  }
  function get_Dosen_Killer() {
    return $this->Dosen_Killer;
  }
}

$dandy = new Mahasiswa("dandy", "2255201026", "PBO", "Pak_Arif", "Orang_Sukses");


echo $dandy->get_Nama();
echo "<br>";
echo $dandy->get_NIM();
echo "<br>";
echo $dandy->get_Mata_Kuliah();
echo "<br>";
echo $dandy->get_Dosen_Killer();
echo "<br>";
?>
 
</body>
</html>
