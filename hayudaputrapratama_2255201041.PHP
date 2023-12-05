<!DOCTYPE html>
<html>
<body>

 <?php
 class Mahasiswa {

 private $name;
 private $nim;
 private $matakuliah;
 private $dosenkiller;
 private $citacita;
 private $hoby;

  public function __construct($name,$nim,$matakuliah,$dosenkiller,$citacita, $hoby){
    $this->name = $name; 
    $this->nim = $nim; 
    $this->matakuliah = $matakuliah; 
    $this->dosenkiller = $dosenkiller; 
    $this->citacita = $citacita; 
    $this->hoby = $hoby; 
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
   function get_hoby() {
    return $this->hoby;
  }
}

class universitas extends mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami'; 
  }
}

$Hayudaputrapratama = new Universitas('hayuda','2255201041','pbo','arif mudi priyanto.s.t.m.kom','jadipahlawanmu','mancingkemarahan');
echo $Hayudaputrapratama ->Salam();
echo "<br>";
echo $Hayudaputrapratama ->get_name();
echo "<br>";
echo $Hayudaputrapratama ->get_nim();
echo "<br>";
echo $Hayudaputrapratama ->get_matakuliah();
echo "<br>";
echo $Hayudaputrapratama ->get_dosenkiller();
echo "<br>";
echo $Hayudaputrapratama ->get_citacita();
echo "<br>";
echo $Hayudaputrapratama ->get_hoby();
?>

</body>
</html>
