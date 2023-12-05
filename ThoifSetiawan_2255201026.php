

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


$thoif = new Universitas('Thoif Setiawan', '2255201026', 'PBO', 'pak arif', 'Bahagia Bersamanya', 'Rebahan');
echo $thoif->Salam();
echo "<br>";
echo $thoif->get_Nama();
echo "<br>";
echo $thoif->get_NIM();
echo "<br>";
echo $thoif->get_MataKuliah();
echo "<br>";
echo $thoif->get_dosenkiller();
echo "<br>";
echo $thoif->get_citacita();
echo "<br>";
echo $thoif->get_Hobby();
?>

</body>
</html>
