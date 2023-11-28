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

  // Methods
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
    return $this -> MataKuliah;
  }
 
  function get_dosenkiller(){
    return $this -> dosenkiller;
  }

  function get_citacita(){
    return $this -> citacita;

  }
}

$Desriinsani = new Mahasiswa('Desriinsani', '2255201010', 'PBO', 'Melati', 'masuk syurga');
echo $DesriInsani->get_Nama();
echo "<br>";
echo $DesriInsani->get_NIM();
echo "<br>";
echo $DesriInsani->get_MataKuliah();
echo "<br>";
echo $DesriInsani->get_dosenkiller();
echo "<br>";
echo $DesriInsani->get_citacita();

?>
 
</body>
</html>
