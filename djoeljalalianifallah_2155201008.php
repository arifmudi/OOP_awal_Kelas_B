<?php
class Universitas {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $Cita_cita;
  private $Hobi;

  // Methods
  function __construct($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $Cita_cita, $Hobi){
  $this->Nama = $Nama;
  $this->NIM = $NIM; 
  $this->Mata_Kuliah = $Mata_Kuliah;
  $this->Dosen_Killer = $Dosen_Killer;
  $this->Cita_cita = $Cita_cita;
  $this->Hobi = $Hobi;
  }

  public function intro() {
    echo "The Name is {$this->Nama} and the NIM is {$this->NIM} and the Mata Kuliah is {$this->Mata_Kuliah} and the Dosen Killer is {$this->Dosen_Killer} and the Cita cita is {$this->Cita_cita} and the Hobi is {$this->Hobi}."; 
  }
}
 
  // Mahasiswa is inherited from Universitas
    class Mahasiswa extends Universitas {
    public function message() {
      echo "selamat datang dikampus kami "; 
    }
 }



$Mahasiswa = new Mahasiswa('Djoel jalalianifallah', '2155201008','program berorientasi objek','bapak arif mudi priyatno','jadi milyarder','membaca webtoon');
$Mahasiswa->message();
echo "<br>";
$Mahasiswa->intro();
?>


