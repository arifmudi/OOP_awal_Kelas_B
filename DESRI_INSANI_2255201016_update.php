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
  private $citacita;
  private $hobby;

  // Methods
  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita,$hobby){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
    $this->hobby = $hobby; 
  }

  function get_Nama() {
    return $this->Nama;
  }

  function get_NIM(){
    return $this->NIM;
  }
 
  function get_MataKuliah(){
    return $this -> MataKuliah;
  }
 
  function get_dosenkiller(){
    return $this -> dosenkiller;
  }

  function get_citacita(){
    return $this -> citacita;
  }
  function get_hobby(){
    return $this -> hobby;
  } 
}

class universitas extends Mahasiswa {
  public function Salam(){
    echo 'Selamat datang dikampus kami';
  }
}
$Desriinsani = new Mahasiswa('Desriinsani', '2255201010', 'PBO', 'Melati', 'masuk syurga','Tidur');
echo $DesriInsani->get_Nama();
echo "<br>";
echo $DesriInsani->get_NIM();
echo "<br>";
echo $DesriInsani->get_MataKuliah();
echo "<br>";
echo $DesriInsani->get_dosenkiller();
echo "<br>";
echo $DesriInsani->get_citacita();
echo "<br>";
echo $DesriInsani->get_hobby();
?>
 
</body>
</html>
