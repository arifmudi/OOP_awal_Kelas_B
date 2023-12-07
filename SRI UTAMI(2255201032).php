<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa{
  // Properties
  private $name;
  private $nim;
  private $matakuliah;
  private $dosenkiller;
  private $citacita;
  private $Hobby;

  public function __construct($name,$nim,$matakuliah,$dosenkiller,$citacita, $Hobby){
    $this->name = $name;
    $this->nim = $nim;
    $this->matakuliah = $matakuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
    $this->Hobby = $Hobby;
    }
    
  function get_name() {
    return $this->name;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_matakuliah() {
    return $this->matakuliah;
  }
  function get_dosenkiller() {
    return $this->dosenkiller;
  }
  function get_citacita() {
    return $this->citacita;
	}
  function get_Hobby() {
    return $this->Hobby;
	}
}
class Universitas extends Mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami'; 
  }
}

$sriutami = new Universitas('sriutami','2255201032','pbo','ArifMudiPriyanto.s.t.m.kom','ibupersit','Healing');
echo $sriutami->Salam();
echo "<br>";
echo $sriutami->get_name();
echo "<br>";
echo $sriutami->get_nim();
echo "<br>";
echo $sriutami->get_matakuliah();
echo "<br>";
echo $sriutami->get_dosenkiller();
echo "<br>";
echo $sriutami->get_citacita();
echo "<br>";
echo $sriutami->get_Hobby();

?>
 
</body>
</html>
