<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $citacitaden;
  private $hobiden;

  // Methods
   public function __construct($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $citacitaden, $hobiden){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->Mata_Kuliah = $Mata_Kuliah;
    $this->Dosen_Killer = $Dosen_Killer;
    $this->citacitaden =  $citacitaden;
    $this->hobiden =  $hobiden;
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
    function get_hobiden() {
    return $this->hobiden;
  }
}

class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami'; 
   }
}

$almann = new Universitas('alman', '2255201001', 'pbo', 'pak arif', 'rangkayo', 'tekan hp');
echo $almann->salam();
echo "<br>";
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
echo $almann->get_hobiden();
echo "<br>";
?>
