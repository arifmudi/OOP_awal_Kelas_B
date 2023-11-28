<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $citacitaden;

  // Methods
   public function __construct($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $citacitaden){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->Mata_Kuliah = $Mata_Kuliah;
    $this->Dosen_Killer = $Dosen_Killer;
    $this->citacitaden =  $citacitaden;
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
    function get_citacitaden() {
    return $this->citacitaden;
  }
}

$almann = new Mahasiswa('alman', '2255201001', 'pbo', 'pak arif', 'rangkayo');
echo $almann->get_Nama();
echo "<br>";
echo $almann->get_NIM();
echo "<br>";
echo $almann->get_Mata_Kuliah();
echo "<br>";
echo $almann->get_Dosen_Killer();
echo "<br>";
echo $almann->get_citacitaden();
echo "<br>";
?>
