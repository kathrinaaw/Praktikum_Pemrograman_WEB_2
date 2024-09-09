<?php
class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getNama() {
        return $this->nama;
    }
    public function getNim() {
        return $this->nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

$mahasiswa1 = new Mahasiswa("Katrina Devianti", "230102037", "Komputer dan Bisnis");
echo $mahasiswa1->getNama().'<br>';
echo $mahasiswa1->getNim().'<br>';
echo $mahasiswa1->getJurusan().'<br><br>';

$mahasiswa1->setNama("Noni");
$mahasiswa1->setNim("123456789");
$mahasiswa1->setJurusan("KOMBIS");

echo $mahasiswa1->getNama().'<br>';
echo $mahasiswa1->getNim().'<br>';
echo $mahasiswa1->getJurusan().'<br>';
?>