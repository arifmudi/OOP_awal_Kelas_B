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

$sriwiji = new Mahasiswa('sriwiji', '2255201058', 'PBO', 'bapak arip', 'pengusaha');
echo $sriwiji->get_Nama();
echo "<br>";
echo $sriwiji->get_NIM();
echo "<br>";
echo $sriwiji->get_MataKuliah();
echo "<br>";
echo $sriwiji->get_dosenkiller();
echo "<br>";
echo $sriwiji->get_citacita();
?>

</body>
</html>
