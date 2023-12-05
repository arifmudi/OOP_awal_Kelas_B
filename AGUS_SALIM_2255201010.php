<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {

  private $Nama;
  private $NIM;
  private $MataKuliah;
  private $dosenkiller;
  private $citacita;
  private $Hobby;


  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita, $Hobby){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
    $this->Hobby = $Hobby;
  }
  

  function get_Nama() {
    return $this->Nama;
  }
  function get_NIM(){
    return $this->NIM;
  }
  function get_MataKuliah(){
    return $this->MataKuliah;
  }
  function get_dosenkiller(){
    return $this->dosenkiller;
  }
    function get_citacita(){
    return $this->citacita;
  }
    function get_Hobby(){
    return $this->Hobby;
  }
}

class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami'; 
  }
}


$Agussalim = new Universitas('Agussalim', '2255201010', 'PBO', 'Megawati', 'Sugeh', 'Baca Komik');
echo $Agussalim->Salam();
echo "<br>";
echo $Agussalim->get_Nama();
echo "<br>";
echo $Agussalim->get_NIM();
echo "<br>";
echo $Agussalim->get_MataKuliah();
echo "<br>";
echo $Agussalim->get_dosenkiller();
echo "<br>";
echo $Agussalim->get_citacita();
echo "<br>";
echo $Agussalim->get_Hobby();
?>

</body>
</html>
