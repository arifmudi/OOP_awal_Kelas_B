<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_kuliah;
  private $Dosen_killer;
  private $Cita_cita;
  private $Hobi;
  
   function __construct($Nama, $NIM, $Mata_kuliah, $Dosen_killer, $Cita_cita, $Hobi){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->Mata_kuliah = $Mata_kuliah;
    $this->Dosen_killer = $Dosen_killer;
    $this->Cita_cita = $Cita_cita;
    $this->Hobi = $Hobi;
   }  

  // Methods
  function get_Nama() {
    return $this->Nama;
  }
 
  function get_NIM() {
    return $this->NIM;
  }
  
  function get_Mata_kuliah() {
    return $this->Mata_kuliah;
  }
 
  function get_Dosen_killer() {
    return $this->Dosen_killer;
  }
  
  function get_Cita_cita() {
    return $this->Cita_cita;
  }
	
  function get_Hobi() { 
    return $this->Hobi;
  }
}

class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang dikampus kami';
  }
}

$nata = new Universitas("nata", "2255201007", "pbo", "pak arif", "sawit10H", "main gitar");

echo $nata->Salam();
echo "<br>";
echo $nata->get_Nama();
echo "<br>";
echo $nata->get_NIM();
echo "<br>";
echo $nata->get_Mata_kuliah();
echo "<br>";
echo $nata->get_Dosen_killer();
echo "<br>";
echo $nata->get_Cita_cita();
echo "<br>";
echo $nata->get_Hobi();
?> 
  
</body>
</html>
