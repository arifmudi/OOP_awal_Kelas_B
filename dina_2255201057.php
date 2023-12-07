<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matakuliah;
  private $dosenkiller;
  private $citacita;
  private $hobby;

  // Constructor
  public function __construct($name, $nim, $mata_kuliah, $dosen_killer, $citacita, $hobby) {
    $this->nama = $name;
    $this->nim = $nim;
    $this->matakuliah = $mata_kuliah;
    $this->dosenkiller = $dosen_killer;
    $this->citacita = $citacita;
    $this->hobby = $hobby;
  }

  // Methods
  function get_name() {
    return $this->nama;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_mata_kuliah() {
    return $this->matakuliah;
  }
  function get_dosen_killer() {
    return $this->dosenkiller;
  }
  function get_citacita() {
    return $this->citacita;
  }
  function get_hobby() {
    return $this->hobby;
  }
}

class universitas extends mahasiswa {
  public function Salam() {
    echo 'Selamat Datang Di Kampus Kami';
  }
}

$dina = new universitas('dina', '2255201057', 'pbo', 'PakArif', 'jaya', 'makan');
echo $dina->Salam();
echo "<br>";
echo $dina->get_name();
echo "<br>";
echo $dina->get_nim();
echo "<br>";
echo $dina->get_mata_kuliah();
echo "<br>";
echo $dina->get_dosen_killer();
echo "<br>";
echo $dina->get_citacita();
echo "<br>";
echo $dina->get_hobby();
?>
</body>
</html>
