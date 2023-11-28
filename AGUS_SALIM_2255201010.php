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


  public function __construct($Nama, $NIM, $MataKuliah, $dosenkiller, $citacita){
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->MataKuliah = $MataKuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
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
}

$Agussalim = new Mahasiswa('Agussalim', '2255201010', 'PBO', 'Megawati', 'Sugeh');
echo $Agussalim->get_Nama();
echo "<br>";
echo $Agussalim->get_NIM();
echo "<br>";
echo $Agussalim->get_MataKuliah();
echo "<br>";
echo $Agussalim->get_dosenkiller();
echo "<br>";
echo $Agussalim->get_citacita();
?>

</body>
</html>
