<!DOCTYPE html>
<html>
<body>

 <?php
 class Mahasiswa {

 private $name;
 private $nim;
 private $mata_kuliah;
 private $dosen_killer;
 private $cita_cita;
 private $hoby;

  public function __construct($name,$nim,$mata_kuliah,$dosen_killer,$cita_cita, $hoby){
    $this->name = $name; 
    $this->nim = $nim; 
    $this->mata_kuliah = $mata_kuliah; 
    $this->dosen_killer = $dosen_killer; 
    $this->cita_cita = $cita_cita; 
    $this->hoby = $hoby; 
  }
  
   function get_name() {
    return $this->name;
  }
  
   function get_nim() {
    return $this->nim;
  }
  
   function get_mata_kuliah() {
    return $this->mata_kuliah;
  }
 
   function get_dosen_killer() {
    return $this->dosen_killer;
  }
  
   function get_cita_cita() {
    return $this->cita_cita;
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

$Hayuda_putra_pratama = new Universitas('hayuda','2255201041','pbo','arif mudi priyanto.s.t.m.kom','jadi pahlawanmu','mancing kemarahan');
echo $Hayuda_putra_pratama ->Salam();
echo "<br>";
echo $Hayuda_putra_pratama ->get_name();
echo "<br>";
echo $Hayuda_putra_pratama ->get_nim();
echo "<br>";
echo $Hayuda_putra_pratama ->get_mata_kuliah();
echo "<br>";
echo $Hayuda_putra_pratama ->get_dosen_killer();
echo "<br>";
echo $Hayuda_putra_pratama ->get_cita_cita();
echo "<br>";
echo $Hayuda_putra_pratama ->get_hoby();
?>

</body>
</html>
