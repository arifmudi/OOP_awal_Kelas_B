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

  public function __construct($name,$nim,$matakuliah,$dosenkiller,$citacita){
    $this->name = $name;
    $this->nim = $nim;
    $this->matakuliah = $matakuliah;
    $this->dosenkiller = $dosenkiller;
    $this->citacita = $citacita;
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
}

$sriutami = new mahasiswa('sriutami','2255201032','pbo','ArifMudiPriyanto.s.t.m.kom','ibupersit');
echo $sriutami->get_name();
echo "<br>";
echo $sriutami->get_nim();
echo "<br>";
echo $sriutami->get_matakuliah();
echo "<br>";
echo $sriutami->get_dosenkiller();
echo "<br>";
echo $sriutami->get_citacita();

?>
 
</body>
</html>
